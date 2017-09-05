<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminPanel</title>
    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('fine-uploader/fine-uploader-new.css') }}">
    <style type="text/css">
    .active_section {
        background-color: #0366d6;
    }

    #trigger-upload {
        color: white;
        background-color: #00ABC7;
        font-size: 14px;
        padding: 7px 20px;
        background-image: none;
    }

    #fine-uploader-manual-trigger .qq-upload-button {
        margin-right: 15px;
    }

    #fine-uploader-manual-trigger .buttons {
        width: 100% !important;
    }

    #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
        width: 100%;
    }

    #flag_span {
        display: block;
        float: right;
    }

    .buttons {
        margin-top: 40px;
    }

    .pace {
        -webkit-pointer-events: none;
        pointer-events: none;

        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .pace-inactive {
        display: none;
    }

    .pace .pace-progress {
        background: #29d;
        position: fixed;
        z-index: 2000;
        top: 0;
        right: 100%;
        width: 100%;
        height: 2px;
    }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler aside-menu-toggler" type="button" style="margin-right: 0;"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </button>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item nav-dropdown active_section" index="posts">
                        <a class="nav-link nav-dropdown-toggle" href="#">Events & Activities</a>
                    </li>
                    <li class="nav-item nav-dropdown" index="announcements">
                        <a class="nav-link nav-dropdown-toggle" href="#">Announcements</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-menu d-md-down">
                    <a class="btn" id="add_new_post" href="#"><i class="fa fa-plus-square-o"></i> &nbsp;Add New</a>
                </li>
            </ol>
            @yield('content')
        </main>
    </div>
    <footer class="app-footer">
        <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.1/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/file-uploader/5.15.0/fine-uploader.min.js"></script>
    <!-- GenesisUI main scripts -->
    {{--
    <script src="js/app.js"></script> --}}
    <script type="text/template" id="qq-template-manual-trigger">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="buttons">
                <div class="qq-upload-button-selector btn btn-primary">
                    <div>Select files</div>
                </div>
                <button type="button" id="trigger-upload" class="btn btn-primary">
                    <i class="icon-upload icon-white"></i> Upload
                </button>
                <div id="flag_span">
                    Select one image to show as cover
                </div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>
            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>
            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>
            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>
    <script type="text/javascript">
    window.paceOptions = {
        ajax: {
            trackMethods: ['GET', 'POST']
        },
        restartOnRequestAfter: true
    };
    var photo_id_array = {};

    var manualUploader = new qq.FineUploader({
        element: document.getElementById('fine-uploader-manual-trigger'),
        template: 'qq-template-manual-trigger',
        request: {
            endpoint: '/photos/insert',
            params: {
                _token: '{{ csrf_token() }}'
            }
        },
        deleteFile: {
            enabled: true,
            method: "POST",
            endpoint: "/photos/delete",
            params:{
                photo_id: 0
            }
        },
        thumbnails: {
            placeholders: {
                waitingPath: '/fine-uploader/placeholders/waiting-generic.png',
                notAvailablePath: '/fine-uploader/placeholders/not_available-generic.png'
            }
        },
        autoUpload: false,
        debug: true,
        callbacks: {
            onComplete: function(id, name, response) {
                photo_id_array[response.uuid]=response.photo_id;
                console.log(photo_id_array);
            },
            onSubmitFileDelete: function(id){
                this.setDeleteFileParams({
                    photo_id: photo_id_array[this.getUuid(id)],
                    // _token: '{{ csrf_token() }}'
                }, id);
            },
            onError: function(id, name, errorReason, xhrOrXdr) {
                alert(qq.format("Error on file number {} - {}.  Reason: {}", id, name, errorReason));
            }
        }
    });
    qq(document.getElementById("trigger-upload")).attach("click", function() {
        manualUploader.uploadStoredFiles();
    });


    var current_showing = 'posts';
    $('#add_new_post').click(function() {
        console.log('#' + current_showing + '_form');
        $('.animated').hide();
        $('#' + current_showing + '_form').show();
    });

    $('.nav>li').click(function() {
        $(this).siblings().removeClass('active_section');
        $(this).addClass('active_section');
        if ($('#' + $(this).attr('index')).css('display') == 'none') {
            $('#' + $(this).attr('index')).siblings().hide();
            $('#' + $(this).attr('index')).show();
            current_showing = $(this).attr('index');
            $('.breadcrumb-item').text($(this).text());
        }
    });

            $('#post_submit').click(function(e) {
                e.preventDefault();
                console.log(photo_id_array);
                $.post('/post&photos/insert', {
                    _token: '{{ csrf_token() }}',
                    title: $('#title').val(),
                    content: $('#content').val(),
                    publisher: $('#publisher').val(),
                    'ary[]': photo_id_array
                }).fail(
                    function(e) {
                        console.log(e.responseText);
                    }
                );
            });
    </script>
    @yield('script')
</body>

</html>
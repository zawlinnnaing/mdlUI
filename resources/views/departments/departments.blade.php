@extends('layout') @section('content')
<div class="column is-12" style="background-color: white !important; padding: 0 !important">
    <div class="tile is-ancestor is-parent" style="margin: 0 auto;">
        <div class="tile is-2" style="padding: 7px; padding-right: 0; background-color: white; 
		border-right: 1px solid #ddd; border-bottom: 1px solid #ddd;">
            <div class="departments-toggle is-hidden-desktop
		{{ Request::path() ==  'departments' ? 'hide' : ''  }}">
                Departments
                <img src="{{asset('images/dropdown.svg')}}" style="width: 15px; float:right; margin: 6px; margin-right: 10px !important;">
                <img src="{{asset('images/dropup.svg')}}" style="width: 15px; float:right; margin: 6px; margin-right: 10px !important;" class="hide">
            </div>
            <aside class="menu departments-menu
			{{ Request::path() !==  'departments' ? 'is-hidden-mobile' : ''  }}" style="margin-top: 7px;
                <p class="menu-label">
                    Engineering Deptartments
                </p>
                <ul class="menu-list">
                    <li><a href="/departments/civil" class=" 
				    	{{ Request::path() ==  'departments/civil' ? 'active' : ''  }}">Civil</a></li>
                    <li><a href="/departments/mech" class=" 
				    	{{ Request::path() ==  'departments/mech' ? 'active' : ''  }}">Mechnical</a></li>
                    <li><a href="/departments/mecha" class=" 
				    	{{ Request::path() ==  'departments/mecha' ? 'active' : ''  }}">Mechatronics</a></li>
                    <li><a href="/departments/ec" class=" 
				    	{{ Request::path() ==  'departments/ec' ? 'active' : ''  }}">Electronics</a></li>
                    <li><a href="/departments/ep" class=" 
				    	{{ Request::path() ==  'departments/ep' ? 'active' : ''  }}">Electrical Power</a></li>
                    <li><a href="/departments/ceit" class=" 
				    	{{ Request::path() ==  'departments/ceit' ? 'active' : ''  }}">Computer Engineering & Information Technology</a></li>
                    <li><a href="/departments/che" class=" 
				    	{{ Request::path() ==  'departments/che' ? 'active' : ''  }}">Chemical</a></li>
                    <li><a href="/departments/archi" class=" 
				    	{{ Request::path() ==  'departments/archi' ? 'active' : ''  }}">Architecture</a></li>
                </ul>
                <p class="menu-label">
                    Supporting Deptartments
                </p>
                <ul class="menu-list">
                    <li><a href="/departments/ir" class=" 
				    	{{ Request::path() ==  'departments/ir' ? 'active' : ''  }}">International Relation</a></li>
                    <li><a href="/departments/maths" class=" 
				    	{{ Request::path() ==  'departments/maths' ? 'active' : ''  }}">Mathematics</a></li>
                    <li><a href="/departments/eng" class=" 
				    	{{ Request::path() ==  'departments/eng' ? 'active' : ''  }}">English</a></li>
                    <li><a href="/departments/myan" class=" 
				    	{{ Request::path() ==  'departments/myan' ? 'active' : ''  }}">Myanmar</a></li>
                </ul>
            </aside>
        </div>
        @yield('info')
        <div class="tile is-3" style="padding: 7px; padding-right: 0; background-color: white; margin-top: 10px; max-height: 150px; border: 1px solid grey;">
            @yield('contact')
        </div>
    </div>
    <style type="text/css">
    .hide {
        display: none;
    }

    .menu-list {
        list-style: none !important;
        margin: 0 !important;
    }

    .menu-list a {
        padding: 0.5em 0.5em !important;
    }

    .menu-list>li:hover {
        border-right: 3px solid #3273dc;
    }

    .menu-list>li:hover a {
        color: #3273dc;
    }

    .active {
        color: white !important;
        background-color: #2196F3 !important;
        border-bottom-right-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

        button.accordion {
    background-color: #2196F3;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #2196F3;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    border: 2px solid #BBDEFB;
    background-color: #BBDEFB;

}

.tile{
    background-color: #EEEEEE;
}
    i{
        display: inline !important;
    }
    @keyframes slideInFromTop{
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}
    .content {
        animation: 1s ease-out 0s 1 slideInFromTop;
    }
    .courses{
        margin: 2rem 0 ;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    .history p {
        animation-name: fadeIn;
        animation-duration: 2s;
        animation-iteration-count: 1;
        animation-delay: 1s;
        animation-timing-function: ease-in-out;
    }

    </style>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight +"px";
     // panel.style.paddingBottom = 18 + "px";
    } 
  }
}

  function collpaseOnHover(x){
   // x.classList.toggle("active");
    var panel = x.nextElementSibling;
    /*if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
        */
        panel.style.maxHeight = panel.style.maxHeight + 50;
      panel.style.maxHeight = panel.scrollHeight+"px";
     // panel.style.paddingBottom = 18 + "px";
    
  }



</script>
    @endsection
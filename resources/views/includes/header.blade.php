<header class="header-box">
    <nav class="nav-bar1">
        <div class="contact-head">
            <p>{{config('contact.tel.phone')}}</p>
            <div><a href="{{route('contact')}}">contact</a></div>
        </div>
        <ul class="nav-content">
            <li class="hover-li"><a href="{{route('home')}}" class="{{ Request::is('/') ? 'active-header' : '' }}">Home</a></li>
            <li  class="hover-li {{ Request::is('/pacific-Yurt') ? 'active-header' : '' }}">
                LEARN <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li">
                    <li><a href="{{route('pacificYurt')}}" class="{{ Request::is('/pacific-Yurt') ? 'active-header' : '' }}">Why Pacific Yurts? </a></li>
                </ul>
            </li>
            <li class="hover-li">
                GALLERY <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li">
                    <li><a href="{{route('galerryphoto')}}">Photo Gallery</a></li>
                    <li><a href="{{route('galleryvideo')}}">Video Gallery</a></li>
                    {{-- <li><a href="{{route('replacementparts')}}">Replacement Parts</a></li> --}}
                    <li><a href="{{route('virtualtour')}}">360° Virtual Tours</a></li>
                </ul>
            </li>
            <li class="hover-li">
                PRICING <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li">
                    <li><a href="{{route('customfeatures')}}">Standard/Custom Features</a></li>
                    <li><a href="{{route('build3d')}}">Yurt Builder 3D™</a></li>
                    <li><a href="{{route('replacementparts')}}">Replacement Parts</a></li>
                    <li><a href="{{route('shippingInfo')}}">Shipping Info</a></li>
                </ul>
            </li>
            <li class="hover-li">
                ABOUT US <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li">
                    <li><a href="{{route('environmental')}}">Environmental Initiatives</a></li>
                    <li><a href="{{route('testimonials')}}">Reviews and Testimonials</a></li>
                    <li><a href="{{asset('contact')}}">Contact Us</a></li>
                </ul>
            </li>  
        </ul>
        <div class="toggle-btn" id="btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-content-side">
            <span id="close"><i class="fa-solid fa-x"></i></span>
            <li class="hover-li-side" id="home"><a href="{{route('home')}}" class="home active-header">Home</a></li>
            <li class="hover-li-side">
                LEARN <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li-side">
                    <li><a href="{{route('pacificYurt')}}">Why Pacific Yurts?</a></li>
                    
                </ul>
            </li>
            <li class="hover-li-side">
                GALLERY <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li-side">
                    <li><a href="{{route('galerryphoto')}}">Photo Gallery</a></li>
                    <li><a href="{{route('galleryvideo')}}">Video Gallery</a></li>
                    <li><a href="{{route('virtualtour')}}">360° Virtual Tours</a></li>
                </ul>
            </li>
            <li class="hover-li-side">
                PRICING <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li-side">
                    <li><a href="{{route('customfeatures')}}">Standard/Custom Features</a></li>
                    <li><a href="{{route('build3d')}}">Yurt Builder 3D™</a></li>
                    <li><a href="{{route('replacementparts')}}">Replacement Parts</a></li>
                    <li><a href="{{route('shippingInfo')}}">Shipping Info</a></li>
                </ul>
            </li>
            <li class="hover-li-side">
                ABOUT US <span><i class="fa-solid fa-chevron-down"></i></span>
                <ul class="hidden-li-side">
                    <li><a href="{{route('environmental')}}">Environmental Initiatives</a></li>
                    <li><a href="{{route('testimonials')}}">Reviews and Testimonials</a></li>
                    <li><a href="{{asset('contact')}}">Contact Us</a></li>
                </ul>
            </li>    
        </ul>
    </nav>

<script>
const btn = document.getElementById("btn");
const close = document.getElementById("close");
const content = document.querySelector(".nav-content-side");
console.log(btn);

btn.addEventListener("click", () => {
    content.classList.add("activesidebar");

});

close.addEventListener("click", () => {
    content.classList.remove("activesidebar");
});

    </script>
</header>
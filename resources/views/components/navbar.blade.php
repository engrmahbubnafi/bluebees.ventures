<nav id="navbar" class="navbar navbar-expand-lg navbar-light navbar-color">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img
                src="{{ asset('images/logo.png') }}"
                alt="BlueBees Limited Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" onclick="navbarButtonToggle()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- @foreach ($menu as $menu) --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">HOME<span
                            class="sr-only">(current)</span></a>
                </li>
                {{-- @endforeach --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        OUR BUSINESSES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="focus-indicator"></div>
                        <a class="dropdown-item"
                            href="{{ route('knittersland') }}">Knittersland</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('nilam_xyz') }}">Nilam.xyz</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('xirooms') }}">Xirooms</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('trux24') }}">Trux24</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('bluebees_ai') }}">BlueBees
                            AI</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('bluebees_xyz') }}">BlueBees
                            XYZ</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item"
                            href="{{ route('bluebees4u') }}">BlueBees4U</a>
                        <hr class="dropdown-divider">
                        {{-- <a class="dropdown-item"
                            href="{{ route('homepage') }}">Nilam360</a> --}}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
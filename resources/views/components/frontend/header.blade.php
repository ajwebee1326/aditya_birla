<header>

    <div class="container position-relative">

        <nav class="navbar">

        

            <!-- Logo -->

            <div class="logo">

                <a href="index.php">

                    <img src="{{ asset('frontend') }}/assets/images/logo-light.png" class="logo-light" alt="Image">

                    <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" class="logo-dark" alt="Image">

                </a>

            </div>

            

            <!-- Site Menu -->

            <div class="site-menu">

                <ul>

                <li><a <?php if(basename($_SERVER['PHP_SELF']) === 'index.php') echo 'class="active"'; ?> href="{{route('viewIndex')}}">Home</a></li>

                <li><a <?php if(basename($_SERVER['PHP_SELF']) === 'about.php') echo 'class="active"'; ?> href="{{route('aboutUs')}}">About Us</a></li>

                    <li class="site-dropdown">

                        <a href="javascript:void(0)">Products <span class="bx bx-chevron-down"></span></a>

                        <ul class="site-submenu">

                            <li><a href="#">Brushes</a></li>

                            <li><a href="#">Components</a></li>

                            <li><a href="#">Canvas</a></li>

                            <li><a href="#">Art Accessories</a></li>

                        </ul>

                    </li>

                    <li><a <?php if(basename($_SERVER['PHP_SELF']) === 'initiatives.php') echo 'class="active"'; ?> href="{{route('initiatives')}}">initiatives</a></li>

                    <li><a <?php if(basename($_SERVER['PHP_SELF']) === 'contact.php') echo 'class="active"'; ?> href="{{route('contactUs')}}">Contact Us </a></li>

                </ul>

            </div>



            <!-- Hamburger Menu -->

            <div class="hamburger-menu">

                <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">

                    <path class="line line-top" d="M0,9h30" />

                    <path class="line line-center" d="M0,15h30" />

                    <path class="line line-bottom" d="M0,21h30" />

                </svg>

            </div>

        </nav>  

    </div>  

</header>
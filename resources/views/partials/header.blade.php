<body>
    <div class="columns is-centered">
        <figure class="image is-128x128 is-centered">
            <img src="{{asset('images/logocci.png')}}" alt="logo" class="img-size-50 mr-3 img-circle">
        </figure>
    </div>
    <nav class="navbar is-info content" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href=" ">
                Accueil
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Actualités
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Promotions
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            About
                        </a>
                        <a class="navbar-item">
                            Jobs
                        </a>
                        <a class="navbar-item">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
                <a class="navbar-item" href=" {{ route('message') }} ">
                    Profils
                </a>
            </div>
        </div>
    </nav>

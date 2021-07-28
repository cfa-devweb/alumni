<body>
    <div class="columns is-centered">
        <figure class="image is-128x128 is-centered is-flex">
            <img src="{{asset('images/logocci.png')}}" alt="logo" class="img-size-50 mr-3 img-circle">
            <img src="{{asset('images/logoegc.png')}}" alt="logo" class="img-size-50 mr-3 img-circle">
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
                    <a class="navbar-link">Promotions</a>
                    <div class="navbar-dropdown">

                        <div class="nested navbar-item dropdown">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                    <span>BTS Développeur Logiciel / Web</span>
                                    <span class="icon is-small">
                                        <!-- <i class="fas fa-angle-down" aria-hidden="true"></i> -->
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        2021
                                    </a>
                                    <a class="dropdown-item">
                                        2020
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        2019
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        ...
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="dropdown-divider">
                        <div class="nested navbar-item dropdown">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                    <span>BAC Technicien Helpdesk</span>
                                    <span class="icon is-small">
                                        <!-- <i class="fas fa-angle-down" aria-hidden="true"></i> -->
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        2021
                                    </a>
                                    <a class="dropdown-item">
                                        2020
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        2019
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        ...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="navbar-item">
                    Profils
                </a>
            </div>
        </div>


    </nav>

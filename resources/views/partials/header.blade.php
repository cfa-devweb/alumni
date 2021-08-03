<body>

    <section class="hero is-light">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-flex">
                <span class="icon-text column is-flex is-align-items-center">
                    <span class="icon">
                        <i class="fab fa-linkedin-in fas fa-lg"></i>
                    </span>
                </span>
                <span class="icon-text column is-flex is-align-items-center">
                    <span class="icon ">
                        <i class="fab fa-facebook-f fas fa-lg"></i>
                    </span>
                </span>
            </div>
            <div class="column is-flex is-one-thirth p-0">
                <span class="column icon-text is-flex is-align-items-center">
                    <span>Accéder au site de la CCI-NC</span>
                </span>
                <figure class="column is-flex is-align-items-center logo is-4by2">
                    <img class="p-2" src="{{asset('images/logo-cci.svg')}}" height="73" width="157">
                </figure>
            </div>
        </div>
    </section>

    </div>

    <div class="nav is-flex">
        <figure class="logo pt-5">
            <img src="{{asset('images/logocci.jpg')}}" height="89" width="210">
        </figure>
        <nav class="navbar-menu content" role="navigation" aria-label="main navigation">

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-center">

                    <a href="{{'/'}}" class="navbar-item">
                        Accueil
                    </a>
                    <a href="{{'/actualites'}}" class="navbar-item">
                        Actualités
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Promotions</a>

                        <div class="navbar-dropdown">

                            <div class="nested navbar-item dropdown">
                                <div class="dropdown-trigger">
                                    @foreach (\App\Models\Promotion::all() as $data)
                                    <a class="dropdown-item">{{$data->name}}</a>
                                    <hr>
                                    @endforeach
                                </div> 
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="{{'/members'}}" class="dropdown-item">
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
                                        <span>BAC A SABLE</span>
                                        <span class="icon is-small"></span>
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
                    <a class="navbar-item" href=" {{ route('login') }} ">
                        login
                    </a>
                    <a class="navbar-item" href=" {{ route('register') }} ">
                        register
                    </a>
                    <a href="{{ '/dashboard' }} " class="navbar-item">
                        Tableau de Bord
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </nav>
    </div>

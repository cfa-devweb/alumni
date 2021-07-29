@extends('/partials/layout')

@section('content')

<div class="hero is-fullheight">
    <div class="container">
        <!--<div class="col-md-8">-->
            <!--<div class="card">-->
                <div class="title">{{ __("S'inscrire") }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="field is-horizontal is-justify-content-space-between">
                            
                            <div class="control has-icons-left">
                                <label for="name" class="">{{ __('Name') }}</label>
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user mt-6"></i>
                                </span>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                            <div class="file">
                                <label class="file-label">
                                <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            ajouter un avatar
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="field is-horizontal is-justify-content-space-between">
                            <div class="control has-icons-left">
                                <label for="name" class="">{{ __('Prenom') }}</label>
                                <input id="last_name" type="text" class="input" name="last_name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user mt-6"></i>
                                </span>                                
                            </div>

                            <div class="control mx-6 ">
                                <div class="select  ">
                                    <select >
                                                <option>Status</option>
                                                <option>With options</option>
                                            </select>
                                </div>
                            </div>
                        
                            <div class="field ">
                                <div class="control ">
                                    <div class="select">
                                        <select >
                                                    <option>Promotion</option>
                                                    <option>With options</option>
                                                </select>
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="field is-horizontal is-justify-content-space-between">                         
                            <div class="control has-icons-left">
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope  mt-6"></i>
                                </span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="field ">
                                <div class="control ">
                                    <div class="select">
                                        <select >
                                                    <option>Année de la promotion</option>
                                                    <option>With options</option>
                                                </select>
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="field is-horizontal is-justify-content-space-between">
                            <div class="field  ">
                                <div class="control has-icons-left">
                                <label for="password" class="">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-key  mt-6"></i>
                                    </span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="control has-icons-left">
                                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-key  mt-6"></i>
                                    </span>
                                </div>

                                
                                
                            </div>

                            <div class="control  ">
                                <textarea class="textarea mx-4" placeholder="Parler moi de vous !" rows="4" cols="73"></textarea>
                            </div>
                        </div>

                        <div class="field is-horizontal ">
                        <div class="field ">
                            <div class="field is-horizontal">
                                <div class="control has-icons-left">
                                    <input class="input " type="text" placeholder="Lien linkedin">
                                    <span class="icon is-small is-left">
                                                            <i class="fab fa-linkedin"></i>
                                                        </span>
                        </div>
                        <div class="field mx-5">
                            <div class="control is-gapless">
                                <label class="checkbox ">
                                                <input type="checkbox">
                                                    en soumettant de fomulaire ,<br>  j'accepte que les informations saisi <br> soit exploité
                                            </label>
                            </div>
                            <br>
                            <div class="control ">
                                <label class="checkbox">
                                                <input type="checkbox">
                                                j'accepte que les informations saisi soit exploité
                                            </label>
                            </div>
                        </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="control has-icons-left offset-md-4">
                                <button type="submit" class="btn button is-success">
                                    {{ __("S'incrire") }}
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

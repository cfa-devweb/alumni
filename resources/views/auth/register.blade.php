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


<!-------------------------------------------------------------------------------------------------------

   <div class="hero is-fullheight">
        <div class="container ">
            <form action="{{ route ('register') }}"method="POST" class="box">
                
                @csrf
               
                <div class="title has-text-centered">{{ __("S'inscrire") }}<i class="fas fa-pencil-alt"></i></div>
                <label for="name" >{{ __('Nom') }}</label>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left">
                        <input id="name" class="input @error('name') is-invalid @enderror " type="text" placeholder="Nom" required>
                        <span class="icon is-small is-left">
                                <i class="fa fa-user"></i>
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
                
                <div class="field is-horizontal is-justify-content-space-between ">
                
                    <p class="control has-icons-left">
                        <label for="last_nalme" >{{ __('Prenom') }}</label>
                        <input id='last_name' class="input " type="text" placeholder="Prenom" value="" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user mt-6"></i>
                        </span> 

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
                  
                    
                    <div class="field is-horizontal is-justify-content-space-between ">
                         
                            <p class="control has-icons-left">
                            <label for="email" >{{ __(' Addresse email') }}</label>
                            <input id ='email' class="input mb-3  @error('email') is-invalid @enderror" type="email" placeholder="@email" value="" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope mt-6"></i>
                            </span>
                            @error(' Addresse email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <div class="control ">
                                <label for="years" >{{ __('Année de la promotion') }}</label>
                            <input id='years' class="input " type="number" placeholder="Année de la promotion" value="" required>
                           
                            </div>
                    </div>
                   
                    <div class="field  ">
                        <div class="field is-horizontal">
                            <div class="control has-icons-left ">
                            <label for="password">{{ __('Mot de passe') }}</label>
                                <input  class="input mb-3 @error('password') is-invalid @enderror" type="password" placeholder="mot de passe" value="" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-key mt-6"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <div class="control has-icons-left ">
                            <label for="password-confirm">{{ __('Confirmation du mot de passe') }}</label>
                                <input id="password-confirm" class="input mb-3 " type="password" placeholder="confirmé mot de passe" value="" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-key mt-6"></i>
                                </span>
                                </div>
                            </div>

                            <div class="control  ">
                                <textarea class="textarea mx-4" placeholder="Parler moi de vous !" rows="4" cols="73"></textarea>
                            </div>

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
                    <div class="field is-horizontal is-justify-content-space-between">
                        <div class="control">
                        <div class="">
                                <div class="control">
                                    <button type="submit" class=" button is-success">
                                        {{ __('Envoyer') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="control">
                            <button class="delete is-danger is-light  ">Fermé</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
@endsection


@extends('/partials/layout')

@section('content')

<div class="hero is-fullheight">
    <div class="container">
        <!--<div class="col-md-8">-->
            <!--<div class="card">-->
                <div class="title">{{ __("S'inscrire") }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="field is-horizontal is-justify-content-space-between">
                            <div class="control has-icons-left">
                                <label for="name" class="">{{ __('Nom') }}</label>
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
                                <label for="avatar" class="file-label">{{ __('Avatar') }}</label>    
                                    <div class="file-cta mx_6">                                              
                                        <input id="avatar" type="file" class="control   @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>      
                            </div>
                        </div>
                        <div class="field is-horizontal is-justify-content-space-between">
                            <div class="control has-icons-left">
                                <label for="name" class="">{{ __('Prénom') }}</label>
                                <input id="last_name" type="text" class="input" name="last_name" value="" required autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user mt-6"></i>
                                </span>                                
                            </div>
                            
                            <div class="field ">
                                <div class="control mx-6 ">
                                    <div class="select">
                                        <select name='promotion'>
                                            <option value="">promotions</option>                                     
                                            @foreach ($promotions as $data)                                            
                                            <option value={{$data->id}}>{{$data->name}}</option>  
                                            @endforeach                                          
                                        </select>
                                    </div>
                                </div>  
                            </div>

                            <div class="field ">
                                <div class="control ">
                                    <div class="select">
                                        <select name='promotion_year' >                                       
                                        <option value="" ></option>
                                            <option value="" ></option>                                                                                    
                                        </select>
                                    </div>
                                </div>  
                            </div>
                        </div>
                          

                        <div class="field is-horizontal is-justify-content-space-between"> 

                             <div class="control has-icons-left">
                                <label for="name" class="">{{ __('Date de naissance') }}</label>
                                <input id="birth_date" type="date" class="input" name="birth_date" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user mt-6"></i>
                                </span>                                
                            </div> 

                            <div class="control has-icons-left">
                                <label for="email" class="">{{ __(' Addresse E-Mail') }}</label>
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
                            <div class="control ">
                                <label class="checkbox"name='terms'>
                                                <input type="checkbox">
                                                je suis en poste 
                                            </label>
                            </div>
                            <div class="control ">
                                <label class="checkbox"name='terms'>
                                                <input type="checkbox">
                                                je suis ne suis pas poste 
                                            </label>
                            </div>
                            
                        </div>
                        
                        <div class="field is-horizontal is-justify-content-space-between">
                            <div class="field  ">
                                <div class="control has-icons-left">
                                <label for="password" class="">{{ __('Mot de passe') }}</label>
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
                                    <label for="password-confirm" class="">{{ __('Confirmé votre mot de passe') }}</label>
                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-key  mt-6"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="control  ">
                                <textarea class="textarea mx-4" placeholder="Parler moi de vous !" name='description' rows="6" cols="73"></textarea>
                            </div>
                        </div>
                        <div class="field is-horizontal ">
                        <div class="field ">
                            <div class="field is-horizontal">
                                <div class="control has-icons-left">
                                    <input class="input " type="text" placeholder="Lien linkedin" name='leak'>
                                    <span class="icon is-small is-left">
                                                            <i class="fab fa-linkedin"></i>
                                                        </span>
                        </div>
                        <div class="field mx-5">
                            <div class="control is-gapless">
                                <label class="checkbox ">
                                                <input type="checkbox" name='terms'>
                                                    en soumettant de fomulaire ,<br>  j'accepte que les informations saisi <br> soit exploité
                                            </label>
                            </div>
                            <br>
                            <div class="control ">
                                <label class="checkbox"name='terms'>
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
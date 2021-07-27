@extends('/partials/layout')


@section('content')
<section class="hero is-fullheight">
        <div class="container ">
            <form action="" class="box">
                <!------------------------------------------------------form start + input +file-->
                <p class="title has-text-centered">S'inscrire <i class="fas fa-pencil-alt"></i></p>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control has-icons-left">
                        <input class="input " type="text" placeholder="Nom" required>
                        <span class="icon is-small is-left">
                                <i class="fa fa-user"></i>
                            </span>
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
                <!----------------------------------------------------------input + select-->
                <div class="field is-horizontal is-justify-content-space-between ">
                    <p class="control has-icons-left">
                        <input class="input" type="text" placeholder="Prenom" value="" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </p> 
                        <div class="control mx-6 ">
                            <div class="select  ">
                                <select required>
                                            <option>Status</option>
                                            <option>With options</option>
                                        </select>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control ">
                                <div class="select">
                                    <select required>
                                                <option>Promotion</option>
                                                <option>With options</option>
                                            </select>
                                </div>
                            </div>  
                        </div>  
                    </div>
                    <!--------------------------------------------------------input+ select-->
                    <div class="field is-horizontal is-justify-content-space-between ">
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="@email" value="" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </p> 
                            <div class="control ">
                                <div class="select ">
                                    <select required>
                                                <option>Année de la promotion</option>
                                                <option>With options</option>
                                            </select>
                                </div>
                            </div>
                    </div>
                   <!---------------------------------------------------------input+textarea+checkbox -->
                    <div class="field  ">
                        <div class="field is-horizontal">
                        <div class="control has-icons-left ">
                            <input class="input mb-3" type="password" placeholder="mot de passe" value="" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-key"></i>
                            </span>
                        <div class="control has-icons-left ">
                            <input class="input mb-3 " type="password" placeholder="confirmé mot de passe" value="" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="control  ">
                            <textarea class="textarea mx-4" placeholder="Parler moi de vous !" rows="4" cols="73"></textarea>
                        </div></div>
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
                                                <input type="checkbox"required>
                                                    en soumettant de fomulaire ,<br>  j'accepte que les informations saisi <br> soit exploité
                                            </label>
                            </div>
                            <br>
                            <div class="control ">
                                <label class="checkbox">
                                                <input type="checkbox"required>
                                                j'accepte que les informations saisi soit exploité
                                            </label>
                            </div>
                        </div>
                </div>
                <div class="field is-horizontal is-justify-content-space-between">
                    <div class="control">
                        <button class="button is-success">Envoyé</button>
                    </div>
                    <div class="control">
                        <button class="button is-danger is-light ">Fermé</button>
                        
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>

@endsection
@extends('/partials/layout')

@section('content')

<br><br>
<h1 class="title">Ajouter un nouvel article :</h1>

@if ($errors->any())
    <div class="notification is-danger">
        <strong>Oops !</strong> Il y a eu des problèmes avec votre input...<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('admin.articles.store') }}">

    @csrf <!-- {{ csrf_field() }} -->

    <fieldset>
        <div class="container">

            <div class="field">
                <label class="label" for="user_id">ID Utilisateur</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Votre ID utilisateur." name="user_id" id="user_id">
                </div>
            </div>

            <div class="field">
                <label class="label" for="title">Titre</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Votre titre ici." name="title" id="title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="category_id">ID Catégorie</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Votre catégorie ici." name="category_id" id="categorie_id">
                </div>
            </div>

            <div class="field">
                <label class="label" for="content">Contenu de votre post</label>
                <div class="control">
                    <textarea class="textarea" type="text" placeholder="Votre contenu ici" name="content" id="content"></textarea>
                </div>
            </div><br>

            <div class="control">
                <label class="label" for="visible">Visibilité : Afficher l'article sur la page des actualités ?</label>
                <label class="radio">
                    <input type="radio" name="visible" value=1>
                    Oui
                </label>
                <label class="radio">
                    <input type="radio" name="visible" value=0>
                    Non
                </label>
            </div><br>

            <div class="control">
                <label class="label" for="promoted">Mettre l'article à la une ?</label>
                <label class="radio">
                    <input type="radio" name="promoted" value=1>
                    Oui
                </label>
                <label class="radio">
                    <input type="radio" name="promoted" value=0>
                    Non
                </label>
            </div><br><br>

            <!-- <div class="file has-name is-right">
                <label class="file-label">
                    <input class="file-input" type="file" name="resume">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choisissez votre image de couverture.
                        </span>
                    </span>
                    <span class="file-name">Mon_image.png</span>
                </label>
            </div> -->

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-rounded is-primary">Envoyer</button>
                </div>
                <div class="control">
                    <button class="button is-danger is-rounded">Annuler</button>
                </div>
            </div>

        </div>
    </fieldset>
</form>


@endsection
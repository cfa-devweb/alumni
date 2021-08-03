@extends('/partials/layout')

@section('content')

<form method="post" action="">

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
                <label class="label" for="categorie_id">ID Catégorie</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Votre catégorie ici." name="categorie_id" id="categorie_id">
                </div>
            </div>

            <div class="field">
                <label class="label" for="content">Contenu de votre post</label>
                <div class="control">
                    <textarea class="textarea" type="text" placeholder="Votre contenu ici" name="content" id="content"></textarea>
                </div>
            </div><br>

            <div class="control">
                <label class="label" for="visibility">Visibilité : Afficher l'article sur la page des actualités ?</label>
                <label class="radio">
                    <input type="radio" name="answer" value=1>
                    Oui
                </label>
                <label class="radio">
                    <input type="radio" name="answer" value=0>
                    Non
                </label>
            </div><br>

            <div class="control">
                <label class="label" for="sticky_post">Mettre l'article à la une ?</label>
                <label class="radio">
                    <input type="radio" name="answer" value=1>
                    Oui
                </label>
                <label class="radio">
                    <input type="radio" name="answer" value=0>
                    Non
                </label>
            </div>

            <div class="file has-name is-right">
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
            </div>

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
@extends('/partials/layout')


@section('content')

<div class="container">
    <div class="field">
    <label class="label">Titre*</label>
    <div class="control">
        <input class="input" type="text" name="title" placeholder="Votre titre ici.">
    </div>
    </div>

    <div class="field">
    <label class="label">Contenu de votre actualité*</label>
    <div class="control">
        <textarea class="textarea" placeholder="Votre contenu ici"></textarea>
    </div>
    </div>

    <div class="columns is-multiline">
        <div class="select">
            <select>
                <option>Selectionner la catégorie*</option>
                <option name="categorie_id" value=""></option>
            </select>
        </div>
        <label class="checkbox">
            <input type="checkbox" name="sticky_post">
            Mettre à la une
        </label>
        <label class="checkbox">
            <input type="checkbox" name="visibility">
            Archiver
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
        <span class="file-name">
        Mon_image.png
        </span>
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


@endsection
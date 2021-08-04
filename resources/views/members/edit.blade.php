@extends('/partials/layout')

@section('content')

<form method="post" action="{{ route('updateMember', $member->id) }}">

    @csrf
    @method('PUT')

    <div class="columns">
        <div class="column ">
            <img src="https://fakeimg.pl/140x140/">
            <div class="file">
                <label class="file-label">
                    <input class="file-input" type="file" name="resume">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Modifier mon image
                        </span>
                    </span>
                </label>
            </div>
            <input type="text" placeholder="Nom*" name="last_name" class="input is-info block" value=""><br>
            <input type="text" placeholder="Prénom*" name="first" class="input is-info block"><br>
            <input type="email" placeholder="Mon email*" name="email" class="input is-info block"><br>
            <input type="date" placeholder="Date de naissance" name="bith_date" class="input is-info block"><br>
            <textarea placeholder="Décrivez vous en quelques lignes..." name="description"
                class="textarea is-info block" rows='5'></textarea><br>
        </div>
        <div class="column">
            <input type='select' class='block'>
            <label class='label ml-4' "> Je suis en poste actuellement: </label>
        <input type='radio' class='radio  ml-5'  name=" worker"> Oui
                <input type='radio' class='radio' name="worker"> Non

                <input type='text' placeholder="Mon emploi actuel" name="business" class="input is-info block"><br>
                <div class="file has-name is-right">
                    <label class="file-label">
                        <input class="file-input" type="file" name="resume">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label" name="cv">
                                Choose a file…
                            </span>
                        </span>
                        <span class="file-name">
                            Aucun fichier choisi...
                        </span>
                    </label>
                    <!-- </div>
        <label class="label">Modifier mon mot de passe:</label><br>
        <input type='password' placeholder='Mot de passe actuel' class="input is-info block"><br>
        <input type='password' placeholder='Nouveau mot de passe' class="input is-info block"><br>
        <input type='password' placeholder='Confirmez votre nouveau mot de passe' class="input is-info block"><br>
        <button class='ml-6 p-3'>Modifier</button>
    </div>
</div> -->
</form>
@endsection

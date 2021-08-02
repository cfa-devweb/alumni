@extends('/partials/layout')

@section('content')
<br><br>
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
        <input type="text" placeholder="Nom*" class="input is-info block"><br>
        <input type="text" placeholder="Prénom*" class="input is-info block"><br>
        <input type="email" placeholder="Mon email*" class="input is-info block"><br>
        <input type="date" placeholder="Date de naissance" class="input is-info block"><br>
        <textarea placeholder="Décrivez vous en quelques lignes..." class="textarea is-info block" rows='5'></textarea><br>
    </div>
    <div class="column">
        <input type='select' class='block'>
        <label class='label ml-4'> Je suis en poste actuellement: </label>
        <input type='radio' class='radio  ml-5'> Oui
        <input type='radio' class='radio'> Non

        <input type='text' placeholder="Mon emploi actuel" class="input is-info block"><br>
        <div class="file has-name is-right">
  <label class="file-label">
    <input class="file-input" type="file" name="resume">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
    <span class="file-name">
        Aucun fichier choisi...
    </span>
  </label>
</div>
        <label class="label">Modifier mon mot de passe:</label><br>
        <input type='password' placeholder='Mot de passe actuel' class="input is-info block"><br>
        <input type='password' placeholder='Nouveau mot de passe' class="input is-info block"><br>
        <input type='password' placeholder='Confirmez votre nouveau mot de passe' class="input is-info block"><br>
        <button class='ml-6 p-3'>Modifier</button>
    </div>
</div>
 @endsection
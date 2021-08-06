<div class="container">
    <form method="post" class="create-event" action="{{ route('admin.evenements.store') }}">
        @csrf
        @method('PUT')
        <label class="label" for="title" >Le nom de l'évènement à modifier.</label>
        <input class="input" type="text" name="title">
        <label class="label" for="address">Adresse de l'évènement</label>
        <input class="input" type="text" name="adress">
        <label class="label" for="start">date et heure de début</label>
        <input class="input" type="datetime" name="start_at">
        <label class="label" for="end">date et heure de fin</label>
        <input class="input" type="datetime" name="end_at">
        <label class="label" for="content">Contenu de l'évènement</label>
        <textarea class="textarea" type="textarea" name="content"></textarea>
        <button class="button is-rounded is-primary" type="submit">Ajouter</button>
</div>

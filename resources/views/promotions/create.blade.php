@extends('/partials/layout')

@section('content')
<div class="container">
    <form method="post" class="create-promotion" action="{{ route('promotions.store') }}">
        <label class="label" for="name">Le nom de la promotion à créer.</label>
        <input class="input" type="text" name="name">
        <label class="label" for="year">L'année de la promotion à créer</label>
        <input class="input" type="text" name="year" pattern="[0-9]{4}" placeholder="2021">
        <button class="button is-rounded is-primary" type="submit">Ajouter</button>
    </form>
</div>
@endsection
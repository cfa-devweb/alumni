@extends('/partials/layout')

@section('content')
<form class="container create-promotion">
    <label class="label" for="name">Le nom de la promotion à créer.</label>
    <input class="input" type="text" name="name">
    <label class="label" for="year">L'année de la promotion à créer</label>
    <input class="input" type="text" name="year" pattern="[0-9]{4}" placeholder="2021">
</form>

@endsection
@extends('/partials/layout')

@section('content')
<div class="container">
    <form method="post" class="edit-promotion" action="{{route('promotions.update', $promotion->id)}}">
        @csrf
        @method('PATCH')
        <label class="label" for="name">Le nom de la promotion à modifier.</label>
        <input class="input" type="text" name="name" value="{{ $promotion->name }}">
        <label class="label" for="year">L'année de la promotion à modifier</label>
        <input class="input" type="text" name="year" pattern="[0-9]{4}" placeholder="2021" value="{{ $promotion->year }}">
        <button type="submit">Modifier</button>
    </form>
</div>

@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

<div class="container">
    <div class="columns is-centered">
        <div class="column is-8">
            <form class="box" method="POST" action="{{ route('admin.apprentis.update', $apprentice->id) }}">
                @csrf
                @method('PUT')
                <input type="text" name="first_name" class="input" value="{{ $apprentice->first_name }}">
                <input type="text" name="last_name" class="input" value="{{ $apprentice->last_name }}">
                <input type="date" name="birth_date" class="input" value="{{ $apprentice->birth_date }}">
                <button class="button is-primary" type="submit">Modifier</button>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

<div class="container">
    <div class="columns is-centered">
        <div class="column is-8">
            <form class="box" method="POST" action="{{ route('admin.apprentis.store') }}">
                @csrf
                @method('POST')
                <input type="text" name="first_name" class="input">
                <input type="text" name="last_name" class="input">
                <input type="date" name="birth_date" class="input">
                <button class="button is-primary" type="submit">Créer</button>
            </form>
        </div>
    </div>
</div>


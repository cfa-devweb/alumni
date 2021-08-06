<form class="box" method="POST" action="{{ route('admin.apprentis.update', $apprentice->id) }}">
    @csrf
    @method('PUT')

    <fieldset>
        <div class="container">
            <div class="field">
                <div class="control">
                    <input type="text" name="first_name" value="{{ $apprentice->first_name }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="text" name="last_name" value="{{ $apprentice->last_name }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="date" name="birth_date" value="{{ $apprentice->birth_date }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type=submit class="button is-danger is-rounded">Modifier</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
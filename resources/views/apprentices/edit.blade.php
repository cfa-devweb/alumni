<form action="{{route('admin.apprentis.update', $apprentice->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="first_name" value="{{ $apprentice->first_name }}">
    <input type="text" name="last_name" value="{{ $apprentice->last_name }}">
    <input type="date" name="birth_date" value="{{ $apprentice->birth_date }}">
    <button type="submit">MODIFIER</button>

</form>
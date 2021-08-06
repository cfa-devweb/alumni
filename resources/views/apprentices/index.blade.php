<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

<table class="table">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom de famille</th>
        </tr>
    </thead>
    <tbody>
        @foreach($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->first_name }}</td>
                <td>{{ $apprentice->last_name }}</td>
                <td>
                    <a class="button" href="{{ route('admin.apprentis.edit', $apprentice->id) }}">Modifier</a>
                    <form method="POST" action="{{ route('admin.apprentis.destroy', $apprentice->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <a class="button" href="{{ route('admin.apprentis.create') }}">Ajouter</a>  
</table>



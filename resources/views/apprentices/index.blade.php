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
                    <a href="{{ route('admin.apprentis.edit', $apprentice->id) }}">Modifier</a>
                </td>
            </tr>
        @endforeach
    </tbody>     
</table>

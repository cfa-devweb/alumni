<a href="{{ route('admin.evenements.create') }}">Créer l'évènement</a>

<table class="table">
    <thead>
        <tr>
            <th>intitulé</th>
            <th>adresse</th>
            <th>détails</th>
            <th>début</th>
            <th>début</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->adress }}</td>
            <td>{{ $event->content }}</td>
            <td>{{ $event->start_at }}</td>
            <td>{{ $event->end_at }}</td>
            <td>
                <a href="{{ route('admin.evenements.edit', $event->id) }}">Modifier l'évènement</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


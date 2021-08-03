@extend('layout')


@section('content')


<table class="table">

<thead>
    <tr>
        <th><abbr title="Nom"> Nom </abbr></th>
        <th><abbr title="Prénom"> Prénom </abbr></th>
        <th><abbr title="Promotion"> Promotion </abbr></th>
        <th><abbr title="actions"> actions </abbr></th>
    </tr>
</thead>
<tbody>
    @foreach ($messagesMember as $item)
        <tr>
            <td> {{ $item -> }} </td>
        </tr>
    @endforeach
</tbody>

</table>

@endsection
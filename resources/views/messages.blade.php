@extends('/partials/layout')


@section('content')

<p>Hello profils</p>
<table class="table">
    <thead>
        <tr>
        <th title="Promotion" >Promotion</th>
        <th title="année">Année</th>
        <th title="actions" >Actions</th>
        </tr>   
    </thead>
    <tbody>
        @foreach ($conversations as $item)
            <tr>
                <td>
                    {{ $item ->promotion ->name  }}
                </td>
                <td>
                    {{ $item ->year  }} 
                </td>    
                <td>
                    <button class="button is-primary" > <a href=" {{ route('conversations',$item ->id) }} ">Voir</a> </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
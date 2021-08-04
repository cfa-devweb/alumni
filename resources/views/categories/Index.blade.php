@extends('/partials/layout')

@section('content')

    <div class="box">
        @foreach($categories as $data)  
        <div class="box">
            {{$data->id}}
            {{$data->Name}}
        </div>
        @endforeach        
    </div>
    
@endsection
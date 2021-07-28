@extends('/partials/layout')

@section('content')



<div class="is-active">

    <x-conversations :messages="$messages"/>
</div>
@endsection
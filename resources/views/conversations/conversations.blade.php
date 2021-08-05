@extends('/partials/layout')

@section('content')
    <div class="box is-4 columns is-flex-direction-column">
        <h2 class="title is-2">discussion avec :  </h2>
        <div class="column is-6">
            @foreach ($messages as $item)
                @if ($loop ->even)
                <div class="box is-light p-6 column ">
                    {{ $item ->content }}
                </div>
                <div class="is-flex is-align-items-flex-start is-justify-content-flex-end">
                    <p> {{ $item ->member ->first_name }} </p>
                    <figure class="image is-32x32 m-0 mx-2">
                        <img src=" {{ asset('images/avatar.png') }} ">
                    </figure>
                    <p> {{ \Carbon\Carbon::parse($item->created_at)-> locale('fr') -> format('Y/m/d') }} </p>
                </div>
            @endforeach
        </div>
        <form method="POST" action=" {{ route('sendMessage', $conversations->id) }} ">
            <div class="field">
                <div class="control">
                    <textarea class="textarea" placeholder="Ecrivez votre message...." name="content" id="content" cols="30" rows="5"></textarea>
                    <button class="button is-primary" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
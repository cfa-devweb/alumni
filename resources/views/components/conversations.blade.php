
<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="content">
        <h2 class="title is-2">discussion avec : {{ $messages[0] ->toMember->last_name }} {{ $messages[0] ->toMember->first_name }} </h2>
        <div>
            @foreach ($messages as $item)
            
                <div class="box is-light p-6">
                    {{ $item ->content }}
                </div>
                <div class="is-flex is-align-items-flex-start is-justify-content-flex-end">
                    <p> {{ $item ->member ->first_name }} </p>
                    <figure class="image is-64x64 m-0 mx-2">
                        <img src=" {{ asset('images/avatar.png') }} ">
                    </figure>
                    <p> {{ \Carbon\Carbon::parse($item->created_at)-> locale('fr') -> format('Y/m/d') }} </p>
                </div>
            @endforeach
        </div>
        <form method="POST" action=" {{ route('sendMessage') }} ">
            <div class="field">
                <div class="control">
                    <textarea class="textarea" placeholder="Ecrivez votre message...." name="content" id="" cols="30" rows="10"></textarea>
                    <button class="button is-primary" type="submit">Envoyer</button>
                </form>
                </div>
            </div>

    </div>
   
</div>

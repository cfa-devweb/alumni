@extends('/partials/layout')

@section('content')

<div class="columns is-flex my-6 is-justify-content-center">
    <div class="column is-one-third">
        <form>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>            
            <div class="field">
                <p class="control is-justify-content-center">
                    <button class="button is-warning">
                        Modifier
                    </button>
                </p>
            </div>
        </form>
    </div>   
</div>

@endsection

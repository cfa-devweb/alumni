@extends('/partials/layout')

@section('content')
<div class="is-flex is-justify-content-center">
    <form action="" method="POST">
        @csrf
        <label class="label">ajouter une nouvelle categorie</label>
        <div class="field is-horizontal  is-justify-content-centered">        
            <div class="field">            
                <div class="control">
                    <input id='name'class="input" type="text" placeholder="future categorie">
                </div>        
            </div>

            <div class="field is-horizontal ">
                <div class="control">
                    <button class="button is-primary ">Ajoutez</button>
                </div>
                <div class="control">
                    <button class="button is-warning">Retour</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection 
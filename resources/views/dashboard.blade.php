@extends('/partials/layout')

@section('content')

<div class="container">
    <div class="columns is-flex">
        <div class="column is-3">
            <nav class="panel">
                <p class="panel-heading">
                    Repositories
                </p>
                <div class="panel-block">
                    <p class="control has-icons-left">
                        <input class="input" type="text" placeholder="Search">
                        <span class="icon is-left">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span>
                    </p>
                </div>

                <a class="panel-block is-active">
                    Actualités en cours
                </a>
                <a class="panel-block">                 
                    Actualités passées
                </a>             
                <a class="panel-block">
                    Signalements en cours
                </a>
                <a class="panel-block">                   
                    Signalements traités
                </a>

                <div class="panel-block">
                    <button class="button is-link is-outlined is-fullwidth">
                        Reset all filters
                    </button>
                </div>
            </nav>

        </div>

        <div class="column">
            <div class="buttons">
                <button class="button is-primary">Ajouter une actualité</button>
            </div>

            <table>
            <div class="container">
            <table class="table is-striped is-fullwidth">
            <thead class="table has-background-primary">
             
             <tr>

                 <th class="has-text-light"><abbr title="Position">Créateur</abbr></th>
                 <th class="has-text-light"><abbr title="Played">Titres</abbr></th>
                 <th class="has-text-light"><abbr title="Won">Date de création</abbr></th>
                 <th class="has-text-light"><abbr title="Won">Actions</abbr></th>

             </tr>
         </thead>
      
             

                <tbody>
                    <tr>
                        <td>nom</td>
                        <td>titre_post</td>
                        <td>29/07/2021</td>
                        <td>
                            <div class="buttons">
                                <button class="button is-primary">Primary</button>
                                <button class="button is-warning">Link</button>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>


        </div>
    </div>

</div>


















@endsection

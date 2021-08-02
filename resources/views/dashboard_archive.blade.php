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
  

            <table class="table">
                <div class="container">
                    <table class="table is-striped is-fullwidth">
                        <thead class="table has-background-primary">
                            <tr>
                                <th class="has-text-light"><abbr title="Creator">Créateur</abbr></th>
                                <th class="has-text-light"><abbr title="title">Titres</abbr></th>
                                <th class="has-text-light"><abbr title="dateCreat">Date de création</abbr></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>@Mark</td>
                                <td>Titre1</td>
                                <td>29/07/2021</td>
                                <tr>
                                <td>@Jacob</td>
                                <td>Throton</td>
                                <td>29/07/2021</td>
                                <tr>
                                <td>@Larry</td>
                                <td>TheBird</td>
                                <td>29/07/2021</td>
                                <tr>

                              
                            </tr>
                            <td>
                                    <div class="buttons">
                                        <button class="button is-primary" name="btnEdit">Revenir aux actualités en cours</button>
                                    
                                    </div>
                            </td>

                           
                        </tbody>
                    </table>
                </div>
            </table>
        </div>






@endsection
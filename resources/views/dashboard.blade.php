@extends('/partials/layout')

@section('content')

<div class="container">
    <div class="columns is-flex my-6">
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
                                <th class="has-text-light"><abbr title="Creator">Créateur</abbr></th>
                                <th class="has-text-light"><abbr title="title">Titres</abbr></th>
                                <th class="has-text-light"><abbr title="dateCreat">Date de création</abbr></th>
                                <th class="has-text-light"><abbr title="action">Actions</abbr></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actualites as $actualite)
                            <tr>
                                <td>{{ $actualite->username}}</td>
                                <td>{{ $actualite->title }}</td>
                                <td>{{ \Carbon\Carbon::parse($actualite->created_at)-> locale('fr') -> format('Y/m/d') }}
                                </td>
                                <td>
                                    <div class="buttons">
                                        <button class="button is-primary" name="btnEdit">Modifier</button>
                                        <button class="button is-warning" name="btnArchive">Archiver</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </table>
        </div>
<<<<<<< HEAD
        
        @endsection
=======
    </div>
</div>
@endsection
>>>>>>> c57be8b1a0d674f6afd3f4d5d719642811c72073

@extends('/partials/layout')

@section('content')

<div class="container">
    <div class="columns is-flex my-6">
        @include('/partials/sideBarDashboard')
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
    </div>
</div>
@endsection

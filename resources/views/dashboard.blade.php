@extends('/partials/layout')

@section('content')
<div class="columns is-flex my-6">

    <div class="container">
        <div class="columns is-flex my-6">
            @include('/partials/sideBarDashboard')

            <div class="column">
                <div class="buttons">
                    <button class="button is-primary">
                        Ajouter une actualité
                    </button>
                </div>

                <table>
                    <div class="container">
                        <table class="table is-striped is-fullwidth">
                            <thead class="table has-background-primary">
                                <tr>
                                    <th class="has-text-light">Créateur</th>
                                    <th class="has-text-light">Titres</th>
                                    <th class="has-text-light">Date de création</th>
                                    <th class="has-text-light">Actions</th>
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
                                            <button class="button is-primary" name="btnEdit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="button is-warning" name="btnArchive">
                                                <i class="fas fa-archive"></i>
                                            </button>
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
        @endsection

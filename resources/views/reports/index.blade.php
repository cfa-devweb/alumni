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
                <a class="panel-block">
                    Actualités en cours
                </a>
                <a class="panel-block">
                    Actualités passées
                </a>
                <a class="panel-block is-active">
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
            <table>
                <div class="container">
                    <table class="table is-striped is-fullwidth">
                        <thead class="table has-background-primary">
                            <tr>
                                <th class="has-text-light"><abbr title="Author">Signalé par</abbr></th>
                                <th class="has-text-light"><abbr title="title">Raisons</abbr></th>
                                <th class="has-text-light"><abbr title="dateReports">Date de signalement</abbr></th>
                                <th class="has-text-light"><abbr title="profil">Profils signalés</abbr></th>
                                <th class="has-text-light"><abbr title="action">Classement</abbr></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->content}}</td>
                                <td>{{ $report->from_member_id}}</td>
                                <td>{{ \Carbon\Carbon::parse($report->created_at)-> locale('fr') -> format('Y/m/d') }}</td>
                                <td>
                                    <div class="buttons">
                                        <button class="button is-primary" name="btnView">View</button>   
                                    </div>
                                </td>
                                <td>
                                    <div class="buttons">
                                        <button class="button is-warning" name="btnTraité">Supprimé</button>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </table>
        </div>
        @endsection

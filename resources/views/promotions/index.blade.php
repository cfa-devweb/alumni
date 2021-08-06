<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<div class="container is-flex is-justify-content-center">    
    <table class="table">
        <thead>
            <tr>
                <th class="promo">POMO</abbr></th>
                <th class="years">Années</abbr></th>
                <th class="Action">Action</abbr></th>

            </tr>
        </thead>
        <tbody>
            @foreach($promotions as $data)
            <tr>
                <th>
                    {{ $data->name }}
                </th>
                <td>
                    {{ $data->year }}
                </td>
                <td>
                    <form action="route : {{'admin.promotions.created', $data->id}}" method="GET">
                        <button class="button" type="submit">
                            Edit
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><div>
        <button class="button is-primary" type="submit">
            Create
        </button>
    </div>

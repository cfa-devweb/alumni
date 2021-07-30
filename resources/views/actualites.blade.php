@extends('/partials/layout')

@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <!-- <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>
  <body>

  <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-24x24">
          <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">John Smith</p>
        <p class="subtitle is-6">@johnsmith</p>
      </div>
    </div>

    <div class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
      <a href="#">#css</a> <a href="#">#responsive</a>
      <br>
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
</div
      
  </body>
  </html>
@endsection
@extends('/partials/layout')

@section('content')

<style>
    .card {
        background-color: #f7f7f7;
        min-height: 650px;
    }
</style>

<section class="blog-posts">
    <div class="container">
        <br>
        <div class="row columns is-multiline">
          @foreach ($blog_posts as $blog_post)
            <hr>
           
                <div class="column post is-4">
                    <div class="card">
                        <article class="columns is-multiline">
                            <div class="column card-image">
                                <figure class="image is-16by9">
                                    <img src="https://cdn.emk.dev/templates/post-img.png" alt="Featured Image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <h3 class="heading post-category">{{ $blog_post->category }}</h3>
                                <h2 class="title post-title">{{ $blog_post->title }}</h2>
                                <p class="post-excerpt">{{ \Illuminate\Support\Str::limit($blog_post->content, $limit=120, $end='...') }}</p>
                                <br>
                                <a href="<?php echo url("actualites/{$blog_post->id}") ?>" class="button is-primary">Read More</a>
                            </div>
                        </article>
                    </div> 
                </div>
           @endforeach 
        </div>
        
    </div>
</section>

@endsection
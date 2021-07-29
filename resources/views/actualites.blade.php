@extends('/partials/layout')

@section('content')

<section class="blog-posts">
    <div class="container">
        <br>
        <div class="columns is-multiline">
          @foreach ($blog_posts as $blog_post)
            <hr>
           
                <div class="column post is-4">
                    <article class="columns is-multiline">
                        <div class="column is-12 post-img">
                            <img src="https://cdn.emk.dev/templates/post-img.png" alt="Featured Image">
                        </div>
                        <div class="column is-12 featured-content ">
                            <h3 class="heading post-category">{{ $blog_post->category }}</h3>
                            <h2 class="title post-title">{{ $blog_post->title }}</h2>
                            <p class="post-excerpt">{{ \Illuminate\Support\Str::limit($blog_post->content, $limit=120, $end='...') }}</p>
                            <br>
                            <a href="<?php echo url("actualites/{$blog_post->id}") ?>" class="button is-primary">Read More</a>
                        </div>
                    </article>
                </div>
           @endforeach 
        </div>
        
    </div>
</section>

@endsection
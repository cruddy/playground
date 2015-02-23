@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{ $post->title }}</h1>
    </div>

    <article>
        @if ($post->image)
            <p>
                <img src="{!! asset($post->image) !!}" class="img-responsive" style="max-height: 300px; margin: 0 auto">
            </p>
        @endif

        {!! $post->body !!}
    </article>
@overwrite
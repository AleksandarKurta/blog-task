@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mt-3">
                <div class="card-header">
                    <h3>{{ $post->title }}</h3>
                    <h5>Posted by: {{ $post->user->name }}, at: {{ $post->created_at->diffForHumans() }}</h5>
                </div>

                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>

                @include('post.comment')

                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection

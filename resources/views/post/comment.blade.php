<h4>Comments:</h4>
@foreach($post->comments as $comment)
    <div class="card ml-3">
        <div class="card-header">
            <h3>{{ $comment->title }}</h3>
            <h5>Commented by: {{ $comment->user->name }}, at: {{ $comment->created_at->diffForHumans() }}</h5>
        </div>

        <div class="card-body">
            {{ $comment->content }}
        </div>
    </div>
@endforeach
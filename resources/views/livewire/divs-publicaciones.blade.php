<div>
    @php
        $posts = \App\Models\Post::with('user')->get();
    @endphp
    @foreach($posts as $post)
        <div class="card w-75">
            @if($post->user)
                <div class="card-header">
                    {{ $post->user->name }}
                </div>
            @endif
            <hr>
            <div class="card-body">
                <p class="card-text">{{ $post->text }}</p>
                @if($post->foto)
                    <img src="{{ asset('storage/' . $post->foto) }}" alt="Post image">
                @endif
            </div>
            <div class=" text-muted text-right">
                {{ $post->created_at->format('d/m/Y') }}
            </div>
        </div>
    @endforeach
</div>
<div>
    @php
        $posts = \App\Models\Post::with('user')->get();
    @endphp
    @foreach($posts as $post)
        <div class="card w-75">
            @if($post->user)
                <div class="card-header">
                    {{ $post->user->name }} -
                    <div class="text-right m-2">
                     <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="avatar" class="avatar-muro">

                    </div>
                    <h5><b><u>{{$post->titulo}}</u></b></h5>
                </div>
            @endif
            <hr>
            <div class="card-body">
                <p class="card-text">{{ $post->text }}</p>
                @if($post->foto)
                    <img src="{{ asset('storage/' . $post->foto) }}" alt="Post image">
                @endif
            </div>
            <div class=" text-muted text-right m-2">
                {{ $post->created_at->format('d/m/Y') }}
            </div>
        </div>
    @endforeach
</div>
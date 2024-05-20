<div>
    @php
        $posts = \App\Models\Post::with('user')->orderBy('created_at', 'desc')->get();
    @endphp
    @foreach($posts as $post)
    <div class="card w-100 mb-4 shadow-sm">
    @if($post->user)
        <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
            <div>
                <span>{{ $post->user->name }} - {{$post->titulo}}</span>
            </div>
            <div class="ml-3">
                <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 50px; height: 50px;">
            </div>
        </div>
    @endif
    <div class="card-body">
        <p class="card-text">{{ $post->text }}</p>
        @if($post->foto)
            <img src="{{ asset('storage/' . $post->foto) }}" alt="Post image" class="img-fluid rounded mb-3">
        @endif
    </div>
    <div class=" text-muted text-right">
        {{ $post->created_at->format('d/m/Y') }}
    </div>
    @if(Auth::user()->nivel == 1 || Auth::user()->id == $post->user_id)
        <div class="card-footer text-right">
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $post->id }}">X</button>
        </div>
    @endif
</div>
        <div class="modal fade" id="deleteModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $post->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de que quieres eliminar este post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" >Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
    @endforeach
</div>
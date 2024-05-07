<div class="card">
  <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar:</label>
            <input type="file" id="avatar" name="avatar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar perfil</button>
    </form>
</div>
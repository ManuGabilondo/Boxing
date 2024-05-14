@extends('layouts.master')
@section('title')
    Pago de Subscripción
@endsection
@section('content')

<div>
    <h1>Tu suscripción</h1>
    <div class="alert alert-info" role="alert">
        El precio de la suscripción es de 7,99 euros.
    </div>
    <div>
 <form action="{{ route('subscripcion.update', auth()->user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Pagar ahora</button>
        </form>    </div>
</div>

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function() {
    });
</script>
@endsection
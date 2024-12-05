@extends('layouts.master')
@section('title')
    Menú
@endsection
@section('content')
    <section class="introduccion py-5">
        <h1 class="text-center mb-4"><b>Menú</b></h1>
    </section>


{{-- @livewire('videos-funcional') --}}



<!-- Modals -->
@livewire('modales-funcional')
<!-- Modals -->

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

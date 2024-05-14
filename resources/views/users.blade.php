@extends('layouts.master')
@section('title')
    Usuarios
@endsection
@section('content')

@section('page-title')

@endsection
<div class="component-wrapper">
    <div class="livewire-component">
        @livewire('top-divs')
    </div>
    <div class="livewire-component">
        @livewire('data-users', ['model' => 'App\Models\User'])
    </div>
</div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>

<script>
$(document).ready(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: '{{ route('users.data') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            {data:'premium', name:'subscripción', orderable: false, searchable: false, render: function(data, type, row){
                if(data == 1){
                    return '<span class="badge badge-success">Premium</span>';
                }else{
                    return '<span class="badge badge-danger">Free</span>';
                }
            } },
            { data: 'actions', name: 'acciones', orderable: false, searchable: false }
        ],
        initComplete: function(settings, json) {
            this.api().columns.adjust(); // Ajusta automáticamente los anchos de las columnas después de cargar la tabla
        }
    });
});
</script>

@endsection

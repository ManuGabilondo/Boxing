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
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }        },
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
            this.api().columns.adjust(); 
        }
    });
});
</script>

@endsection

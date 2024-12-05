@extends('layouts.master')
@section('title')
    Usuarios
@endsection
@section('content')
@php
    $reservas = \App\Models\Cita::with('user')->get(['user_id','asunto' ,'fecha_reserva']);
@endphp
@section('page-title')

@endsection
<div class="component-wrapper">
    <div class="livewire-component">
        @livewire('top-divs')
    </div>
    <div class="livewire-component">
        @livewire('data-users', ['model' => 'App\Models\User'])
    </div>
<h2>Calendario General de citaciones</h2>
    <div id="calendar-container" class="mt-5">
        <div id="calendar"></div>
    </div>
</div>
<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #FF0000;">
                <h5 class="modal-title text-white" id="deleteModalLabel"><i class="fas fa-trash-alt mr-2"></i>Confirmar Eliminación</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que quieres dar de baja este usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-black white" data-dismiss="modal">Cancelar</button>
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.js"></script>

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
            }
        },
        ajax: '{{ route('users.data') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'premium', name: 'subscripción', orderable: false, searchable: false, render: function(data, type, row) {
                if (data == 1) {
                    return '<span class="badge badge-success">Premium</span>';
                } else {
                    return '<span class="badge badge-danger">Free</span>';
                }
            }},
            { data: 'actions', name: 'acciones', orderable: false, searchable: false }
        ],
        initComplete: function(settings, json) {
            this.api().columns.adjust();
        }
    });

    $('#calendar').fullCalendar({
        locale: 'es',
        events: [
            @foreach($reservas as $cita)
            {
                title : '{{ $cita->user->name }} -  {{ $cita->asunto }}',
                start : '{{ \Carbon\Carbon::parse($cita->fecha_reserva)->format('Y-m-d') }}'
            },
            @endforeach
        ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultView: 'month'
    });
});
function showDeleteModal(button) {
        var userId = button.getAttribute('data-id');
        var form = document.getElementById('deleteForm');
        form.action = '/users/' + userId; // Cambia la ruta según sea necesario
        $('#deleteModal').modal('show');
    }
</script>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
@endsection

@extends('layouts.master')
@section('title')
    Usuarios
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('data-users', ['model' => 'App\Models\User'])
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
$(document).ready(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('users.data') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            {data:'premium', name:'premium', render: function(data, type, row){
                if(data == 1){
                    return '<span class="badge badge-success">Premium</span>';
                }else{
                    return '<span class="badge badge-danger">Free</span>';
                }
            } },
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
        ]
    });
});
</script>
@endsection

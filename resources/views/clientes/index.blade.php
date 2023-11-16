@extends('layouts.admin')

@section('titulo')
    <span>Nuevo Cliente</span>

    <a href="{{ route('clientes.create')}}" class="btn btn-success btn-rounded">
        <i class="fas fa-plus"></i>
    </a>
    
@endsection

@section('contenido')
    @include('clientes.modals.create')
    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Clientes</li>
        </ol>

    <div class="card">
        <div class="table-responsive">

            <div class="card-body">
                <table id="dt-products" class="table table-striped table-bordered dts">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Dni</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Genero</th>
                            <th class="text-center">Celular</th>
                            <th class="text-center">Correo</th>
                            <th class="text-center">Dirección</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $key => $cliente)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $cliente->dni }}</td>
                                <td>{{ $cliente->nombres }}</td>
                                <td>{{ $cliente->apellidos }}</td>
                                <td>{{ $cliente->generos->nombre }}</td>
                                <td>{{ $cliente->celular }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td style="width: 10%" class="text-center text-sm">
                                    @if ($cliente->activo == '1')
                                        <span class="badge badge-success">activo</span>
                                    @else
                                        <span class="badge badge-danger">inactivo</span>
                                    @endif
                                </td>
                                <td>

                                    @if ($cliente->activo == '1')
                                        <a href="{{ url('cliente/altabaja', [$cliente->activo, $cliente->id]) }}"
                                            class="active-form-data" title="desactivar el estado de cliente"><i
                                                class="fa fa-arrow-circle-down"></i></a>
                                    @else
                                        <a href="{{ url('cliente/altabaja', [$cliente->activo, $cliente->id]) }}"
                                            class="inactive-form-data" title="activar el estado de cliente"><i
                                                class="fa fa-arrow-circle-up"></i></a>
                                    @endif
                            
                                    <a href="" class="edit-form-data" data-toggle="modal" data-target="#editModal{{ $cliente->id }}" title="Editar cliente">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal{{ $cliente->id }}" title="Eliminar cliente">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            @include('clientes.modals.update')
                            @include('clientes.modals.delete')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('libs/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

    @if (!$errors->isEmpty())
        @if ($errors->has('post'))
            <script>
                $(function() {
                    $('#createMdl').modal('show');
                });
            </script>
        @else
            <script>
                $(function() {
                    $('#editMdl').modal('show');
                });
            </script>
        @endif
    @endif
@endpush

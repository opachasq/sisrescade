@extends('layouts.admin')

@section('titulo')
    <span>Gestión de Clientes</span>
   
@endsection
@section('contenido')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('clientes.index')}}">Index</a></li>
    <li class="breadcrumb-item active">Clientes</li>
</ol>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary" style="text-align: center; color: #5a5c69">
                            <h4 class="card-title">Datos del Cliente</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="padding-right: 100px">
                                    <div class="col-md-12">
                                        <form action="{{ route('cliente.buscar') }}" method="get">
                                            <div class=" col-lg-4 form-row tex">
                                                <div class="col-sm-8">
            
                                                    <input id="dni" type="text" maxlength="8"
                                                        onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
                                                        class="form-control form-control-user @error('dni')
            is-invalid
            @enderror"
                                                        name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus
                                                        placeholder="ingrese su N° Dni">
            
                                                    @error('dni')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
            
                                                    @if (session('errarendatario'))
                                                        <div class="notification is-{{ session('errarendatario') }}">
                                                            <h5 style="color: red; font-size: 15px">{{ session('errarendatario') }}</h5>
                                                            <a href="{{ route('locadores.create') }}" class="btn btn-success mr-1"> <i
                                                                    class="fa fa-plus-square"></i> Nuevo Equipo</a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                            <hr>
                            <form action="{{ route('clientes.store') }}" method="post" class="form-horizontal">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-3 form-group">
                                        <div>
                                            <input type="hidden" class="form-control" name="id"
                                                value="{{ old('id') }}">
                                            <label class="text-sm" for="tipocontrato_id">Dni </label>
                                            <input id="dni" type="text"
                                                class="form-control form-control-user @error('dni') is-invalid @enderror"
                                                name="dni" value="{{ old('dni') }}" required autocomplete="dni"
                                                autofocus placeholder="dni" readonly>

                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <div>
                                            <label for="nombres" class="form-fields">Nombres</label>
                                            <label class="mandatory-field">*</label>
                                            <input type="text"
                                                   class="form-control  {{$errors->has('nombres') ? 'is-invalid' : ''}}"
                                                   name="nombres" id="nombres"
                                                    value="{{old('nombres')}}">
                                            @if ($errors->has('nombres'))
                                                <span class="text-danger">{{ $errors->first('nombres') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 form-group">
                                        <div>
                                            <label for="apellidos" class="form-fields">Apellidos</label>
                                            <label class="mandatory-field">*</label>
                                            <input type="text"
                                                   class="form-control {{$errors->has('apellidos') ? 'is-invalid' : ''}}"
                                                   name="apellidos" id="apellidos" value="{{old('apellidos')}}">
                                            @if ($errors->has('apellidos'))
                                                <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 form-group">
                                        <label class="text-sm" for="genero_id">Genero</label>
                                        <select class="form-control" name="genero_id">
                                            <option value="">Seleecione</option>
                                            @foreach ($generos as $genero)
                                                <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 form-group">
                                        <div>
                                            <label for="celular" class="form-fields">Celular</label>
                                            <label class="mandatory-field">*</label>
                                            <input type="text"
                                                   class="form-control {{$errors->has('celular') ? 'is-invalid' : ''}}"
                                                   name="celular" id="celular" value="{{old('celular')}}">
                                            @if ($errors->has('celular'))
                                                <span class="text-danger">{{ $errors->first('celular') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div>
                                            <label for="correo" class="form-fields">Correo</label>
                                            <label class="mandatory-field">*</label>
                                            <input type="text"
                                                   class="form-control {{$errors->has('correo') ? 'is-invalid' : ''}}"
                                                   name="correo" id="correo" value="{{old('correo')}}">
                                            @if ($errors->has('correo'))
                                                <span class="text-danger">{{ $errors->first('correo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div>
                                            <label for="direccion" class="form-fields">Dirección</label>
                                            <label class="mandatory-field">*</label>
                                            <input type="text"
                                                   class="form-control {{$errors->has('direccion') ? 'is-invalid' : ''}}"
                                                   name="direccion" id="direccion" value="{{old('direccion')}}">
                                            @if ($errors->has('direccion'))
                                                <span class="text-danger">{{ $errors->first('direccion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <div class="buttons-form-submit d-flex justify-content-center">

                                <a href="{{route('clientes.index')}}" class="btn btn-success mr-1"> Volver</a>
                                <a href="{{route('clientes.create')}}" class="btn btn-warning mr-1"> Cancelar</a>
                                <button type="submit" href="#" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script></script>
    @endsection

    @push('styles')
        <link rel="stylesheet" href="{{ asset('libs/datatables/dataTables.bootstrap4.min.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    @endpush

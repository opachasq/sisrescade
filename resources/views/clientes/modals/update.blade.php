<!-- Modal -->
<div class="modal animated zoomIn" id="editModal{{ $cliente->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Actualizar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-lg-6 form-group">

                            <label for="dni" class="form-fields">Dni:</label>
                            <label class="mandatory-field">*</label>
                            <input type="text" value="{{ $cliente->dni }}"
                                class="form-control {{ $errors->has('dni') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="dni" id="dni" value="{{ old('dni') }}" readonly>
                            @if ($errors->has('dni') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('dni') }}</span>
                            @endif

                        </div>
                        <div class="col-lg-6 form-group">

                            <label for="nombres" class="form-fields">Nombres:</label>
                            <input type="text" value="{{ $cliente->nombres }}"
                                class="form-control {{ $errors->has('nombres') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="nombres" id="nombres" value="{{ old('nombres') }}">
                            @if ($errors->has('nombres') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('nombres') }}</span>
                            @endif

                        </div>

                        <div class="col-lg-6 form-group">

                            <label for="apellidos" class="form-fields">Apellidos:</label>
                            <input type="text" value="{{ $cliente->apellidos }}"
                                class="form-control {{ $errors->has('apellidos') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="apellidos" id="apellidos" value="{{ old('apellidos') }}">
                            @if ($errors->has('apellidos') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                            @endif

                        </div>
                        <div class=" col-lg-6 form-group">
                            <label class="text-sm" for="genero_id">Gnero:</label>
                            <select class="form-control" name="genero_id">
                                @foreach ($generos as $genero)
                                    @if ($cliente->genero_id == $genero->id)
                                        <option value="{{ $genero->id }}" selected>{{ $genero->nombre }}
                                        </option>
                                    @else
                                        <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 form-group">

                            <label for="celular" class="form-fields">Celular:</label>
                            <input type="text" value="{{ $cliente->celular }}"
                                class="form-control {{ $errors->has('celular') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="celular" id="celular" value="{{ old('celular') }}">
                            @if ($errors->has('celular') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('celular') }}</span>
                            @endif

                        </div>
                        <div class="col-lg-6 form-group">

                            <label for="correo" class="form-fields">Correo:</label>
                            <input type="text" value="{{ $cliente->correo }}"
                                class="form-control {{ $errors->has('correo') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="correo" id="correo" value="{{ old('correo') }}">
                            @if ($errors->has('correo') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('correo') }}</span>
                            @endif

                        </div>
                        <div class="col-lg-12 form-group">

                            <label for="direccion" class="form-fields">Direción:</label>
                            <input type="text" value="{{ $cliente->direccion }}"
                                class="form-control {{ $errors->has('direccion') && $errors->has('put') ? 'is-invalid' : '' }}"
                                name="direccion" id="direccion" value="{{ old('direccion') }}">
                            @if ($errors->has('direccion') && $errors->has('put'))
                                <span class="text-danger">{{ $errors->first('direccion') }}</span>
                            @endif

                        </div>
                    </div>

                    <div class="buttons-form-submit d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cerrar</button>
                        <button type="submit" href="#" class="btn btn-primary">
                            Guardar
                            <i class="fas fa-spinner fa-spin d-none"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

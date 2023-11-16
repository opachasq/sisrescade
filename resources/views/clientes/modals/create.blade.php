<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Nuevo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('clientes.store')}}" role="form" method="POST" id="createProductFrm">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="dni" class="form-fields">Dni</label>
                                <label class="mandatory-field">*</label>
                                <input type="text"
                                       class="form-control {{$errors->has('dni') ? 'is-invalid' : ''}}"
                                       name="dni" id="dni" value="{{old('dni')}}">
                                @if($errors->has('dni'))
                                    <span class="text-danger">{{$errors->first('dni')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
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
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
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
                        <div class="col-lg-6 form-group">
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
                        <div class="col-lg-6 form-group">
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
                        <div class="col-lg-6 form-group">
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
                    {{-- <div class="row">
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="name" class="form-fields">Descripción</label>
                                <textarea class="form-control" name="description" id="description"
                                          rows="3">{{old('description')}}</textarea>
                            </div>
                        </div>
                    </div> --}}

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
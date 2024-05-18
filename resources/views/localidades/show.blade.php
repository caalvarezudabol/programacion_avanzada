@extends('layouts.app')

@section('title', 'Detalle Localidad')

@section('content')

<div class="container-fluid">
    {{-- alertas --}}
    @include('common.alert')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="font-weight-bold text-primary"><i class="fas fa-user-plus"></i> DETALLE LOCALIDAD</h6>
        </div>
        {{-- <form method="POST" action="{{route('localidades.update', ['localidade' => $localidade->id])}}">
            @csrf
            @method('PUT') --}}
            <div class="card-body">
                <div class="form-group row">

                    <div class="col-sm-2 mb-3 mt-3">
                        <strong>C&oacute;digo:</strong> <span style="color:red;">*</span></label>
                        <input
                            type="text"
                            class="form-control form-control-sm @error('id') is-invalid @enderror"
                            id="id"
                            placeholder="id"
                            name="id"
                            value="{{ old('id', $localidade->id) }}"
                            disabled
                            onkeypress="return event.charCode>=48 && event.charCode<=57">
                        @error('id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-4 mb-3 mt-3">
                        <strong>Nombre:</strong> <span style="color:red;">*</span> </label>
                        <input
                            type="text"
                            class="form-control form-control-sm @error('nombre') is-invalid @enderror"
                            id="nombre"
                            placeholder="nombre"
                            name="nombre"
                            value="{{ old('nombre', $localidade->nombre) }}"
                            disabled
                            onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))">

                            @error('nombre')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- <div class="col-sm-3 mb-3 mt-3">
                        <strong>Provincia:<span style="color:red;">*</span></strong>
                        <select class="form-control form-control-sm @error('provincia_id') is-invalid @enderror" name="provincia_id" disabled>
                            @foreach ($provincias as $provincia)
                                <option value="{{$provincia->id}}" {{ old('provincia_id',$localidade->provincia_id) == $provincia->id ? 'selected' : ''}}>
                                    {{$provincia->nombre}}
                                </option>
                            @endforeach
                        </select>
                        @error('provincia_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div> --}}
                    <div class="col-sm-3 mb-3 mt-3">
                        <strong>Provincia:</strong> <span style="color:red;">*</span>
                        <input
                            type="text"
                            class="form-control form-control-sm @error('provincia_id') is-invalid @enderror"
                            id="provincia_id"
                            placeholder="Provincia"
                            name="provincia_id"
                            @if ($localidade->provincia)
                            value="{{ old('provincia_id', $localidade->provincia->nombre ?? '') }}"
                            @endif
                            disabled>
                    </div>

                    <div class="col-sm-2 mb-3 mt-3">
                        <strong>Estado:</strong> <span style="color:red;">*</span></label>
                        <select class="form-control form-control-sm @error('estado') is-invalid @enderror" name="estado" disabled>
                            <option value="1" {{ old('estado', $localidade->estado) == 1 ? 'selected' : '' }}>ACTIVO</option>
                            <option value="0" {{ old('estado', $localidade->estado) == 0 ? 'selected' : '' }}>INACTIVO</option>
                        </select>
                        @error('estado')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer">
            <a class="btn btn-outline-success float-right mr-3 mb-3" href="{{ route('localidades.index') }}"><i class="fas fa-window-close"></i> ATR&Aacute;S</a>
            </div>
        </form>
    </div>

</div>


@endsection
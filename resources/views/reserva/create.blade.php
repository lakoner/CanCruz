@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($error))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{$error}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div>
        <h1>Añadir una reserva</h1>
    </div>

    <form action="{{Route('reserva.store')}}" method="post">
        @csrf
        <input type="text" name="key" class="hidden-input" value="{{$key}}">
        <div class="row">
            <div class="col-12 col-md-4">
                <br>
                <label><b>Llegada</b></label>
                <input type="text" name="check_in" class="datepicker form-control">
            </div>
            
            <div class="col-12 col-md-4">
                <br>
                <label><b>Salida</b></label>
                <input type="text" name="check_out" class="datepicker form-control">
            </div>
    
            <div class="col-12 col-md-4">
                <br>
                <label><b>Personas</b></label>
                <select class="col-md-12 form-control" name="persons" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            
            <div class=" col-12 col-md-4">
                <br>
                <br>
                <label><b>Mascota</b>
                <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Si</b>&nbsp;&nbsp;
                <input type="radio" name="pet" value=1></label>

                <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>No</b>&nbsp;&nbsp;
                <input type="radio" name="pet" value=0>
                </label>
            </div>
            
            <div class=" col-12 col-md-4">
                <br>
                <br>
                <label><b>Desayuno</b>
                <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Si</b>&nbsp;&nbsp;
                <input type="radio" name="breakfast" value=1></label>
                <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>No</b>&nbsp;&nbsp;
                <input type="radio" name="breakfast" value=0>
                </label>
            </div>

            <div class="col-12 col-md-4">
                <br>
                <label><b>Habitacion</b></label>
                <select class="col-md-12 form-control" name="estancia_id" id="">
                    <option value="1">Puigraciós</option>
                    <option value="2">Estança de Sant Cristofol</option>
                    <option value="3">Estança de la Roca Centella</option>
                </select>
            </div>

            <div class="col-12 col-md-4">
                <br>
                <label><b>Nombre</b></label>
                <input type="text" name="name" class="form-control" >
            </div>
        

            <div class="col-12 col-md-4">
                <br>
                <label><b>E-mail</b></label>
                <input type="email" name="mail" class="form-control">
            </div>
        
            <div class="col-12 col-md-4">
                <br>
                <label><b>Teléfono</b></label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>
            <br>
            <br>
            <div class="d-flex justify-content-between">
                <a href="/reserva" class="btn btn-link"><span style="padding-right:8px"><i class="fas fa-chevron-left"></i></span>Volver al listado</a>
                <div>
                    <input type="submit" class="btn btn-primary btn-xs" value="Crear reserva">
                </div>
            </div>
    </form>
</div>
@endsection

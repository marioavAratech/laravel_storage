@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="mt-5">
                <div class="col-12">
                    <p>Editar item id= {{$id}}</p>

                    <form method="POST" action="{{route('actualizar.item')}}">
                        @csrf
                        <input type="hidden" name="idItem" value="{{$id}}">
                        <div class="form-group">
                            <label>Nombre item</label>
                            <input type="text" name="item">
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            <h1>Listar Items</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Fecha matriculacion</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Color</th>
                        <th scope="col">ITV Pasada</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver Detalles</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data)>0)
                @foreach($data as $index => $item)
                    <tr>
                        <th scope="row">{{$item->matricula}}</th>
                        <th scope="row">{{$item->modelo}}</th>
                        <th scope="row">{{$item->fecha_matriculacion}}</th>
                        <th scope="row">{{$item->peso}}</th>
                        <th scope="row">{{$item->color}}</th>
                        <th scope="row">{{$item->itv_pasada}}</th>
                        <th scope="row"><a href="{{route('mostrar.editar',$item->matricula)}}">Editar</a></th>
                        <th scope="row"><a href="{{route('eliminar.item',$item->matricula)}}">Eliminar</a></th>
                        <th scope="row"><a href="{{route('mostrar.item',$item->matricula)}}">Mostrar</a></th>
                    </tr>
                @endforeach     
                @else
                    <p>No hay elementos en la lista</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection


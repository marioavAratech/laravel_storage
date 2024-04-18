@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            <h1>Listar Items</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver Detalles</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data)>0)
                @foreach($data as $index => $item)
                    <tr>
                        <th scope="row">{{$index}}</th>
                        <th scope="row">{{$item}}</th>
                        <th scope="row"><a href="{{route('mostrar.editar',$index)}}">Editar</a></th>
                        <th scope="row"><a href="{{route('eliminar.item',$index)}}">Eliminar</a></th>
                        <th scope="row"><a href="{{route('mostrar.item',$index)}}">Mostrar</a></th>
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


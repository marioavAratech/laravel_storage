@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            <h1>Listar Ficheros</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Usuario</th>
                        <th scope='col'>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $index => $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <th scope="row"><a href="storage/files/{{$item->nombre}}">{{$item->nombre}}</a></th>
                        <th scope="row">{{$item->tipoFichero}}</th>
                        <th scope="row">{{$item->userId}}</th>
                        <th scope="row"><img src="storage/files/{{$item->nombre}}"></th>
                    </tr>
                @empty
                    <p>No hay elementos en la lista</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection


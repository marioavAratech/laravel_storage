@extends("layouts.app")
@section('content')
        <div class="container">
            <div class="row mt-5">
                    <div class="col-md-2 box">
                        <a href="{{route('listar.items')}}">Listar elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('mostrar.crear')}}">Crear elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('mostrar.editar',1)}}">Editar elementos</a>
                    </div>
                    <div class="col-md-2 box">
                        <p>Eliminar todo</p>
                    </div>
            </div>
        </div>
@endsection()

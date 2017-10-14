@extends("template.app")

@section("content")
    <style>
        .btn-action{
            padding:5px;
            float: right;
        }
    </style>
    <div>
        @foreach($pessoas as $pessoa)
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        {{ $pessoa->nome }}
                        <a href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary btn-action">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                    </div>
                    <div class="panel-body">
                        @foreach($pessoa->modelos as $carro)
                        <p><strong>Modelo de Carro: </strong> {{$carro->modelo}} </p>
                            <p><strong>Placa do Carro: </strong> {{$carro->placa}} </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
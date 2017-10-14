@extends("template.app")

@section('content')
    <div class="col-md-6 well">
        <div class="col-md-12">
            <h3>Deseja Realmente Excluir essa pessoa ?</h3>
            <div style="float: right;">
                <a class="btn btn-default" href="{{ url("pessoas") }}">
                    <i class="glyphicon glyphicon-chevron-left"></i> Voltar
                </a>
                <a class="btn btn-danger" href="{{ url("pessoas/$pessoa->id/destroy") }}">
                    <i class="glyphicon glyphicon-remove"></i> Excluir
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-danger">
            <div class="panel-heading">
                {{ $pessoa->nome }}
            </div>
            <div class="panel-body">
                @foreach($pessoa->modelos as $carro)
                    <p><strong>Modelo de Carro: </strong> {{$carro->modelo}} </p>
                    <p><strong>Placa do Carro: </strong> {{$carro->placa}} </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends("template.app")

@section("content")
    <div>
        @foreach($pessoas as $pessoa)
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">{{ $pessoa->nome }}</div>
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
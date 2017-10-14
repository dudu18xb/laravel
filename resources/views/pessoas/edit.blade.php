@extends("template.app")

@section('content')
    <div class="col-md-12">
        <h3>Editar Pessoa</h3>
    </div>
    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('/pessoas/update') }}" method="POST">
            <!-- caso der erro por causa do Token-->
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pessoa->id }}"/>
            <div class="form-group col-md-12">
                <label class="control-label">
                    Digite o Nome:
                </label>
                <input name="nome" value="{{ $pessoa->nome }}" class="form-control" />
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
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
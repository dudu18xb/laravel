@extends("template.app")

@section('content')
    <div class="col-md-12">
        <h3>Nova Pessoa</h3>
    </div>
    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('/pessoas/store') }}" method="POST">
            <!-- caso der erro por causa do Token-->
            {{ csrf_field() }}
            <div class="form-group col-md-12">
                <label class="control-label">
                    Digite o Nome:
                </label>
                <input name="nome" class="form-control" />
            </div>

            <div class="form-group col-md-12">
                <label class="control-label">
                    Modelo do Carro:
                </label>
                <input name="modelo" class="form-control" />
            </div>

            <div class="form-group col-md-12">
                <label class="control-label">
                    Digite a Placa do Carro:
                </label>
                <input name="placa" class="form-control" />
            </div>

            <div class="form-group col-md-12">
                <button class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection

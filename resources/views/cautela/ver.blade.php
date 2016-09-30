@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Cautela - Militar: {{$cautela->militar->nome_guerra}}</h3>
                <h4>Data: {{$cautela->created_at->format('d-m-Y H:i')}}</h4>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Armamentos</div>
                    <div class="panel-body">

                        <div class="form-group">
                            @foreach($cautela->armamentos as $armamento)
                                <label class="col-md-4 control-label form-inline">{{$armamento->descricao}}: 1</label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Acessorios</div>
                    <div class="panel-body">

                        <div class="form-group">
                            @foreach($cautela->acessorios as $acessorio)
                                <label class="col-md-4 control-label form-inline">{{$acessorio->descricao}}: {{$acessorio->quantidade_solicitada}}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Munições</div>
                    <div class="panel-body">
                        <div class="form-group">
                            @foreach($cautela->municoes as $municao)
                                <label class="col-md-4 control-label form-inline">{{$municao->descricao}}: {{$municao->quantidade_solicitada}}</label>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
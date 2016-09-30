@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Armamentos</div>
                    <div class="panel-body">

                        <div class="form-group">
                            @foreach($acessorios as $acessorio)
                                <label class="col-md-4 control-label form-inline">{{$acessorio->item->descricao}}: {{$acessorio->quantidade}}</label>
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
                            @foreach($acessorios as $acessorio)
                                <label class="col-md-4 control-label form-inline">{{$acessorio->item->descricao}}: {{$acessorio->quantidade}}</label>
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
                            @foreach($municoes as $municao)
                                <label class="col-md-4 control-label form-inline">{{$municao->item->descricao}}: {{$municao->quantidade}}</label>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
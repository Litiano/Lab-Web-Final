@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/sistema/estoque/gerenciar') }}">
                {{ csrf_field() }}

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Entrada de Acessorios</div>
                    <div class="panel-body">

                            <div class="form-group">
                                @foreach($acessorios as $acessorio)
                                <label class="col-md-4 control-label form-inline">{{$acessorio->descricao}}:
                                    <input style="width: 5em; text-align: center" type="number" min="0" required
                                           name="acessorios[{{$acessorio->id}}][quantidade]" value="0"></label>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Entrada de Munições</div>
                    <div class="panel-body">
                            {{ csrf_field() }}

                            <div class="form-group">
                                @foreach($municoes as $municao)
                                    <label class="col-md-4 control-label form-inline">{{$municao->calibre}} - {{$municao->descricao}}:
                                        <input style="width: 5em; text-align: center" type="number" min="0" required
                                               name="municoes[{{$municao->id}}][quantidade]" value="0"></label>
                                @endforeach
                            </div>


                    </div>
                </div>
            </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Salvar!
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
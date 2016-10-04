@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Cautela para: <strong>{{$militar->nome_guerra}}</strong></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/sistema/cautela/criar') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="militar_id" value="{{$militar->id}}">

                            <div class="form-group">
                                <label for="armamentos" class="col-md-4 control-label">Armamentos</label>

                                <div class="col-md-6">
                                    @foreach($armamentos as $armamento)
                                        <label><input name="armamentos[{{$armamento->id}}]" type="checkbox" value="1"> {{$armamento->modelo}} - {{$armamento->numero_serie}}</label>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Munições</label>
                                <div class="col-md-8">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>Descrição</td>
                                            <td>Quantidade</td>
                                            <td>Disponivel</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($municoes as $municao)
                                            <tr>
                                                <td>{{$municao->item->calibre . ' - ' . $municao->item->descricao}}</td>
                                                <td><input min="0" max="{{$municao->quantidade}}" value="0" name="municoes[{{$municao->id}}]" style="width: 5em; text-align: center" type="number"/></td>
                                                <td>{{$municao->quantidade}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Acessorios</label>
                                <div class="col-md-8">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>Descrição</td>
                                            <td>Quantidade</td>
                                            <td>Disponivel</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($acessorios as $acessorio)
                                            <tr>
                                                <td>{{$acessorio->item->descricao}}</td>
                                                <td><input min="0" max="{{$acessorio->quantidade}}" value="0" name="acessorios[{{$acessorio->id}}]" style="width: 5em; text-align: center" type="number"/></td>
                                                <td>{{$acessorio->quantidade}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

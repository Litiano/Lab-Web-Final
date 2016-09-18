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
                                    <select multiple id="armamentos" name="armamentos[]">
                                        <option>Nenhum selecionado</option>
                                        @foreach($armamentos as $armamento)
                                            <option value="{{$armamento->id}}">{{$armamento->modelo.'-'.$armamento->numero_serie}}</option>
                                        @endforeach
                                    </select>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($municoes as $municao)
                                            <tr>
                                                <td><label><input name="municoes[{{$municao->id}}][selecionada]" type="checkbox"/> {{$municao->calibre . ' - ' . $municao->descricao}}</label></td>
                                                <td><input min="0" value="1" name="municoes[{{$municao->id}}][quantidade]" style="width: 5em; text-align: center" type="number"/></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                <label for="descricao" class="col-md-4 control-label">Descrição</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" required autofocus>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                                <label for="quantidade" class="col-md-4 control-label">Quantidade</label>

                                <div class="col-md-6">
                                    <input id="quantidade" type="number" step="1" class="form-control" name="quantidade" value="{{ old('quantidade') }}" required autofocus>

                                    @if ($errors->has('quantidade'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantidade') }}</strong>
                                    </span>
                                    @endif
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

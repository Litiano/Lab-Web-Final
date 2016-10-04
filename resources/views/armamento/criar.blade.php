@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Armamento</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/sistema/armamento/criar') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nome_guerra') ? ' has-error' : '' }}">
                                <label for="numero_serie" class="col-md-4 control-label">Nª Serie</label>

                                <div class="col-md-6">
                                    <input id="numero_serie" type="text" class="form-control" name="numero_serie" value="{{ old('numero_serie') }}" required autofocus>

                                    @if ($errors->has('numero_serie'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numero_serie') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
                                <label for="modelo" class="col-md-4 control-label">Modelo</label>

                                <div class="col-md-6">
                                    <input id="modelo" type="text" class="form-control" name="modelo" value="{{ old('modelo') }}" required autofocus>

                                    @if ($errors->has('modelo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('modelo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('fabricante') ? ' has-error' : '' }}">
                                <label for="fabricante" class="col-md-4 control-label">Fabricante</label>

                                <div class="col-md-6">
                                    <input id="fabricante" type="text" class="form-control" name="fabricante" value="{{ old('fabricante') }}" required autofocus>

                                    @if ($errors->has('fabricante'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fabricante') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!--<div class="form-group{{ $errors->has('disponivel') ? ' has-error' : '' }}">
                                <label for="disponivel" class="col-md-4 control-label">Disponível</label>

                                <div class="col-md-6">
                                    <select id="disponivel" class="form-control" name="disponivel" required autofocus>
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>

                                    @if ($errors->has('disponivel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('disponivel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>-->

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

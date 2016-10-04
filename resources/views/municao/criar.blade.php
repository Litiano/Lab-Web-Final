@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Munições</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/sistema/municao/criar') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('calibre') ? ' has-error' : '' }}">
                                <label for="calibre" class="col-md-4 control-label">Calibre</label>

                                <div class="col-md-6">
                                    <input id="calibre" type="text" class="form-control" name="calibre" value="{{ old('calibre') }}" required autofocus>

                                    @if ($errors->has('calibre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('calibre') }}</strong>
                                    </span>
                                    @endif
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

                            <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
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

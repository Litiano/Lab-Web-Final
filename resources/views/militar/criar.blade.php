@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Militar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/sistema/militar/criar') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                <label for="nome" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('posto') ? ' has-error' : '' }}">
                                <label for="posto" class="col-md-4 control-label">Posto</label>

                                <div class="col-md-6">
                                    <select name="posto" id="posto" class="form-control">
                                        <option></option>
                                        @foreach($postos as $posto)
                                            <option value="{{$posto}}">{{$posto}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('posto'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('posto') }}</strong>
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Cautela - Militar: {{$cautela->militar->nome_guerra}}</h3>
                <h4>Data: {{$cautela->created_at->format('d-m-Y H:i')}}</h4>
                @if($cautela->finalizada == false)
                <a href="{{url('/sistema/cautela/devolver-tudo', ['id'=>$cautela->id])}}"><button class="btn btn-danger">Devolver tudo!</button></a>
                @endif
                <h5>Devolvido / Solicitado</h5>
            </div>
            @if($cautela->armamentos->count() > 0)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Armamentos</div>
                    <div class="panel-body">

                        <div class="form-group">
                            @foreach($cautela->armamentos as $armamento)
                                <form method="post" action="{{url('/sistema/cautela/devolver-item', ['id'=>$armamento->id])}}">
                                    <input type="hidden" name="tipo" value="armamento">
                                    <input type="hidden" name="quantidade" value="1">
                                    {{csrf_field()}}
                                <label class="col-md-4 control-label form-inline">{{$armamento->descricao}}: @if($armamento->quantidade) 0/1 @else 1/1 @endif
                                    @if($armamento->quantidade > 0)
                                    <button type="submit" class="btn btn-warning">Devolter Item</button>
                                    @endif
                                </label>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($cautela->acessorios->count() > 0)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Acessorios</div>
                    <div class="panel-body">

                        <div class="form-group">
                            @foreach($cautela->acessorios as $acessorio)
                                <form method="post" action="{{url('/sistema/cautela/devolver-item', ['id'=>$acessorio->id])}}">
                                    <input type="hidden" name="tipo" value="acessorio">
                                    {{csrf_field()}}
                                    <label class="col-md-4 control-label form-inline">{{$acessorio->descricao}}: {{$acessorio->quantidade_devolvida}}/{{$acessorio->quantidade_solicitada}}
                                        @if($acessorio->quantidade > 0)
                                        <br>
                                        <input name="quantidade" value="0" type="number" style="width: 4em;" min="1" max="{{$acessorio->quantidade}}">
                                        <button class="btn btn-warning" type="submit">Devolver Item</button>
                                            @endif
                                    </label>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($cautela->municoes->count() > 0)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Munições</div>
                    <div class="panel-body">
                        <div class="form-group">
                            @foreach($cautela->municoes as $municao)
                                <form method="post" action="{{url('/sistema/cautela/devolver-item', ['id'=>$municao->id])}}">
                                    <input type="hidden" name="tipo" value="municao">
                                    {{csrf_field()}}
                                <label class="col-md-4 control-label form-inline">{{$municao->descricao}}: {{$municao->quantidade_devolvida}}/{{$municao->quantidade_solicitada}}
                                    @if($municao->quantidade > 0)
                                <br>
                                    <input name="quantidade" value="0" type="number" style="width: 4em;" min="1" max="{{$acessorio->quantidade}}">
                                    <button class="btn btn-warning" type="submit">Devolver Item</button>
                                        @endif
                                </label>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
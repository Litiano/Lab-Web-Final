@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Munições Cadastrados</h2>
        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($acessorios as $acessorio)
                <tr>
                    <td>{{$acessorio->descricao}}</td>
                    <td>{{$acessorio->quantidade}}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
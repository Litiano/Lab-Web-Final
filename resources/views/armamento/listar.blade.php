@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Armamentos Cadastrados</h2>
        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th>Modelo</th>
                <th>Nº Serie</th>
                <th>Fabricante</th>
                <th>Disponível</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($armamentos as $armamento)
                <tr>
                    <td>{{$armamento->modelo}}</td>
                    <td>{{$armamento->numero_serie}}</td>
                    <td>{{$armamento->fabricante}}</td>
                    <td>@if($armamento->disponivel) Sim @else Não @endif</td>
                    <td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
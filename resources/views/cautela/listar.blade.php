@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cautelas cadastradas</h2>
        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th>Id</th>
                <th>Militar</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cautelas as $cautela)
                <tr>
                    <td>{{$cautela->id}}</td>
                    <td>{{$cautela->militar->nome_guerra}}</td>
                    <td>
                        <a href="{{url('/sistema/cautela/ver', ['id'=>$cautela->id])}}"><button class="btn btn-success">Ver</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('layout.site')
@section('titulo','Contatos')
@section('conteudo')
    <h3>Essa é a visao dos contatos</h3>
        <table border=1>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
            </tr>
            @foreach ($contatos as $contato)  
            <tr>
                <td>{{$contato['nome']}}</td>
                <td>{{$contato['cel']}}</td>
            </tr>
            @endforeach
        </table>
@endsection
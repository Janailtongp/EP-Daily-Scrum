@extends('layouts.app')

@section('content')
    <body> 
        <div class="container">
            <h1>Lista de dailys</h1>
            <a class="btn btn-secondary" href="/daily_form">Novo Daily!</a>
            <table class="table table-hover">
                <thead>
                    <tr> 
                        <th>O que você fez ontem?</th>
                        <th>O que você fará hoje?</th>
                        <th>Há algum impedimento no seu caminho?</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($dailies as $daily)
                    <tr> 
                        <td>{{ $daily->first_answer }}</td>
                        <td>{{ $daily->second_answer }}</td>
                        <td>{{ $daily->third_answer }}</td>
                        <td>
                            <a href="/daily_edit/{{$daily->id}}">Editar</a>
                            <a href="/daily_delete/{{$daily->id}}">Apagar</a>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
  @endsection
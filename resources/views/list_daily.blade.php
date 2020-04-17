@extends('layouts.app')

@section('content')
    <body> 
        <div class="container">
            <h1>Lista de dailys</h1>
            <a class="btn btn-primary mb-3" href="/daily_form">Novo Daily!</a>
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
                @if(count($dailies) == 0)
                    <tr>
                        <td colspan="4"  class="text-center pt-5 pb-5"><h1>Bad guy! Don't send your dailies? OMG!</h1></td>
                    </tr>
                @endif
                @foreach ($dailies as $daily)
                    <tr> 
                        <td>{{ $daily->first_answer }}</td>
                        <td>{{ $daily->second_answer }}</td>
                        <td>{{ $daily->third_answer }}</td>
                        <td>
                        @if(Auth::user()->id == $daily->user_id)
                            <a href="/daily_edit/{{$daily->id}}">Editar</a>
                            <a href="/daily_delete/{{$daily->id}}">Apagar</a>
                        @endif
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
                {{ $dailies->links() }}
        </div>
    </body>
  @endsection
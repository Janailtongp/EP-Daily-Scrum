@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Sistema desenvolvido como conteudo para as aulas de PHP com o Framework Laravel <br>
                     Tendo como objetivo criar uma ferramenta de automaçao do preenchimento do Daily Scrum</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

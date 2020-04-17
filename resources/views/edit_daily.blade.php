@extends('layouts.app')

@section('content')
<body>
    <div  class="container">
        <h1>Editar Daily</h1>
        <form action="/daily_update/{{$daily->id}}"  method="post">
        @csrf
            <label for="primeiro">O que você fez ontem?</label><br>
            <input type="text" id=" " name="primresp" value='{{$daily->first_answer }}' required><br>
            <label for="segundo">O que você fará hoje?</label><br>
            <input type="text" id=" " name="segunresp" value='{{$daily->second_answer}}' ><br> 
            <label for="terceiro">Há algum impedimento no seu caminho?</label><br>
            <input type="text" id=" " name="tercresp" value='{{$daily->third_answer}}'><br><br>
            <input class="btn btn-secondary" type="submit" value="Salvar">
            <a class="btn btn-secondary" href="/daily_list">Cancelar</a>
        </form> 
           
    </div>
</body>
@endsection
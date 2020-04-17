@extends('layouts.app')

@section('content')
<body>
    <div  class="container">
        <h1>Editar Daily</h1>
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>    
        @endif
        <form action="/daily_update/{{$daily->id}}"  method="post">
        @csrf
        <div class="form-group">
            <label for="primeiro"  class="col-form-label-lg">O que você fez ontem?</label>
            <input type="text" id=" " name="primresp" value='{{$daily->first_answer }}' required class="form-control" id="primeiro">

            <label for="segundo"  class="col-form-label-lg">O que você fará hoje?</label>
            <input type="text" id=" " name="segunresp" value='{{$daily->second_answer}}' class="form-control" id="segundo">

            <label for="terceiro"  class="col-form-label-lg">Há algum impedimento no seu caminho?</label>
            <input type="text" id=" " name="tercresp" value='{{$daily->third_answer}}' class="form-control" id="terceiro">
        </div>    
            <input class="btn btn-success" type="submit" value="Atualizar">
            <a class="btn btn-danger" href="/daily_list">Cancelar</a>
        </form> 
           
    </div>
</body>
@endsection
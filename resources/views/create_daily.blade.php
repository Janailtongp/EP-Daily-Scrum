@extends('layouts.app')

@section('content')
 <div class="container">
    <h1>Preencher novo Daily</h1>
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
    <form action="/daily_store"  method="post">
    @csrf
        <label for="primeiro">O que você fez ontem?</label><br>
        <input type="text" id=" " name="primresp" value=" "><br>
        <label for="segundo">O que você fará hoje?</label><br>
        <input type="text" id=" " name="segunresp" value=" "><br> 
        <label for="terceiro">Há algum impedimento no seu caminho?</label><br>
        <input type="text" id=" " name="tercresp" value=" "><br><br>
        <input class="btn btn-secondary" type="submit" value="Salvar">
        <a class="btn btn-secondary" href="/daily_list">Cancelar</a>
    </form>
 </div>
 @endsection
 
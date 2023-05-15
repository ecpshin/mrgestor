@extends('admin.layouts.template')

@section('title', 'Usuários')

@section('page-content')
<form method="post" action="{{ route('users.store') }}">
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="name" value="{{ old('name') }}">      
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" value="{{ old('email') }}">      
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" class="form-control" id="password" value="{{ old('password') }}">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
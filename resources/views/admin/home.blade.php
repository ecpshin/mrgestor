@extends('admin.layouts.template')

@section('title', 'Administração');

@section('page-content')
    <h1>Painel de Adminitração</h1>
    <ul>
        <li><a href="{{ route('admin.home') }}">Home</a></li>
        <li>Rotinas Administrativas
            <ul>
                <li><a href="{{ route('users.index') }}">Usuários</a></li>
                <li><a href="#">Órgãos</a></li>
                <li><a href="#">Financeiras</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Situações</a></li>
            </ul>
        </li>
    </ul>
@endsection
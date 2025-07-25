@extends('admin.users.layouts.app')

@section('title', 'Criar Novo Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
            Novo Usuário
        </h2>
    </div>

    {{-- @include('admin.includes.errors') --}}
    <form action="{{ route('users.store') }}" method="POST" class="bg-white dark:bg-gray-800 p-6 rounded shadow">
        @include('admin.users.partials.form') 
    </form>
@endsection

@extends('admin.users.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
            Editar o Usuário {{ $user->name }}
        </h2>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white dark:bg-gray-800 p-6 rounded shadow">
        @method('put')
        @include('admin.users.partials.form') 
    </form>
@endsection

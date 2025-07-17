@extends('admin.users.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')

    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
            Detalhes do Usuário {{ $user->name }}
        </h2>
    </div>

    <ul class="max-w-md space-y-1 text-gray-700 list-disc list-inside dark:text-gray-300 mb-6">
        <li><strong class="text-gray-800 dark:text-gray-200">Nome:</strong> {{ $user->name }}</li>
        <li><strong class="text-gray-800 dark:text-gray-200">E-mail:</strong> {{ $user->email }}</li>
    </ul>

    <x-alert/>

    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"
                class="text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 
                       focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 
                       text-center me-2 mb-2 dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-900">
                Deletar
            </button>
        </form>
    @endcan
@endsection

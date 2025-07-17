<x-alert />

<div class="">
    @csrf
    <div class="mb-5">
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}"
            class="block w-full p-4 text-sm rounded-lg border 
                   bg-gray-50 text-gray-900 border-gray-300 
                   focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:text-white dark:border-gray-600 
                   dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" />
    </div>
    <div class="mb-5">
        <input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}"
            class="block w-full p-4 text-sm rounded-lg border 
                   bg-gray-50 text-gray-900 border-gray-300 
                   focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:text-white dark:border-gray-600 
                   dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" />
    </div>
    <div class="mb-5">
        <input type="password" name="password" placeholder="Senha"
            class="block w-full p-4 text-sm rounded-lg border 
                   bg-gray-50 text-gray-900 border-gray-300 
                   focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:text-white dark:border-gray-600 
                   dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" />
    </div>
    <button type="submit"
        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium 
               text-gray-900 bg-white border border-gray-200 
               rounded-full hover:bg-gray-100 hover:text-blue-700 
               focus:outline-none focus:z-10 focus:ring-4 focus:ring-gray-100 
               dark:bg-gray-800 dark:text-white dark:border-gray-600 
               dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
        Enviar
    </button>
</div>

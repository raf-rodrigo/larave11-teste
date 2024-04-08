<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col py-11">
                        <img class="w-1/2" src="{{ asset('logo_keepcloud.png') }}" alt="logo da Keep Cloud" />
                        <div class="flex flex-col text-center">
                            <h1 class="text-2xl m-6">Bem Vindo ao Sistema de Cadastro de Sócio.</h1>
                            <div class="m-8">
                                <a href="{{ route('register-member') }}" type="button" class="border border-blue-500 rounded-md bg-blue-500 m-3 p-3">Cadastrar Sócio</a>
                                <a href="{{ route('view-member') }}" type="button" class="border border-blue-500 rounded-md bg-blue-500 m-3 p-3">Visualizar Sócios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

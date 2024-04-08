<x-app-layout>
    <x-notifications />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{--      -----------              --}}
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1>Visualizando Sócio</h1>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium leading-6 text-white">Nome</label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="given-name"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['name'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['email'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="sm:col-span-1" x-data x-init="Inputmask({'mask': '(99) 9.9999-9999'}).mask($refs.cellphone)">
                                    <label for="cellphone" class="block text-sm font-medium leading-6 text-white">Celular</label>
                                    <div class="mt-2">
                                        <input x-ref="cellphone" id="cellphone" name="cellphone" type="text"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['cellphone'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="status" class="block text-sm font-medium leading-6 text-white">Tipo de Sócio</label>
                                    <div class="mt-2">
                                        <input x-ref="status" id="status" name="status" type="text"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['status'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-1" x-data x-init="Inputmask({'mask': '99999-999'}).mask($refs.input)">
                                    <label for="zipcode" class="block text-sm font-medium leading-6 text-white">CEP</label>
                                    <div class="mt-2">
                                        <input x-ref="input" type="text" name="zipcode" id="zipcode"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['zipcode'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="address" class="block text-sm font-medium leading-6 text-white">Endereço</label>
                                    <div class="mt-2">
                                        <input type="text" name="address" id="address"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['address'] }}" readonly
                                        >
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <label for="addressNumber" class="block text-sm font-medium leading-6 text-white">Número</label>
                                    <div class="mt-2">
                                        <input type="text" name="addressNumber" id="addressNumber"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['addressNumber'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="addressComplement" class="block text-sm font-medium leading-6 text-white">Complemento</label>
                                    <div class="mt-2">
                                        <input type="text" name="addressComplement" id="addressComplement"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['addressComplement'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="neighborhood" class="block text-sm font-medium leading-6 text-white">Bairro</label>
                                    <div class="mt-2">
                                        <input type="text" name="neighborhood" id="neighborhood"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['neighborhood'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="city" class="block text-sm font-medium leading-6 text-white">Cidade</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['city'] }}" readonly
                                        >
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="state" class="block text-sm font-medium leading-6 text-white">Estado</label>
                                    <div class="mt-2">
                                        <input type="text" name="state" id="state"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ $register['state'] }}" readonly
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/excluir_socio/{{ $register['id'] }}" type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Excluir</a>
                        <a href="{{ route('view-member') }}" type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancelar</a>
                        <a href="/editar_socio/{{ $register['id'] }}" type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
                    </div>
                    {{--      ----------              --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

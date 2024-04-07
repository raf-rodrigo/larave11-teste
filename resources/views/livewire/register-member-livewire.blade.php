<div>
    <h1>Registrar Sócio</h1>
    <form action="{{ route('save-member') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-white">Nome</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="given-name"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="name" value="{{ old('name') }}"
                            >
                        </div>
                        @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="email" value="{{ old('email') }}"
                            >
                        </div>
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-1" x-data x-init="Inputmask({'mask': '(99) 9.9999-9999'}).mask($refs.cellphone)">
                        <label for="cellphone" class="block text-sm font-medium leading-6 text-white">Celular</label>
                        <div class="mt-2">
                            <input x-ref="cellphone" id="cellphone" name="cellphone" type="text"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="cellphone" value="{{ old('cellphone') }}"
                            >
                        </div>
                        @error('cellphone')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <label for="status" class="block text-sm font-medium leading-6 text-white">Tipo de Sócio</label>
                        <div class="mt-2">
                            <select id="status" name="status"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                    wire:model="status"
                            >
                                <option value="" selected>Selecione</option>
                                <option value="Silver" {{ old('status') == 'ativo' ? 'selected' : '' }}>Silver</option>
                                <option value="Gold" {{ old('status') == 'inativo' ? 'selected' : '' }}>Gold</option>
                            </select>
                        </div>
                        @error('status')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-1" x-data x-init="Inputmask({'mask': '99999-999'}).mask($refs.input)">
                        <label for="zipcode" class="block text-sm font-medium leading-6 text-white">CEP</label>
                        <div class="mt-2">
                            <input x-ref="input" type="text" name="zipcode" id="zipcode"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model.lazy="zipcode" value="{{ old('zipcode') }}"
                                {{--  wire:model.lazy uma desempenho que quando você saio do campo através do tab ou clicar em outro campo chama a função updatedZipcode do RegisterMember.php --}}
                            >
                        </div>
                        @error('zipcode')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="address" class="block text-sm font-medium leading-6 text-white">Endereço</label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="address" value="{{ old('address') }}"
                            >
                        </div>
                        @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-1">
                        <label for="addressNumber" class="block text-sm font-medium leading-6 text-white">Número</label>
                        <div class="mt-2">
                            <input type="text" name="addressNumber" id="addressNumber"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="addressNumber" value="{{ old('addressNumber') }}"
                            >
                        </div>
                        @error('addressNumber')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="addressComplement" class="block text-sm font-medium leading-6 text-white">Complemento</label>
                        <div class="mt-2">
                            <input type="text" name="addressComplement" id="addressComplement"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="addressComplement" value="{{ old('addressComplement') }}"
                            >
                        </div>
                        @error('addressComplement')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="neighborhood" class="block text-sm font-medium leading-6 text-white">Bairro</label>
                        <div class="mt-2">
                            <input type="text" name="neighborhood" id="neighborhood"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="neighborhood" value="{{ old('neighborhood') }}"
                            >
                        </div>
                        @error('neighborhood')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="city" class="block text-sm font-medium leading-6 text-white">Cidade</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="city" value="{{ old('city') }}"
                            >
                        </div>
                        @error('city')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="state" class="block text-sm font-medium leading-6 text-white">Estado</label>
                        <div class="mt-2">
                            <input type="text" name="state" id="state"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   wire:model="state" value="{{ old('state') }}"
                            >
                        </div>
                        @error('state')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('home') }}" type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancelar</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar</button>
        </div>
    </form>
</div>

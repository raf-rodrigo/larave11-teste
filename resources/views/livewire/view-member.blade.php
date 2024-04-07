<div>
    {{--Visualização da Tabela--}}
{{--    <x-button label="Open" x-on:click="$openModal('cardModal')" primary />--}}
    {{--Modal de visualizar e editar--}}
    <x-modal.card title="Viem Member" blur wire:model.defer="cardModal">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input label="Name" placeholder="Your full name" />
            <x-input label="Phone" placeholder="USA phone" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Email" placeholder="example@mail.com" />
            </div>

            <div class="col-span-1 sm:col-span-2 cursor-pointer bg-gray-100 rounded-xl shadow-md h-72 flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <x-icon name="cloud-upload" class="w-16 h-16 text-blue-600" />
                    <p class="text-blue-600">Click or drop files here</p>
                </div>
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-button flat negative label="Delete" wire:click="delete" />

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Save" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>


{{--    @if(!empty($contents))--}}
        <h1>Membros</h1>
    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1 h-2/4">
        <div class="sm:col-span-2">
            <div class="flex justify-around mb-0">
                <div class="sm:col-span-3 mb-0">
                    <label for="name" class=" mb-0 block text-sm font-medium leading-6 text-white">Nome</label>
                </div>
                <div class="sm:col-span-3 mb-0">
                    <label for="name" class="mb-0 block text-sm font-medium leading-6 text-white">e-mail</label>
                </div>
                <div class="sm:col-span-3 mb-0">
                    <label for="name" class="mb-0 block text-sm font-medium leading-6 text-white">Celular</label>
                </div>
                <div class="sm:col-span-2 mb-0">
                    <label for="name" class="mb-0 block text-sm font-medium leading-6 text-white">Ação</label>
                </div>
            </div>
        </div>
        <hr class="mx-py"/>
        @foreach($contents as $content)
            <div class="sm:col-span-2 mb-0">
                <div class="flex justify-around">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-white">{{ $content['name'] }}</label>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-white">{{ $content['email'] }}</label>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-white">{{ $content['cellphone'] }}</label>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-white">
                            <a type="button" class="bg-blue-500 rounded-lg border-blue-500 mr-1 p-1 hover:border-double">Visualizar</a>
                            <a wire:click="delete" type="button" class="bg-red-500 rounded-lg border-red-500 p-1 hover:border-double">Excluir</a>
                        </label>
                    </div>
                </div>
            </div>
            <hr/>
        @endforeach

    </div>

{{--        <span>{{ $contents->links() }}</span>--}}
{{--    @else--}}
{{--        <p>Não Informação disponível.</p>--}}
{{--    @endif--}}
</div>


<div>
    @if(!empty($contents))
        <h1>Membros</h1>
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1 h-2/4">
            <table id="customers-table">
                <thead>
                    <tr>
                        <th class=" w-5 text-left w-2/5">Nome</th>
                        <th class="text-left w-1/5">e-mail</th>
                        <th class="text-left w-1/5">Celular</th>
                        <th class="text-center w-1/5">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contents as $content)
                        <tr>
                            <td>{{ $content['name'] }}</td>
                            <td>{{ $content['email'] }}</td>
                            <td>{{ $content['cellphone'] }}</td>
                            <td class="flex justify-center">
                                <a href="/visualizar_socio/{{ $content['id'] }}" type="button" class="bg-blue-500 rounded-lg border-blue-500 mr-1 p-1 hover:border-double m-2">Visualizar</a>
                                <a wire:click="delete({{ $content['id'] }})" type="button" class="bg-red-500 rounded-lg border-red-500 p-1 hover:border-double m-2">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>Não Informação disponível.</p>
    @endif
</div>


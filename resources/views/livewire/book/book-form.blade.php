<div wire:ignore xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="py-6 pr-4 pl-4 pb-1">
        @if(isset($modal) && 0 == strcmp('create', $modal) || empty($modal))
            <p class="pb-4 text-xl font-800">Cadastrar livro</p>
            <form wire:submit.prevent="createbook()">
                @elseif(isset($modal) && 0 == strcmp('update', $modal) || empty($modal))
                    <p class="pb-4 text-xl font-800">Editar livro</p>
                    <form wire:submit.prevent="updatebook()">
                        @endif
                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                            <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Título"
                                   wire:model="title" required="">
                        </div>
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descrição</label>
                            <input type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Descrição"
                                   wire:model="description" required="">
                        </div>
                        <div class="mb-6">
                            <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autor</label>
                            <input type="text" id="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Autor"
                                   wire:model="author" required="">
                        </div>
                        <div class="mb-6">
                            <label for="pages_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número de páginas</label>
                            <input type="number" id="pages_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Número de páginas"
                                   wire:model="pages_number" required="">
                        </div>
                        <div class="row w-full flex items-center justify-end mb-6">
                            <a wire:click="$emit('closeModal')" class="p-2.5 ml-2 text-sm text-white bg-secondary rounded-lg cursor-pointer">Cancelar</a>
                            <button type="submit" class="p-2.5 ml-2 text-sm text-white bg-primary rounded-lg hover:bg-indigo-800">Salvar</button>
                        </div>
                @if(isset($modal) && 0 == strcmp('update', $modal))
                    </form>
                @else
            </form>
        @endif
    </div>
</div>
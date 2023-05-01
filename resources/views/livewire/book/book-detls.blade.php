<div wire:ignore xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="py-6 pr-4 pl-4 pb-1">
        <p class="pb-4 text-xl font-800">Detalhes do livro</p>
        <p class="font-bold">Título: @php echo $title; @endphp</p>
        <p>Descrição: @php echo $description; @endphp</p>
        <p>Autor: @php echo $author; @endphp</p>
        <p>Número de páginas: @php echo $pages_number; @endphp</p>
        <p>Data de Cadastro: @php echo $created_at; @endphp</p>

        <div class="row w-full flex items-center justify-end mb-6">
            <button wire:click="$emit('closeModal')" class="p-2.5 ml-2 text-sm text-white bg-secondary rounded-lg">Fechar</button>
        </div>
    </div>
</div>
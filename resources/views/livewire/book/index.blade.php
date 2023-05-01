<div class="row col-sm-12 col-md-12 col-lg-8 bg-white">
    <div class="flex flex-col justify-content-center align-self-start gap-1 w-full">
        <div class="w-full mt-4 h-12 row-content">
            <form action="{{url('home')}}" method="GET" class="mb-12 flex flex-row">
                <input type="text" id="search" name="search" class="col-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Pesquisar">
                <button type="submit" class="col-2 p-2.5 mx-2 text-sm text-white bg-primary rounded-lg hover:bg-indigo-800">Pesquisar</button>
            </form>
        </div>

        <div class="flex flex-row justify-end w-full mt-4 mb-2 h-10 row-content">
                <button wire:click='$emit("openModal", "book.book-form", {{ json_encode(["modal" => "create", "book" => null]) }})'
                    class="p-2.5 ml-2 h-10 text-sm bg-primary text-white rounded-lg hover:bg-indigo-800">Adicionar Livro</button>
        </div>

        <table class="table w-full row-content" id="table">
            <thead>
            <tr>
                <th class="border text-center">Título</th>
                <th class="border text-center">Descrição</th>
                <th class="border text-center">Autor</th>
                <th class="border text-center">Número de páginas</th>
                <th class="border text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($books))
                @foreach($books as $book)
                    <tr>
                        <td class="border">{{ $book->title }}</td>
                        <td class="border">{{ $book->description }}</td>
                        <td class="border">{{ $book->author }}</td>
                        <td class="border text-center">{{ $book->pages_number }}</td>
                        <td class="border text-center">
                            <button wire:click='$emit("openModal", "book.book-detls", {{ json_encode(["modal" => "detls", "book" => $book]) }})' class="mx-2 font-medium hover:underline">Detalhes</button>
                            <button wire:click='$emit("openModal", "book.book-form", {{ json_encode(["modal" => "update", "book" => $book]) }})' class="mx-2 font-medium hover:underline">Editar</button>
                            <button wire:click="deletebook({{ $book->id }})" class="mx-2 font-medium hover:underline">Excluir </button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

<script>
$(function(){
    $('#table').DataTable({
        searching: false,
        columnDefs: [
            { orderable: false, targets: 4 }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
        }
    });
});
</script>


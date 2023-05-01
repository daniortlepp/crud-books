@extends('layout')

@section('content')
<section class="flex break-words sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <div class="w-full flex justify-center content-home">
        <p class="text-gray-700">
            @livewire('book.index')
            @livewire('livewire-ui-modal')
             @livewireScripts
        </p>
    </div>
</section>
@endsection
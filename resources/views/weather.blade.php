@extends('layout')

@section('content')
<section class="flex break-words sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <div class="w-full text-center content-home">
        <div class="row justify-center mt-5">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header"><p class="text-xl font-800">Previsão do tempo para @php echo $weather['results']['city']; @endphp</p></div>
                    <div class="card-body">
    
                        <p>@php echo "{$weather['results']['date']} - {$weather['results']['time']}"; @endphp</p>
                        <p>@php echo "<img src='./assets/img/weather/{$weather['results']['img_id']}.png' class='imagem-do-tempo'>"; @endphp</p>
                        <h3>@php echo "{$weather['results']['temp']}°"; @endphp</h3>
                        <h5>@php echo "{$weather['results']['description']}"; @endphp</h5>
                        <p>@php echo "Máx: {$weather['results']['forecast'][0]['max']} / Min: {$weather['results']['forecast'][0]['min']}"; @endphp</p>
                        <p>@php echo "Umidade: {$weather['results']['humidity']}%"; @endphp</p>
                        <p>@php echo "Nascer do Sol: {$weather['results']['sunrise']} - Pôr do Sol: {$weather['results']['sunset']}"; @endphp</p>
                        <p>@php echo "Velocidade do vento: {$weather['results']['wind_speedy']}"; @endphp</p>

                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
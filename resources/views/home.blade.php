@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')

  <section>

    <div class="container py-4 ">

      <h1 class="text-center mb-5">Lista Treni</h1>

      <div class="container ">

      
        <div class="row gy-3 justify-content-center">

          @foreach ($trains as $train)
            <div class="col-7 text-start">
              
              <div class="card p-3 bg-warning text-dark">
                <h2><strong>Azienda: </strong>{{ $train->company }}</h2>
                <h3><strong>Stazione di partenza: </strong>{{ $train->departure_station }}</h3>
                <h3><strong>Stazione di arrivo: </strong>{{ $train->arrival_station }}</h3>
                <h4><strong>Orario di partenza: </strong>{{ $train->departure_time }}</h4>
                <h4><strong>Orario di arrivo: </strong>{{ $train->arrival_time }}</h4>
                <h5><strong>Codice Treno: </strong>{{ $train->train_code }}</h5>
                <h5><strong>In Orario: </strong>{{ $train->on_time ? 'Si' : 'No' }}</h5>
                <h5><strong>Cancellato: </strong>{{ $train->cancelled ? 'Si' : 'No'  }}</h5>
              </div>
                
            </div>
          @endforeach     
        
          </div>
      
      </div>

    </div>

  </section>

@endsection

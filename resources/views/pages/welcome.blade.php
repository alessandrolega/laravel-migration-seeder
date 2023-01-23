@extends('layout.app')

@section('Page-Title', 'Trains')

@section('Main-Content')

<div class="text-center mt-4">
    <h1>Trains</h1>
    <div class="container">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Departure City</th>
                <th scope="col">Arrival City</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $element)
                <tr>
                    <th></th>
                    <td>{{$element->departure_city}}</td>
                    <td>{{$element->arrival_city}}</td>
                    <td>{{$element->price}}</td>
                  </tr>
                </tbody> 
                @endforeach
          </table>

    </div>

</div>

    
@endsection
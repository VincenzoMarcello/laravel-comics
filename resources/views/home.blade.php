@extends('layouts.app')

@section('main-content')
  <div class="container">
    <div class="row justify-content-between gy-3 mt-5">

      @foreach ($comics as $comic)
        <div class="col-3">
          <div class="card">
            <div class="card-header text-center">
              <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="card-body mb-auto">
              <h5>
                {{ $comic['title'] }}
              </h5>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
  </div>
@endsection

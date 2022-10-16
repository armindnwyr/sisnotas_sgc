@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Cursos Asignados'])
    <div class="col-12 mx-4">
        <div class="card" style="width: 18rem; text-align: center">
            <div class="card-body">
              <i class="fa fa-book fa-5x"></i>
              <h5 class="card-title mt-2">Aritmetica - 3ro A</h5>
              <p class="card-text">Fecha Limite: 27/08/2022 23:59</p>
              <a href="#" class="btn btn-primary">Calificar</a>
            </div>
          </div>
    </div>
    </div>
@endsection

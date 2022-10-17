@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Gestion de Docentes'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Lista de Docentes</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >
                                            #</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            DNI</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Apellido Paterno</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Apellido Materno</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nivel</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Especialidad</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Telefono</th>
                                    </tr>
                                </thead>
                                @foreach ($docente as $docentes)
                                <tbody>
                                        
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <div>
                                                    <h6 class="px-3 text-sm">{{$docentes->id}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->dni}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->nombre}}</p>
                                            {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->paterno}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->materno}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->nivel}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->especialidad}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$docentes->celular}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

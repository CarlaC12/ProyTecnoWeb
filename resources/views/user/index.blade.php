@extends('dashboard.dashboard')

@section('titulo', 'User')

@section('contenido')
    <br> <br>

    <div class="container px-6 mb-3">    
        <div class="mt-5">
           <button class="rounded-lg bg-light shadow btn-md ">
            <a href="{{ route('user.create') }}" >
                <span>
                    <i class="fa fa-plus " style="color: #fa1808"></i>
                </span>
                &nbsp;
                Agregar
            </a>
                
               </button>

            <div class="overflow-x-auto relative  sm:rounded-lg  ">

                <table id="table" class="table ui celled table ">
                    <thead>
                        <th class="bg-primary">Id</th>
                        <th class="bg-primary">Fullname</th>
                        <th class="bg-primary">Ci</th>
                        <th class="bg-primary">Email</th>
                        <th class="bg-primary">Accion</th>
                       
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($users as $user)
                        
                         <tr>
                            <td>{{ $i++ }}</td>
                            <td data-label="nombre">{{$user->fullname}}</td>
                            <td data-label="finicio">{{$user->ci}}</td>
                            <td data-label="ffin">{{$user->email}}</td>
                            <td>
                                <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                                    {{-- <a href="" class="btn btn-warning btn-sm fas fa-eye  cursor-pointer"></a> --}}

                                    <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                        onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>

                                </form>

                            </td>
                        </tr> 
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('style/table.css') }}">
@stop

@section('js')

@stop

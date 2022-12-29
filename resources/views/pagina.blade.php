@extends('dashboard.dashboard')

@section('titulo', 'Inicio')

@section('contenido')
<br> <br> 
    <div class="container px-6 mb-3">
        <div class="text-start">
            <h2 class="text-2xl text-primary-dark dark:text-light font-bold pt-3 text-center">GESTIONAR PERIODO </h2><br>
                {{-- <h2 class="text-2xl text-primary-dark dark:text-light font-bold pt-3 text-center">GESTIONAR PERIODO
                evento: <strong class="uppercase">TABLE</strong> </h2> --}}
        </div>
        <div class="mt-5">
            <div class="overflow-x-auto relative  sm:rounded-lg  ">

                <table class="table">
                    <thead>
                        <th class="bg-primary">Id</th>
                        <th class="bg-primary">Fotografo</th>
                        <th class="bg-primary">Paquete</th>
                        <th class="bg-primary">Precio</th>
                        <th class="bg-primary">Estado</th>
                        <th class="bg-primary">Accion</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td data-label="Id">1</td>
                            <td data-label="Fotografo">hola</td>
                            <td data-label="Paquete">hola</td>
                            <td data-label="Precio">hola $us</td>
                            <td data-label="Estado">



                                <div class="flex">
                                    <div class="h-4 w-4 rounded-full bg-red-400 mr-2"></div> rechazado
                                </div>

                            </td>
                            <td data-label="Accion">


                                <button type="button"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 
                                        dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>

                            </td>


                            </td>
                        </tr>
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

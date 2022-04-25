@extends("layout")
@section("menu")
{{--<x-ancla ref="{{route('productos.create')}}">Nuevo producto</x-ancla>
<x-ancla ref="{{route('principal')}}">Volver</x-ancla>--}}
@endsection
@section("contenido")
    <table>
        <tr>
            <td class="font-bold">Nombre</td>
         {{--   <td class="text-center">Descripcion</td>--}}
            <td class="font-bold">Precio</td>
        </tr>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->nombre_corto}}</td>
            {{--<td>{{$producto->descripcion}}</td>--}}
            <td>{{$producto->PVP}}</td>




        </tr>
        @endforeach
        </table>
    <div class="p-10">
 {{--   {{$productos->links()}}--}}
    </div>
@endsection

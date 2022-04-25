@extends("layout");
@section("menu")
    <x-ancla ref="{{route('productos.index')}}">Productos</x-ancla>

  {{--  <x-ancla ref="{{route("tiendas.index")}}">Tiendas</x-ancla>
    <x-ancla ref="{{route("familias.index")}}">Familias</x-ancla>--}}
@endsection

<x-app-layout>


    <div class="container">
        <div class="row">
            <div class="col col-10">
                <div class="pt-4 float-right">
                    <a class="btn btn-sm btn-danger" href={{ route('products.create') }}>Agregar nuevo
                        producto<span></span></a>
                </div>
            </div>
        </div>
    </div>
    @if (sizeof($data) === 0)
    <div class="container pt-2 ">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-2">
                <div class="alert alert-danger" role="alert">
                    No hay productos registrado por favor crea uno
                  </div>
            </div>
        </div>
    </div>

    @endif

    @if (sizeof($data) > 0)
        <div class="container">
            <div class="row pt-2">
                <div class="col-sm-8 mx-auto mt-2">
                    <div class="card border-2 shadow">
                        <div class="card-body">
                            <table class="table thead-dark">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Peso</th>
                                        <th>Categoria</th>
                                        <th>Referencia</th>
                                        <th>Stock</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $product)
                                        <tr>
                                            <th>{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->weight }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->reference }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" type="button"
                                                    class="btn btn-warning btn-sm">Editar</a>
                                                <form action="{{ route('products.delete', $product->id) }}"
                                                    class="d-inline" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm  btn-outline-danger"
                                                        type="submit">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


</x-app-layout>

<x-app-layout>

    <div class="container">
        <div class="row pt-2">
            <div class="col-sm-8 mx-auto mt-2">
                <div class="card border-2 shadow">
                    <div class="card-body">
                        <h1>Producto con mas Stock</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    <th>Referencia</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th>{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->reference }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

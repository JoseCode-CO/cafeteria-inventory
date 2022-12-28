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
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

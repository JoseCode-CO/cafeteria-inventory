<x-app-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 mx-auto mt-4">
                <div class="pt-2">
                    <a class="btn btn-sm btn-danger" href={{ route('sale.create') }}>Registrar una venta<span></span></a>
                </div>
            </div>

            <div class="col-sm-2 mx-auto mt-4">
                <div class="pt-2">
                    <a class="btn btn-sm btn-danger" href={{ route('sale.stock') }}>Producto con mas Stock<span></span></a>
                </div>
            </div>

            <div class="col-sm-2 mx-auto mt-4">
                <div class="pt-2">
                    <a class="btn btn-sm btn-danger" href={{ route('sale.max') }}>Producto mas vendido
                        productos<span></span></a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

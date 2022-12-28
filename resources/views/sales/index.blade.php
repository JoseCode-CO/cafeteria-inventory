<x-app-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 mx-auto mt-4">
                <div class="pt-2">
                    <a class="btn btn-sm btn-danger" href={{ route('sale.create') }}>Registrar una venta<span></span></a>
                </div>
            </div>

            @if (sizeof($product) > 0)
                <div class="col-sm-2 mx-auto mt-4">
                    <div class="pt-2">
                        <a class="btn btn-sm btn-danger" href={{ route('sale.stock') }}>Producto con mas
                            Stock<span></span></a>
                    </div>
                </div>

                <div class="col-sm-2 mx-auto mt-4">
                    <div class="pt-2">
                        <a class="btn btn-sm btn-danger" href={{ route('sale.max') }}>Producto mas vendido<span></span></a>
                    </div>
                </div>
        </div>
    </div>
    @endif



</x-app-layout>

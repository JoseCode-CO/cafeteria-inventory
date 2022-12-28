<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-sm-4 mx-auto mt-2">
                <div class="pt-2 float-right">
                    <a class="btn btn-sm btn-danger" href={{ route('products.index') }}>Volver al listado de
                        productos<span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-2">
            <div class="col-sm-4 mx-auto mt-2">
                <div class="card border-2 shadow">
                    <form  action="{{route('products.store')}}" method="POST" class="row g-3 needs-validation">
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Referencia</label>
                                <input type="text" class="form-control" name="reference" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Precio</label>
                                <input type="number" class="form-control" name="weight" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Peso</label>
                                <input type="number" class="form-control" name="weight" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Categoria</label>
                                <input type="text" class="form-control" name="category" autocomplete="off" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Stock</label>
                                <input type="number" class="form-control" name="stock" autocomplete="off" required>
                            </div>
                            <div class="mb-2 float-right">
                                @csrf
                                <button class="btn btn-outline-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

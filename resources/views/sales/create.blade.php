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
                    <form action="{{ route('sale.store') }}" method="POST" class="row g-3 needs-validation">
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label">Nombre del producto</label>
                                <select class="form-select" name="product_id">
                                    @foreach ($data as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Cantidad</label>
                                <span class="text-sm text-red-600">
                                    @error('sale_made')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="number" class="form-control" name="sale_made" autocomplete="off"
                                    value="{{ old('sale_made') }}" required>
                            </div>

                            <div class="mb-2 float-right">
                                @csrf
                                <button class="btn btn-outline-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

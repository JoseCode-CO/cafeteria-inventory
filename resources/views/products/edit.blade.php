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
                    <form action="{{ route('products.update', $edit->id) }}" method="POST"
                        class="row g-3 needs-validation">
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label">Nombre</label>
                                <span class="text-sm text-red-600">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" class="form-control" name="name" autocomplete="off"
                                value="{{ old('name', $edit->name )}}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Referencia</label>
                                <span class="text-sm text-red-600">
                                    @error('reference')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" class="form-control" name="reference" autocomplete="off"
                                value="{{ old('reference', $edit->reference )}}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Precio</label>
                                <span class="text-sm text-red-600">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="number" class="form-control" name="price" autocomplete="off"
                                value="{{ old('price', $edit->price )}}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Peso</label>
                                <span class="text-sm text-red-600">
                                    @error('weight')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="number" class="form-control" name="weight" autocomplete="off"
                                value="{{ old('weight', $edit->weight )}}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Categoria</label>
                                <span class="text-sm text-red-600">
                                    @error('category')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" class="form-control" name="category" autocomplete="off"
                                value="{{ old('category', $edit->category )}}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Stock</label>
                                <span class="text-sm text-red-600">
                                    @error('stock')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="number" class="form-control" name="stock" autocomplete="off"
                                    value="{{ old('stock', $edit->stock )}}" required>
                            </div>
                            <div class="mb-2 float-right">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-outline-primary" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

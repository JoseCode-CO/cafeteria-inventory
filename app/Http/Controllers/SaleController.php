<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('sales.index', compact('product'));
    }

    public function create()
    {
        $data = Product::all();
        return view('sales.create', compact('data'));
    }

    public function store(Request $request)
    {
        $idProduct = $request->product_id; //Guarda el id del producto
        $sales = $request->sale_made; //Guarda el numero de venta

        $product = Product::find($idProduct); //Consulto el producto

        if ($product->stock < $sales ||  0) {
            session()->flash('success', 'Error al realizar la compra, puede que no haya unidades disponibles o el numero que ingresa no corresponde con las unidades en bodega.');
            return back();
        }

        //Creo la compra
        Sale::create([
            'product_id' => $request->product_id,
            'sale_made' => $request->sale_made,
        ]);

        //Actualizo el producto
        $result = $product->stock - $request->sale_made;
        $product->update([
            'stock' => $result
        ]);

        session()->flash('success', 'Compra registrada');
        return back();
    }

    public function stockMax()
    {
        //Utilizando eloquent
        $product = Product::where('stock', Product::max('stock'))->first();

        //En sql seria: SELECT * FROM products WHERE stock = (SELECT MAX(stock) FROM products);

        return view('sales.stock', compact('product'));
    }

    public function productMaxSales()
    {
        //Utilizando eloquent
        $product = Product::join('sales', 'products.id', '=', 'sales.product_id')
            ->selectRaw('products.*, SUM(sales.sale_made) as total_sales')
            ->groupBy('products.id', 'products.name', 'products.reference', 'products.price', 'products.weight', 'products.category', 'products.stock', 'products.created_at', 'products.updated_at')
            ->orderBy('total_sales', 'desc')
            ->first();

        //En sql seria:
        /*SELECT products.*, SUM(sales.sale_made) as total_sales
        FROM products
            JOIN sales ON products.id = sales.product_id
            GROUP BY products.id, products.name, products.reference, products.price, products.weight, products.category, products.stock, products.created_at, products.updated_at
            ORDER BY total_sales DESC
            LIMIT 1;*/

        return view('sales.max', compact('product'));
    }
}

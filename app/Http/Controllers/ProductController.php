<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function home(Request $request): View
    {
        if (!$request->search) {
            $products = Product::all();
        } else {
            $products = Product::where('name', 'LIKE', "%$request->search%")
                ->orWhere('description', 'LIKE', "%$request->search%")
                ->get();
        }

        return view('products', [
            'title' => 'View all products',
            'subtitle' => 'Look at all our lovely stuff',
            'products' => $products
        ]);
    }

    public function single(int $id): View
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, "Product $id does not exist");
        }

        return view('singleProduct', [
            'product' => $product
        ]);
    }

    public function form(): View
    {
        return view('addProduct');
    }


    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|string|url|max:255',
            'quantity' => 'nullable|integer|min:0|max:100',
            'price' => 'required|numeric|min:0'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        // Quantity in the DB does not allow null, but does have a default
        // We only want to set the quantity if we actually have one
        if ($request->quantity) {
            $product->quantity = $request->quantity;
        }

        $product->price = $request->price;
        $product->save();

        return response()->redirectTo('/');
    }

    public function delete(int $id): RedirectResponse
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, "Product $id does not exist");
        }

        $product->delete();

        return response()->redirectTo('/');
    }

    public function editForm(int $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, "Product $id does not exist");
        }

        return view('editProduct', [
            'product' => $product
        ]);
    }

    public function edit(int $id, Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|string|url|max:255',
            'quantity' => 'nullable|integer|min:0|max:100',
            'price' => 'required|numeric|min:0'
        ]);

        $product = Product::find($id);

        if (!$product) {
            abort(404, "Product $id does not exist");
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        // Return a redirect with an extra message
        // We must give the message a name 'status' (other names are available)
        // And then a message itself 'Product Updated'
        // This will put the message in the session - temporary storage for each user of our app
        return redirect("/product/$id")->with('status', 'Product Updated');
    }
}

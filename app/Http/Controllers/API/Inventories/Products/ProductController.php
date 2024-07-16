<?php

namespace App\Http\Controllers\API\Inventories\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventories\Products\StoreProductRequest;
use App\Http\Requests\Inventories\Products\UpdateProductRequest;
use App\Models\Inventories\Products\Product;
use App\Traits\CrudResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use CrudResponse;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return $this->indexMethod($this->product->get(), 'category', 'sub_category');
    }

    public function store(StoreProductRequest $request)
    {
        $request->validated();

        $imagemBase64 = null;

        if ($request->hasFile('image')) {
            $imagemProduct = $request->file('image');
            $caminhoImagem = $imagemProduct->store('assets/img/products', 'public');

            $imageData = Storage::disk('public')->get($caminhoImagem);

            $image = imagecreatefromstring($imageData);
            if ($image !== false) {
                $w = 150;
                $h = 150;
                $resizedImage = imagescale($image, $w, $h);

                ob_start();
                imagejpeg($resizedImage);
                $imagemBase64 = base64_encode(ob_get_clean());
                imagedestroy($resizedImage);
            }
            imagedestroy($image);
        }

        $data = [
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagemBase64,
        ];

        return $this->storeMethod($this->product, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->product->find($id), 'category', 'sub_category');
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $request->validated();

        $data = [
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
            'is_active' => boolval($request->is_active),
        ];

        return $this->updateMethod($this->product->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->product->find($id));
    }
}

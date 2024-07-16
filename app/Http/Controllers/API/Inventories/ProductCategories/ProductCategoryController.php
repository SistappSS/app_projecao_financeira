<?php

namespace App\Http\Controllers\API\Inventories\ProductCategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventories\ProductCategories\StoreProductCategoryRequest;
use App\Http\Requests\Inventories\ProductCategories\UpdateProductCategoryRequest;
use App\Models\Inventories\ProductCategories\ProductCategory;
use App\Traits\CrudResponse;

class ProductCategoryController extends Controller
{
    use CrudResponse;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public function index()
    {
        return $this->indexMethod($this->productCategory->get());
    }

    public function store(StoreProductCategoryRequest $request)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
        ];

        return $this->storeMethod($this->productCategory, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->productCategory->find($id), 'user');
    }

    public function update(UpdateProductCategoryRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'is_active' => boolval($request->is_active),
        ];

        return $this->updateMethod($this->productCategory->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->productCategory->find($id));
    }
}

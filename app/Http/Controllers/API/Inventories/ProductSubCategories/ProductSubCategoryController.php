<?php

namespace App\Http\Controllers\API\Inventories\ProductSubCategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventories\ProductSubCategories\StoreProductSubCategoryRequest;
use App\Http\Requests\Inventories\ProductSubCategories\UpdateProductSubCategoryRequest;
use App\Models\Inventories\ProductSubCategories\ProductSubCategory;
use App\Traits\CrudResponse;

class ProductSubCategoryController extends Controller
{
    use CrudResponse;

    public function __construct(ProductSubCategory $productSubCategory)
    {
        $this->productSubCategory = $productSubCategory;
    }

    public function index()
    {
        return $this->indexMethod($this->productSubCategory->get(), 'category');
    }

    public function store(StoreProductSubCategoryRequest $request)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id
        ];

        return $this->storeMethod($this->productSubCategory, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->productSubCategory->find($id), 'user');
    }

    public function update(UpdateProductSubCategoryRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'is_active' => boolval($request->is_active),
        ];

        return $this->updateMethod($this->productSubCategory->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->productSubCategory->find($id));
    }
}

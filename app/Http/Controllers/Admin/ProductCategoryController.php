<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Services\Admin\ProductCategoryService;
use App\ProductCategory;
use App\Http\Requests\Admin\ProductCategoryRequest;

class ProductCategoryController extends BaseController
{
    protected $indexUrl = 'admin/product_category';
    protected $viewPath = 'admin.product_category';

    public function __construct(ProductCategoryService $service, ProductCategory $model)
    {
    	parent::__construct($service);
        $this->model = $model;
    }

    public function store(ProductCategoryRequest $request){
    	return $this->_store($request);
    }

    public function update(ProductCategoryRequest $request, $id){
    	return $this->_update($request, $id);
    }
}

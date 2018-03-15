<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Services\Admin\ProductService;
use App\Http\Requests\Admin\ProductRequest;
use App\Product;

class ProductController extends BaseController
{
    protected $indexUrl = 'admin/product';
    protected $viewPath = 'admin.product';
    protected $category = null;

    public function __construct(ProductService $service, Product $model, ProductCategory $category)
    {
    	parent::__construct($service);
        $this->model = $model;
        $this->category = $category;
    }

    public function create(){
    	return $this->_create(['booleanTexts'=>$this->model->booleanTexts, 'categories'=>$this->category->all()]);
    }

    public function edit($id){
    	return $this->_edit($id, ['booleanTexts'=>$this->model->booleanTexts, 'categories'=>$this->category->all()]);
    }

    public function store(ProductCategoryRequest $request){
    	return $this->_store($request);
    }

    public function update(ProductCategoryRequest $request, $id){
    	return $this->_update($request, $id);
    }
}

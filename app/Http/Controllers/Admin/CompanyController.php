<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Services\Admin\CompanyService;

use App\Company;

class CompanyController extends BaseController
{
    protected $indexUrl = 'admin/company';
    protected $viewPath = 'admin.company';
	
	public function __construct(CompanyService $service, Company $systemInfo)
    {
    	parent::__construct($service);
    	$this->model = $systemInfo;
    }

    public function update(Request $request){
        var_dump($request->introduce);
    	return $this->_update($request, 1);
    }
}

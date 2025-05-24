<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\User;
use App\Services\Backend\CallStream\CallStreamService;
use App\Services\Frontend\ServiceFrontendService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class ServiceController extends Controller
{

    public $serviceFrontendService;


    public function __construct(ServiceFrontendService $serviceFrontendService)
    {
        $this->serviceFrontendService = $serviceFrontendService;
    }

    public function index()
    {


        $page = 'services';
        $categories = ServiceCategory::all();

        return view('frontend.services.index', compact('page', 'categories'));
    }

    public function services(Request $request)
    {

        return $this->serviceFrontendService->initActions($request);
    }
}
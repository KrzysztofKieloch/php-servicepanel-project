<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPUnit\Exception;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('prices/pricelist', [
            'prices' => Price::paginate(15)
        ]);
    }

}

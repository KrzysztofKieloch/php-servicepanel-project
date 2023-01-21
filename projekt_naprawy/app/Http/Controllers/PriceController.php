<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('prices.index', [
            'prices' => Price::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'device' => 'required|max:100',
            'price' => 'required|numeric|between:0,999999.99',
            'picture_path' => 'required|image|'
        ]);

        $price = new Price($request->all());
        $price->picture_path = $request->file('picture_path')->store('prices');
        $price->save();

        return redirect(route('prices.pricelist'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Price  $price
     * @return View
     */
    public function show(Price $price): View
    {
        return view('prices.show', [
            'price' => $price
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Price $price
     * @return View
     */
    public function edit(Price $price): View
    {
        return view('prices.edit', [
            'price' => $price
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Price  $price
     * @return RedirectResponse
     */
    public function update(Request $request, Price $price): RedirectResponse
    {
        $price->fill($request->all());
        if ($request->hasFile('picture_path')) {
            $price->picture_path = $request->file('picture_path')->store('prices');
        }
        $price->save();
        return redirect(route('pricelist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id);

        $price->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}

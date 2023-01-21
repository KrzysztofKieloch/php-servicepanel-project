<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPUnit\Exception;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('repairs.index', [
            'repairs' => Repair::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('repairs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $repair = new Repair($request->all());
        $repair->save();
        return redirect(route('repairs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Repair  $repair
     * @return View
     */
    public function show(Repair $repair): View
    {
        return view('repairs.show', [
            'repair' => $repair
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return View
     */
    public function edit(Repair $repair): View
    {
        return view('repairs.edit', [
            'repair' => $repair
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Repair  $repair
     * @return RedirectResponse
     */
    public function update(Request $request, Repair $repair): RedirectResponse
    {
        $repair->fill($request->all());
        $repair->save();
        return redirect(route('repairs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Repair  $repair
     * @return JsonResponse
     */
    public function destroy(Repair $repair): JsonResponse
    {
        try {
            $repair->delete();
            return response()->json([
                'status' => 'succes',
                'message' => 'Wystąpił błąd.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
               'status' => 'error',
                'message' => 'Wystąpił błąd.'
            ])->setStatusCode(500);
        }
    }

}

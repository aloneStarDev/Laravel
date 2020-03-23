<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tariff;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $tariffs = Tariff::all();
        return view('Admin.tariffs.all', compact('tariffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tariff $tariff
     * @return Factory|View
     */
    public function edit(Tariff $tariff)
    {
        return view('Admin.tariffs.edit', compact('tariff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tariff $tariff
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, Tariff $tariff)
    {
        $this->validate($request, [
            'price' => 'required'
        ]);

        $tariff->update([
            'price' => $request->input('price')
        ]);

        return redirect(route('tariffs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}

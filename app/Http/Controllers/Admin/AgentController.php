<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\Http\Controllers\Controller;
use App\Http\Requests\AgentRequest;
use App\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $agents = Agent::latest()->paginate(20);
        return view('Admin.agents.all', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('Admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AgentRequest $request
     * @return RedirectResponse|Redirector
     */

    public function store(AgentRequest $request)
    {
        Agent::create($request->all());

        $id = Agent::where('nationCode', $request->input('nationCode'))->value('id');

        User::create([
            'username' => $request->input('phonenumber'),
            'password' => $request->input('nationCode'),
            'rollId' => -1 * $id
        ]);

        return redirect(route('agents.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     * @return void
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Agent $agent
     * @return Factory|View
     */
    public function edit(Agent $agent)
    {
        return view('Admin.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AgentRequest $request
     * @param Agent $agent
     * @return void
     */
    public function update(AgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agent $agent
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        User::where('username', $agent->phonenumber)->delete();
        return back();
    }
}

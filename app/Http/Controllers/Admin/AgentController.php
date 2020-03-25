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
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make($request->input('nationCode')),
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
     * @return RedirectResponse|Redirector
     */
    public function update(AgentRequest $request, Agent $agent)
    {
//        if ($agent->phonenumber != $request->input('username') || $agent->nationCode != $request->input('password')) {

            User::where('password', $agent->nationCode )->update([
                'username' => $request->input('phonenumber'),
                'password' => $request->input('nationCode'),
            ]);
//        }


        $agent->update($request->all());

        return redirect(route('agents.index'));
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


//<?php
//
//namespace App\Http\Controllers\Admin;
//
//use App\Agent;
//use App\Customer;
//use App\File;
//use App\Http\Controllers\Controller;
////<<<<<<< HEAD
//use App\Http\Requests\FileRequest;
//use Illuminate\Http\RedirectResponse;
//use Illuminate\Http\Request;
//use Illuminate\Routing\Redirector;
////=======
//use Illuminate\Auth\Access\AuthorizationException;
//use Illuminate\Contracts\View\Factory;
////use Illuminate\Http\Request;
//use Illuminate\Http\Response;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Gate;
//use Illuminate\View\View;
////>>>>>>> 54bb88ac03d4192cac2ae4b497c8ca8ae44762d1
//
//class FileController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return Response
//     */
//public function index()
//{
//}
///**
// * Show the form for creating a new resource.
// *
// * @return Response
// */
//public function create()
//{
//}
//
///**
// * Store a newly created resource in storage.
// *
//<<<<<<< HEAD
// * @param  FileRequest  $request
// * @return RedirectResponse|Redirector
//=======
////     * @param Request $request
////     * @return Response
//>>>>>>> 54bb88ac03d4192cac2ae4b497c8ca8ae44762d1
// */
//public function store(FileRequest $request)
//{
//}
//
///**
// * Display the specified resource.
// *
// * @param  File  $file
// * @return Response
// */
//public function show(File $file)
//{
//    return 'in Show';
//}
//
///**
// * Show the form for editing the specified resource.
// *
// * @param File $file
// * @return Factory|View
// * @throws AuthorizationException
// */
//public function edit(File $file)
//{
//    //if you are agent, you can't access to this route
//    $this->authorize('admin_permissions');
//    return view('Admin.files.edit', compact('file'));
//}
//
///**
// * Update the specified resource in storage.
// *
// * @param Request $request
// * @param File $file
// * @return void
// */
//public function update(Request $request,File $file)
//{
//    $file->update($request->all());
//    return "in update";
//}
//
///**
// * Remove the specified resource from storage.
// *
// * @param File $file
// * @return Response
// * @throws AuthorizationException
// */
//public function destroy(File $file)
//{
//}
//}





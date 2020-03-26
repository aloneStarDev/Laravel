<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class FileController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $files = File::where('deleted',false)->latest()->paginate(20);
        return view('Admin.files.all', compact('files'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.files.create');
    }

    /**
     * @param FileRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(FileRequest $request)
    {
        $file = new File($request->all());
        $code = 0;
        do{
            $code = rand(0,999999999);
        }while(File::where('code',$code)->first() != null);
        $file['code'] = $code;
        $user_id = 0;
        if(auth()->user()->rollId < 0){
            $user_id = auth()->user()->rollId * -1;
            $agent = Agent::where('id',$user_id)->firstOrFail();
            $agent->registered_items++;
            $agent->save();
        }
        $file["user_id"] = $user_id;
        $file->save();
        return redirect(route('files.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function edit(File $file)
    {
        return view('Admin.files.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, File $file)
    {
        $file->update($request->all());
        return redirect(route('files.index'));
    }

    /**
     * @param File $file
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(File $file)
    {
        $this->authorize('admin_permissions');
        $file->delete();
        return back();
    }

    public function changeVisible(File $file){
        $mode = $file->visible;
        $file->update(['visible'=> !$mode]);
        return back();
    }
    public function archive(File $file){
        $mode = $file['deleted'];
        $file->update(['visible'=> false,'deleted'=> !$mode]);
        return back();
    }
    public function archives()
    {
        $files=File::where('deleted',true)->latest()->paginate(20);
        return view('Admin.archive.all',compact('files'));
    }
}

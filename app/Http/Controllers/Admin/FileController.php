<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
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
        $code = 111111;
        $latest = File::orderBy('created_at', 'desc')->first();
        if($latest != null)
            $code = ($latest->code)+1;
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
        return view("Admin.files.show",compact("file"));
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
    public function find(Request $request){
        $tel = $request->input('valTel');
        $files = null;
        switch($request->input("key")){
            case 0:
                $files = File::wherecode($request->input("valNum"))->get();
            break;
            case 2:
                $num = $request->input("valNum");
                $files =  File::where("buy",">",$num-$tel*$num/100)->where("buy","<",$num+$tel*$num/100)->get();
                break;
            case 3:
                $num = $request->input("valNum");
                $files =  File::where("rahn",">",$num-$tel*$num/100)->where("rahn","<",$num+$tel*$num/100)->get();
                break;
            case 4:
                $num = $request->input("valNum");
                $files =  File::where("ejare",">",$num-$tel*$num/100)->where("ejare","<",$num+$tel*$num/100)->get();
                break;
            case 5:
                $valR = $request->input("valR");
                $valE = $request->input("valE");
                $files =  File::where("ejare",">",$valE-$tel*$valE/100)->where("ejare","<",$valE+$tel*$valE/100)->where("rahn",">",$valR-$tel*$valR/100)->where("rahn","<",$valR+$tel*$valR/100)->get();
                break;
            case 6:
                $files = File::where("name",$request->input('valStr'))->orWhere('lastname',$request->input('valStr'))->get();
                break;
            case 7:
                $files = File::where("buildingType",$request->input("buildingType"))->get();
                break;
            case 8:
                $files = File::where("region",$request->input("region"))->get();
                break;
            case 9:
                $files = File::where("floor",$request->input("valNum"))->get();
                break;
            case 10:
                $val = $request->input("valNum");
                $files = File::where("area",">",$val-$tel*$val/100)->where("area","<",$val+$tel*$val/100)->get();
                break;
            case 11:
                $val = $request->input("valNum");
                $files = File::where("age",">",$val-$tel*$val/100)->where("age","<",$val+$tel*$val/100)->get();
                break;
            case 12:
                $files = File::where("unit",$request->input("valNum"))->get();
                break;
            case 13:
                $files = File::where("bedroom",$request->input("valNum"))->get();
                break;
            case 14:
                $files = File::where("addressPu","LIKE",'%'.$request->input("valStr").'%')->orWhere("addressPv","LIKE",'%'.$request->input("valStr").'%')->get();
                break;
            case 15:
                $files = File::where("phonenumber",$request->input("valStr"))->get();
                break;
            case 16:
                $input = $request->input("valStr");
                $files = File::where("user_id",Agent::where("name",$input)->orWhere("lastname",$input)->orWhere("phonenumber",$input)->firstOrfail()->id())->get();
                break;
        }
        return view('Admin.files.all', compact('files'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Receive;
use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class ReceiveController extends Controller
{
    public function index(int $id){
        $receives = Receive::where('type',$id)->get();
        return view('Admin.received.all',compact('receives'));
    }
    public function edit(int $id){
        $r = Receive::where('type',1)->where('id',$id)->firstOrFail()->toArray();
        $file = new File($r);
        $file["addressPv"] = $r["address"];
        return view("Admin.received.edit",compact("file","id"));
    }
    public function register(FileRequest $request){
        $file = new File($request->all());
        $code = 111111;
        $id = $request['receiveId'];
        $latest = File::orderBy('created_at', 'desc')->first();
        if($latest != null)
            $code = ($latest->code)+1;
        $file['code'] = $code;
        $file['user_id'] = 0;
        $file->save();
        return redirect()->route("removeReceived",$id);
    }
    public function show(int $id){
        $receive = Receive::where('id',$id)->firstOrFail();
        return view('Admin.received.show',compact("receive"));
    }
    public function destroy(int $r){
        $type = 1;
        try {
            $rec = Receive::where("id",$r)->firstOrFail();
            $type = $rec->type;
            $rec->delete();
        } catch (\Exception $e) {
            abort(404);
        }
        return redirect()->route("received",['mode'=>$type]);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexsurvey()
    {
        $survey = Survey::latest()->paginate(20);
        return view("Admin.survey.all",compact("survey"));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showsurvey(Survey $survey)
    {
        return view("Admin.survey.show",compact("survey"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroysurvey(Survey $survey)
    {
        Survey::where("id",$survey->id)->delete();
        return redirect()->route("survey.index");
    }
}

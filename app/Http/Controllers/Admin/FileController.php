<?php

namespace App\Http\Controllers\Admin;

use App\File;
use App\Http\Controllers\Controller;
//<<<<<<< HEAD
use App\Http\Requests\FileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
//=======
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
//use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
//>>>>>>> 54bb88ac03d4192cac2ae4b497c8ca8ae44762d1

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $files = File::latest()->paginate(20);
        return view('Admin.files.all', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param  FileRequest  $request
     * @return RedirectResponse|Redirector
=======
//     * @param Request $request
//     * @return Response
>>>>>>> 54bb88ac03d4192cac2ae4b497c8ca8ae44762d1
     */
    public function store(FileRequest $request)
    {
//        File::create($request->all());
        return redirect(route('files.index'));
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
     * @param File $file
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit($file)
    {
        //if you are agent, you can't access to this route
        $this->authorize('admin_permissions');

        return view('Admin.files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param File $file
     * @return Response
     * @throws AuthorizationException
     */
    public function destroy($file)
    {
        $this->authorize('admin_permissions');

        $file->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use app\http\Controllers\Controller;
use App\Models\project;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::all();

        return view("admin.projects.index", compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprojectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprojectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        return view("admin.projects.show", compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojectRequest  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojectRequest $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Appartment;
use Illuminate\Support\Facades\Input;

class AppartmentController extends Controller
{
    public function index()
    {
        $list_obj = Appartment::all();
        return view('appartment.client.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Appartment();
        $obj->name = Input::get('name');
        $obj->author = Input::get('address');
        $obj->content = Input::get('price');
        $obj->images = Input::get('information');
        $obj->images = Input::get('detail');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/client/appartment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Appartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('appartment.client.list')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Appartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.article.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Appartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->author = Input::get('author');
        $obj->content = Input::get('content');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Appartment::find($id);
        if ($obj == null) {
            return response('article not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormMultipleUpload;
use Auth;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        // if($user->leeftijd == $data->leeftijdsverificatie && $user->leeftijd == "true") {
        $data = FormMultipleUpload::all();
        return view('home', compact('data'));
        // }
    }

    public function formUpload()
    {
        $data = FormMultipleUpload::all();
        return view ('form_upload', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);  // your folder path
                $data[] = $name;  
            }
        }
        $user = Auth::user();
        $Upload_model = new FormMultipleUpload;
        $Upload_model->UserId = $user->id;
        $Upload_model->titel = request('titel');
        $Upload_model->omschrijving = request('omschrijving');
        $Upload_model->categorie = request('categorie');
        $Upload_model->leeftijdverificatie = request('leeftijd');
        $Upload_model->filename = json_encode($data);
        $Upload_model->save();
        return back()->with('success', 'Your images has been upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
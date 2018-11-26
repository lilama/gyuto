<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pageimage;
use App\Models\Imagegalery;

// Façade Image de intervention image
use Image; 

class PageimagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageimages = Pageimage::orderBy('updated_at', 'desc')->paginate(5);
        return view('pageimages.index')->with('pageimages', $pageimages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theimages = Imagegalery::orderBy('updated_at', 'desc')->paginate(20);
        return view('pageimages.create', compact('theimages'));
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
            'titleFr' => 'required',
            'titleEn' => 'required' ,
            'galery' => 'required' ,
            'legendFr' => 'required' ,
            'legendEn' => 'required' ,
        ]);

        $pageimage = new Pageimage;
        $pageimage->titleFr = $request->input('titleFr');
        $pageimage->titleEn = $request->input('titleEn');
        $pageimage->galery = $request->input('galery');
        $pageimage->legendFr = $request->input('legendFr');
        $pageimage->legendEn = $request->input('legendEn');

        if ($request->hasFile('featuredImage')) {
            $myImage = $request->file('featuredImage');
            $filename = time() . '.' . $myImage->getClientOriginalExtension();
            $location = public_path('myimages/' . $filename);
            Image::make($myImage)->resize(800,400)->save($location);

            $pageimage->image = $filename; 
        }

        $pageimage->save();        

        return redirect('/pageimages')->with('success', 'Votre image a été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pageimage = Pageimage::find($id);
        return view('pageimages.show')->with('pageimage', $pageimage);
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

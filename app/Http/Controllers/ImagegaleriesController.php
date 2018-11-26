<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagegalery;
use Image;

class ImagegaleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theimages = Imagegalery::get();
        return view('imagegaleries.index', compact('theimages'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titleFr' => 'required',
            'titleEn' => 'required',
            'legendFr' => 'required',
            'legendEn' => 'required',
            'nameImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $theimage = new Imagegalery;
        $theimage->titleFr = $request->input('titleFr');
        $theimage->titleEn = $request->input('titleEn');
        $theimage->legendFr = $request->input('legendFr');
        $theimage->legendEn = $request->input('legendEn');
        $theimage->nameImage = $request->input('nameImage');

        if ($request->hasFile('nameImage')) {
            $myImage = $request->file('nameImage');
            $filename = time() . '.' . $myImage->getClientOriginalExtension();
            $location = public_path('myimages/' . $filename);
            Image::make($myImage)->resize(800,400)->save($location);

            $theimage->nameImage = $filename;
        }

        $theimage->save();
        // Imagegalery::create($theimage);

        return back()
                ->with('success', 'Image uploaded successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theimage = Imagegalery::find($id);
        return view('imagegaleries.index')->with('theimage', $theimage);
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
        Imagegalery::find($id)->delete();
        return back()
                ->with('success', 'Image removed successfully !');
    }
}

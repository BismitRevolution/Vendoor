<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Tag;
use App\Media;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = DB::table('vendors')
                        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
                        ->join('categories', 'vendors.category_id', '=', 'categories.category_id')
                        ->get();

        foreach ($vendors as $vendor) {
            $vendor->tags = DB::table('tags')
                                ->where('tags.vendor_id', '=', $vendor->vendor_id)
                                ->get();
        }
        return view('vendors.index')->with(['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = DB::table('locations')->get();
        $categories = DB::table('categories')->get();

        return view('vendors.create')->with(['locations' => $locations, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|max:255',
            'description'   => 'required',
            'address'       => 'required',
            'location_id'   => 'required',
            'category_id'   => 'required',
            'email'         => 'required|email|max:255',
            'phone'         => 'required',
            'website'       => 'required'
        ]);

        $vendor = new Vendor;

        $vendor->name = $request->name;
        $vendor->description = $request->description;
        $vendor->address = $request->address;
        $vendor->location_id = $request->location_id;
        $vendor->category_id = $request->category_id;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->website = $request->website;
        $vendor->save();

        for ($i=0; $i < 100; $i++) {
            $tag = new Tag;
            $tag->name = $request->tagn;
        }

        $counter = 1;
        $var = 'tags' . $counter;

        while (null !== $request->input($var)) {
            $tag = new Tag;
            $tag->name = $request->input($var);
            $tag->vendor_id = $vendor->vendor_id;
            $tag->save();
            $counter += 1;
            $var = 'tags' . $counter;
        }

        $files = $request->file('media');

        if($request->hasFile('media')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$vendor->vendor_id
                );
                $media = new Media;
                $media->path = $path;
                $media->vendor_id = $vendor->vendor_id;
                $media->save();
            }
        }

        return redirect()->route('admin.vendors.show', $vendor->vendor_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $vendor = DB::table('vendors')
                        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
                        ->join('categories', 'vendors.category_id', '=', 'categories.category_id')
                        ->where('vendors.vendor_id', '=', $id)
                        ->first();

        return view('vendors.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = DB::table('vendors')
                        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
                        ->join('categories', 'vendors.category_id', '=', 'categories.category_id')
                        ->where('vendors.vendor_id', '=', $id)
                        ->first();

        $locations = DB::table('locations')->get();
        $categories = DB::table('categories')->get();

        return view('vendors.edit')->with(['vendor' => $vendor, 'locations' => $locations, 'categories' => $categories]);
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
        $this->validate($request, array(
            'name'          => 'required|max:255',
            'description'   => 'required',
            'address'       => 'required',
            'location_id'   => 'required',
            'category_id'   => 'required',
            'email'         => 'required|email|max:255',
            'phone'         => 'required',
            'website'       => 'required'
        ));


        $vendor = Vendor::find($id);

        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        $vendor->address = $request->input('address');
        $vendor->location_id = $request->input('location_id');
        $vendor->category_id = $request->input('category_id');
        $vendor->email = $request->input('email');
        $vendor->phone = $request->input('phone');
        $vendor->website = $request->input('website');

        $vendor->save();

        return redirect()->route('admin.vendors.show', $vendor->vendor_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = DB::table('vendors')->where('vendor_id', $id);
        $tag = DB::table('tags')->where('vendor_id', $id);
        $media = DB::table('media')->where('vendor_id', $id);

        $tag->delete();
        $media->delete();
        $post->delete();

        return redirect()->route('admin.vendors.index');
    }
}

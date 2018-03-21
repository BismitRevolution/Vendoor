<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
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

        return view('vendors.index')->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'          => 'required|max:255',
            'description'   => 'required',
            'address'       => 'required',
            'location_id'   => 'required',
            'category_id'   => 'required'
        ));


        $vendor = new Vendor;

        $vendor->name = $request->name;
        $vendor->description = $request->description;
        $vendor->address = $request->address;
        $vendor->location_id = $request->location_id;
        $vendor->category_id = $request->category_id;
        
        $vendor->save();

        return redirect()->route('vendors.show', $vendor->vendor_id);
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

        return view('vendors.edit')->with('vendor', $vendor);
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
            'category_id'   => 'required'
        ));


        $vendor = Vendor::find($id);

        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        $vendor->address = $request->input('address');
        $vendor->location_id = $request->input('location_id');
        $vendor->category_id = $request->input('category_id');
        
        $vendor->save();

        return redirect()->route('vendors.show', $vendor->vendor_id);
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

        $post->delete();

        return redirect()->route('vendors.index');
    }
}

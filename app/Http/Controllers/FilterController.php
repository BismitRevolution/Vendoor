<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Tag;
use App\Category;
use App\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vendors = DB::table('vendors')
                        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
                        ->join('categories', 'vendors.category_id', '=', 'categories.category_id')
                        ->get();

        return view('pages.explore')->with('vendors', $vendors);
    }

    public static function toArray($array) {
        $result = array();
        foreach ($array as $item) {
            array_push($result, $item->vendor_id);
        }
        return $result;
    }

    public function search(Request $request) {

        $result = DB::table('vendors')
        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
        ->join('categories', 'vendors.category_id', '=', 'categories.category_id');

        if (null !== $request->input('key')) {
            $key = $request->input('key');
            $vendors = DB::table('vendors')
            ->select('vendors.vendor_id')
            ->where('vendors.name', 'like', '%'.$key.'%')
            ->orWhere('vendors.description', 'like', '%'.$key.'%')
            ->orWhere('vendors.address', 'like', '%'.$key.'%')
            ->orWhere('vendors.website', 'like', '%'.$key.'%')
            ->distinct()
            ->get()->toArray();
            // dd($vendors);
            $tags = DB::table('tags')
            ->select('tags.vendor_id')
            ->where('tags.tag_name', 'like', '%'.$key.'%')
            ->distinct()
            ->get()->toArray();
            // dd($tags);

            $result = $result->whereIn('vendors.vendor_id', self::toArray($vendors + $tags));
        }

        if (null !== $request->input('cat_key')) {
            $cat_key = $request->input('cat_key');
            $result = $result->where('vendors.category_id', '=', $cat_key);
            // dd($cat_key);
        }
        if (null !== $request->input('loc_key')) {
            $loc_key = $request->input('loc_key');
            $result = $result->where('vendors.location_id', '=', $loc_key);
            // dd($loc_key);
        }

        $result = $result->get();

        foreach ($result as $item) {
            $item->tags = DB::table('tags')
                                ->where('tags.vendor_id', '=', $item->vendor_id)
                                ->get();
        }
        // dd($result);

        if (null !== $request->input('key')) {
            $key = $request->input('key');
            $result->current_key = $key;
        }
        if (null !== $request->input('cat_key')) {
            $cat_key = $request->input('cat_key');
            $result->current_cat = $cat_key;
            // dd($cat_key);
        }
        if (null !== $request->input('loc_key')) {
            $loc_key = $request->input('loc_key');
            $result->current_loc = $loc_key;
            // dd($loc_key);
        }

        $category = Category::all();
        $location = Location::all();

        return view('pages.explore')
            ->with('vendors', $result)
            ->with('categories', $category)
            ->with('locations', $location);
    }
}

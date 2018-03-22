<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Tag;
use Illuminate\Support\Facades\DB;

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
        $result = DB::table('vendors')
                        ->join('locations', 'vendors.location_id', '=', 'locations.location_id')
                        ->join('categories', 'vendors.category_id', '=', 'categories.category_id')
                        // Combine query
                        ->whereIn('vendors.vendor_id', self::toArray($vendors + $tags))
                        ->get();

        foreach ($result as $item) {
            $item->tags = DB::table('tags')
                                ->where('tags.vendor_id', '=', $item->vendor_id)
                                ->get();
        }
        // dd($result);
        return view('pages.explore')->with('vendors', $result);
    }
}

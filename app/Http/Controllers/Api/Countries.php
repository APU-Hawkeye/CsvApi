<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Countries extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $countries = \App\Models\Countries::all();

        return response()->json([
            'countries' => $countries
        ], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function view(Request $request)
    {
        $query = \App\Models\Countries::all();
        if ($request->name) {
            $query->where('common_name', 'LIKE', '%'.$request->name.'%');
        }

        return response()->json([
            'message' => 'Country fetched successfully',
            'country' => $query
        ], 200);
    }

    /**
     * @param $param
     * @return mixed
     */
    public function searchByName($param)
    {
        $country = \App\Models\Countries::where('common_name', $param)->get();

        return $country;
    }
}

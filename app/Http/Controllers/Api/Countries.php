<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

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
     * @param $param
     * @return mixed
     */
    public function searchByName($param)
    {
        $country = \App\Models\Countries::where('common_name', 'LIKE', '%'.$param.'%')->get();

        return $country;
    }
}

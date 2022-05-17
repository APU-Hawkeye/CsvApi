<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class Currencies extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $currencies = \App\Models\Currencies::all();

        return response()->json([
            'currencies' => $currencies
        ], 200);
    }

    /**
     * @param $param
     * @return mixed
     */
    public function searchByName($param)
    {
        $currency = \App\Models\Currencies::where('common_name', 'LIKE', '%'.$param.'%')->get();

        return $currency;
    }
}

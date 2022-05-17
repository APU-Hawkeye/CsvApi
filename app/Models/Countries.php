<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'continent_code',
        'currency_code',
        'iso2_code',
        'iso3_code',
        'iso_numeric_code',
        'fips_code',
        'calling_code',
        'common_name',
        'official_name',
        'endonym',
        'demonym',
        'created',
    ];
}

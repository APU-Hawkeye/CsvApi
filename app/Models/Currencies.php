<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'iso_code',
        'iso_numeric_code',
        'common_name',
        'official_name',
        'symbol',
        'created',
    ];
}

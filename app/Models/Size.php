<?php

namespace App\Models;

use App\Http\Controllers\ClotheController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'clothe_id',
        'stock',
        'type_size_id',
    ];

    public function clothes()
    {
        return $this->hasMany(Clothe::class);
    }
}

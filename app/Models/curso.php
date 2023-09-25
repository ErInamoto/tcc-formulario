<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class curso extends Model
{
    use HasFactory;
    protected $table = 'curso';
    public $timestamps = false;

    public function avaliacao(): HasMany
    {
        return $this->hasMany(avaliacao::class, 'id');
    }
}




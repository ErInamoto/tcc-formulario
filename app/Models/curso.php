<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso';
    public $timestamps = false;

    public function avaliacoes(): HasMany
    {
        return $this->hasMany(Avaliacao::class, 'id_curso');
    }

}




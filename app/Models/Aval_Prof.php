<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Aval_Prof extends Model
{
    use HasFactory;
    protected $table = 'avaliacao_professor';
    public $timestamps = false;

    public function tcc(): BelongsTo
    {
        return $this->belongsTo(TCC::class, 'id_tcc');
    }
}

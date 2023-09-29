<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class TCC extends Model
{
    use HasFactory;
    protected $table = 'tcc';

    public function avaliacoes(): HasMany
    {
        return $this->hasMany(Avaliacao::class, 'id_tcc');
        
    }

    public function avaliacoes_prof(): HasMany
    {
        return $this->hasMany(Aval_Prof::class, 'id_tcc');
        
    }
    
}

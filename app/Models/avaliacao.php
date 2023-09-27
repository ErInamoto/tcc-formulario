<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Avaliacao extends Model
{
    use HasFactory;
    protected $table = 'avaliacao';
    public $timestamps = false;

    public function curso(): BelongsTo
{
	return $this->belongsTo(Curso::class, 'id_curso');
}

    public function tcc(): BelongsTo
{
    return $this->belongsTo(TCC::class, 'id_tcc');
}
}

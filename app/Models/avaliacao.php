<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class avaliacao extends Model
{
    use HasFactory;
    protected $table = 'avaliacao';
    public $timestamps = false;

    public function curso(): BelongsTo
{
	return $this->belongsTo(curso::class, 'id_curso');
}
}

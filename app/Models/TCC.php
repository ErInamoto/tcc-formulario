<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

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

    public function porcentagemInclusivo() {
        return round($this->avaliacoes->where("inclusivo", "=", 1)->count() / $this->avaliacoes->count() *100,1);
    }

    public function porcentagemSustentabilidade() {
        return round($this->avaliacoes->where("sustentavel", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemStartup(){
        return round($this->avaliacoes->where("startup", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemPratico(){
        return round($this->avaliacoes->where("pratico", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemViavel(){
        return round($this->avaliacoes->where("viavel", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemBenefico(){
        return round($this->avaliacoes->where("benefico", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemTecnologico(){
        return round($this->avaliacoes->where("tecnologico", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemIncompleto(){
        return round($this->avaliacoes->where("incompleto", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemInviavel(){
        return round($this->avaliacoes->where("inviavel", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemCaro(){
        return round($this->avaliacoes->where("caro", "=", 1)->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemOralMB(){
        return round($this->avaliacoes->where("comunicacao", "=", "MB")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemOralB(){
        return round($this->avaliacoes->where("comunicacao", "=", "B")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemOralR(){
        return round($this->avaliacoes->where("comunicacao", "=", "R")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemOralI(){
        return round($this->avaliacoes->where("comunicacao", "=", "I")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemEscritaMB(){
        return round($this->avaliacoes->where("escrita", "=", "MB")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemEscritaB(){
        return round($this->avaliacoes->where("escrita", "=", "B")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemEscritaR(){
        return round($this->avaliacoes->where("escrita", "=", "R")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemEscritaI(){
        return round($this->avaliacoes->where("escrita", "=", "I")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemAvaliacaoMB(){
        return round($this->avaliacoes->where("avaliacao", "=", "MB")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemAvaliacaoB(){
        return round($this->avaliacoes->where("avaliacao", "=", "B")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemAvaliacaoR(){
        return round($this->avaliacoes->where("avaliacao", "=", "R")->count() / $this->avaliacoes->count()*100,1);
    }

    public function porcentagemAvaliacaoI(){
        return round($this->avaliacoes->where("avaliacao", "=", "I")->count() / $this->avaliacoes->count()*100,1);
    }
}

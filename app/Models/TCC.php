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

    public function prof(): HasMany
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

    public function prctComProfMB(){
        return round($this->prof->where("comunicacao", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctComProfB(){
        return round($this->prof->where("comunicacao", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctComProfR(){
        return round($this->prof->where("comunicacao", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctComProfI(){
        return round($this->prof->where("comunicacao", "=", "I")->count()*100 / ($this->prof->count()),1);
    }

    public function prctHabProfMB(){
        return round($this->prof->where("habilidades", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctHabProfB(){
        return round($this->prof->where("habilidades", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctHabProfR(){
        return round($this->prof->where("habilidades", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctHabProfI(){
        return round($this->prof->where("habilidades", "=", "I")->count()*100 / ($this->prof->count()),1);
    }

    public function prctCriProfMB(){
        return round($this->prof->where("criatividade", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctCriProfB(){
        return round($this->prof->where("criatividade", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctCriProfR(){
        return round($this->prof->where("criatividade", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctCriProfI(){
        return round($this->prof->where("criatividade", "=", "I")->count()*100 / ($this->prof->count()),1);
    }

    public function prctDinProfMB(){
        return round($this->prof->where("dinamica", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctDinProfB(){
        return round($this->prof->where("dinamica", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctDinProfR(){
        return round($this->prof->where("dinamica", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctDinProfI(){
        return round($this->prof->where("dinamica", "=", "I")->count()*100 / ($this->prof->count()),1);
    }
    
    public function prctEscProfMB(){
        return round($this->prof->where("escrita", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctEscProfB(){
        return round($this->prof->where("escrita", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctEscProfR(){
        return round($this->prof->where("escrita", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctEscProfI(){
        return round($this->prof->where("escrita", "=", "I")->count()*100 / ($this->prof->count()),1);
    }

        
    public function prctAvalProfMB(){
        return round($this->prof->where("avaliacao", "=", "MB")->count()*100 / ($this->prof->count()),1);
    }

    public function prctAvalProfB(){
        return round($this->prof->where("avaliacao", "=", "B")->count()*100 / ($this->prof->count()),1);
    }

    public function prctAvalProfR(){
        return round($this->prof->where("avaliacao", "=", "R")->count()*100 / ($this->prof->count()),1);
    }

    public function prctAvalProfI(){
        return round($this->prof->where("avaliacao", "=", "I")->count()*100 / ($this->prof->count()),1);
    }
}

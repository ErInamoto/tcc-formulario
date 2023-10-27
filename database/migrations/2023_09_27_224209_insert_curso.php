<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        insert into curso (nome)
        values ('Administração'), ('Contabilidade'), ('Desenvolvimento de Sistemas'), ('Enfermagem'), ('ETIM Administração'), ('ETIM Desenvolvimento de Sistemas'), ('Informática'), ('Logística'), ('Segurança do Trabalho'), ('Serviços Jurídicos'), ('Visitante');
        ");
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement(("
        delete from curso;
        "));
    }
};

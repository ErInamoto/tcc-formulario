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
        CREATE TABLE tcc (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL  
        );
        ");

        DB::statement("
        CREATE TABLE curso(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL
            );
        ");

        DB::statement("
        CREATE TABLE avaliacao_professor(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            professor VARCHAR(100) NOT NULL,
            id_tcc INT NOT NULL,
            comunicacao VARCHAR(2) NOT NULL,
            habilidades VARCHAR(2) NOT NULL,
            criatividade VARCHAR(2) NOT NULL,
            dinamica VARCHAR(2) NOT NULL,
            escrita VARCHAR(2) NOT NULL,
            avaliacao VARCHAR(2) NOT NULL,
            canvas INT NOT NULL,
            impacto INT NOT NULL,
            inclusao INT NOT NULL,
            startup INT NOT NULL,
            feteps INT,
            inova INT,
            workshop,
            outro VARCHAR(100),
            coment_tcc VARCHAR(100),
            coment_mostra VARCHAR(100),
            FOREIGN KEY (id_tcc) REFERENCES tcc(id)
            );
        ");

        DB::statement("
        CREATE TABLE avaliacao(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            id_tcc INT NOT NULL,
            nome VARCHAR(100) NOT NULL,
            id_curso int NOT NULL,
            modulo INT NOT NULL,
            apresentacao INT NOT NULL,
            stand INT NOT NULL,
            pratico INT ,
            viavel INT ,
            favoravel INT ,
            tecnologico INT,
            pontos_fortes VARCHAR(300),
            incompleto INT,
            inviavel INT ,
            caro INT ,
            pontos_fracos VARCHAR(300),
            inclusivo INT NOT NULL,
            sustentavel INT NOT NULL,
            startup INT NOT NULL,
            comunicacao VARCHAR(2) NOT NULL,
            escrita VARCHAR(2) NOT NULL,
            avaliacao VARCHAR(2) NOT NULL,
            coment_tcc VARCHAR(300),
            coment_mostra VARCHAR(300),
            FOREIGN KEY (id_tcc) REFERENCES tcc(id),
            FOREIGN KEY (id_curso) REFERENCES curso(id)
            );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("
            DROP TABLE IF EXISTS avaliacao
        ");

        DB::statement("
            DROP TABLE IF EXISTS avaliacao_professor
        ");

        DB::statement("
            DROP TABLE IF EXISTS curso
        ");

        DB::statement("
            DROP TABLE IF EXISTS tcc
        ");
    }
};

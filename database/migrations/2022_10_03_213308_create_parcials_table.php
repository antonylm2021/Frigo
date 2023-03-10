<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcials', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor',19,2);
            $table->date('data');
            $table->String('usuario',100)->nullable()->default(NULL);
            $table->integer('id_original')->nullable()->default(NULL);
            $table->string('conta',200)->nullable()->default(NULL);
            $table->string('pessoa',100)->nullable()->default(NULL);
            $table->integer('CodEmpresa')->nullable()->default(NULL);
            $table->string('descricao',200)->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcials');
    }
};

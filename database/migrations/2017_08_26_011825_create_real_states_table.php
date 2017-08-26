<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company', 1000)->comment('Razão Social');
            $table->string('trading_name', 1000)->comment('Nome Fantasia');
            $table->string('cnpj')->unique();
            $table->string('creci')->unique();
            $table->string('phone_number');
            $table->string('phone_number2')->nullable();
            $table->string('responsable');
            $table->string('responsable_email');
            $table->index(['cnpj','creci']);
            $table->primary('id');
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
        Schema::dropIfExists('real_states');
    }
}

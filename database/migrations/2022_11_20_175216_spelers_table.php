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
        Schema::create('spelers', function (Blueprint $table) {
            $table->integer("spelerID", autoIncrement: true, unsigned: true);
            $table->string('naam', 20)->nullable(false)->unique();
            $table->string('nationaliteit', 50)->nullable(false);
            $table->string('marketwaarde', 500)->nullable(false);
            $table->string('sterkebeen', 50)->nullable(false);
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
        //
    }
};

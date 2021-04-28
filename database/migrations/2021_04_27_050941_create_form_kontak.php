<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormKontak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_kontak', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('nama');
			$table->text('alamat');
            $table->bigInteger('wa');
            $table->text('kritik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_kontak');
    }
}

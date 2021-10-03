<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('images',255);
            $table->string('full_name',50);
            $table->string('place',50);
            $table->date('date_of_birth');
            $table->string('gender',20);
            $table->string('last_education',100);
            $table->string('number_phone',16);
            $table->string('address',255);
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
        Schema::dropIfExists('profil_users');
    }
}

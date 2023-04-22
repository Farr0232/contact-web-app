<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('contacts')->insert([
            [
                'id' => 1,
                'first_name' => "Fred",
                'last_name' => "Flintstone",
                'email' => "fred@bedrock.com"
            ],
            [
                'id' => 2,
                'first_name' => "Barney",
                'last_name' => "Rubble",
                'email' => "barney@bedrock.com"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

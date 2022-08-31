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
        Schema::create('user_states', function (Blueprint $table) {
            $table->id();
            $table->string('user_state');
            $table->integer('user_level');
            $table->timestamps();
        });

        DB::table('user_states')->insert(
            array(
                [
                    'user_state' => 'Admin',
                    'user_level' => 1
                ],
                [
                    'user_state' => 'Lite admin',
                    'user_level' => 2
                ],
                [
                    'user_state' => 'Superuser',
                    'user_level' => 3
                ],
                [
                    'user_state' => 'Financial',
                    'user_level' => 4
                ],
                [
                    'user_state' => 'Internal',
                    'user_level' => 5
                ],
                [
                    'user_state' => 'External',
                    'user_level' => 6
                ]
            )
                );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_states');
    }
};

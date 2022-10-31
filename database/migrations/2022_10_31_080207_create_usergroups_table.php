<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user_groups", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table
                ->foreignId("user_role")
                ->references("id")
                ->on("user_roles");
            $table->timestamps();
        });

        DB::table("user_groups")->insert([
            [
                "name" => "administrators",
                "user_role" => 1,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("user_groups");
    }
};

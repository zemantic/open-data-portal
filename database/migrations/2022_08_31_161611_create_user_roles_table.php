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
        Schema::create("user_roles", function (Blueprint $table) {
            $table->id();
            $table->string("user_role");
            $table->timestamps();
        });

        DB::table("user_roles")->insert([
            [
                "user_role" => "Administrator",
            ],
            [
                "user_role" => "Moderator",
            ],
            [
                "user_role" => "User",
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
        Schema::table("users", function (Blueprint $table) {
            $table->dropForeign("users_user_role_foreign");
        });
        Schema::dropIfExists("user_roles");
    }
};

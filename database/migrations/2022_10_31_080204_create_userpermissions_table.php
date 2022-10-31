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
        Schema::create("user_permissions", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("user_role_id")
                ->references("id")
                ->on("user_roles");
            $table->string("resource");
            $table->boolean("create");
            $table->boolean("update");
            $table->boolean("read");
            $table->boolean("delete");
            $table->timestamps();
        });

        DB::table("user_permissions")->insert([
            [
                "user_role_id" => 1,
                "resource" => "organization",
                "create" => true,
                "update" => true,
                "read" => true,
                "delete" => true,
            ],
            [
                "user_role_id" => 1,
                "resource" => "dataset",
                "create" => true,
                "update" => true,
                "read" => true,
                "delete" => true,
            ],
            [
                "user_role_id" => 1,
                "resouce" => "user",
                "create" => true,
                "update" => true,
                "read" => true,
                "delete" => true,
            ],
            [
                "user_role_id" => 1,
                "resource" => "user_group",
                "create" => true,
                "update" => true,
                "read" => true,
                "delete" => true,
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
        Schema::dropIfExists("user_permissions");
    }
};

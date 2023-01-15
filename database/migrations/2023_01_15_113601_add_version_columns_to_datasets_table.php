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
        Schema::table("datasets", function (Blueprint $table) {
            //
            $table->decimal("user_version")->nullable();
            $table->decimal("system_version")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("datasets", function (Blueprint $table) {
            //
            $table->dropColumn("user_version");
            $table->dropColumn("system_version");
        });
    }
};

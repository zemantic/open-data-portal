<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Country;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("countries", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("al2code");
            $table->string("al3code");
            $table->float("lat", 8, 4);
            $table->float("lng", 8, 4);
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
        Schema::dropIfExists("countries");
    }
};

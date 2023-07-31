<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("about")->nullable();
            $table->integer("rating")->unsigned()->default(0);
            
            $table->unsignedBigInteger("photo_id");
            $table->foreign("photo_id")->references("id")->on("files");
            
            $table->unsignedBigInteger("genre_id");
            $table->foreign("genre_id")->references("id")->on("genres");

            $table->float("duration_in_hours");
            $table->integer("age_limit")->unsigned();

            $table->string("country")->nullable();
            $table->string("platform")->nullable();
            $table->date("released_at")->nullable();

            $table->boolean("is_active")->default(false);
            $table->date("start_active_dt");
            $table->date("end_active_dt");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->longtext('image');
            $table->string('service_name');
            $table->text('service_detail');
            $table->boolean('status');
            $table->boolean('feature');
            $table->double('price', 10, 2);
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

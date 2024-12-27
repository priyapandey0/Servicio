<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuration', function (Blueprint $table) {
            $table->id();
            $table->longtext('logo');
            $table->longtext('favicon');
            $table->text('title');
            $table->text('logo_alternative_text');
            $table->string('contact_email');
            $table->string('sales_email');
            $table->string('service_email');
            $table->string('contact_number');
            $table->string('address');
            $table->string('facebook_page_link');
            $table->string('instagram_page_link');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->string('meta_keywords');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('configuration');
    }
};


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('company_id');
            $table->string('name_en', 300);
            $table->string('name_uz', 300);
            $table->string('name_ru', 300);
            $table->string('service_en', 300);
            $table->string('service_uz', 300);
            $table->string('service_ru', 300);
            $table->string('slug_en', 300)->unique()->nullable();
            $table->longText('desc_en');
            $table->longText('desc_uz');
            $table->longText('desc_ru');
            $table->enum('status', ["active","not"]);
            $table->string('image', 300);
            $table->string('web')->nullable();
            $table->string('email', 100)->nullable();
            $table->char('phone', 20);
            $table->string('address_en');
            $table->string('address_uz');
            $table->string('address_ru');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}

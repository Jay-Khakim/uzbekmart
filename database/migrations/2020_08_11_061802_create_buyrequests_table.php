<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyrequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name_en', 300);
            $table->string('name_uz', 300);
            $table->string('name_ru', 300);
            $table->string('email', 100);
            $table->string('company_en', 200);
            $table->string('company_uz', 200);
            $table->string('company_ru', 200);
            $table->longText('wants_en');
            $table->longText('wants_ru');
            $table->longText('wants_uz');
            $table->char('amount_en', 40);
            $table->char('amount_ru', 40);
            $table->char('amount_uz', 40);
            $table->string('image', 300);
            $table->softDeletes();
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
        Schema::dropIfExists('buyrequests');
    }
}

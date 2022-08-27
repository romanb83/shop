<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('header');   //Заголовок(тема) объявления
            $table->string('slug');     // Слаг
            $table->text('content');    // Текст объявления
            $table->unsignedDecimal('phone', 20, 0);    // Телефон

            $table->string('link');     //  Ссылка куда то
            $table->date('expire_date');    // Дата истечения объявления
            $table->boolean('paid');    // Оплачено или нет
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}

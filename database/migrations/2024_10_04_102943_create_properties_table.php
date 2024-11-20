<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Автозбільшення ID
            $table->unsignedBigInteger('property_type_id')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->text('description');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('square_footage');
            $table->decimal('price', 10, 2); // Десяткове поле для ціни
            $table->boolean('is_renovated')->default(false);
            $table->enum('condition', ['Excellent', 'Good', 'Fair', 'Poor']); // Перелічуваний тип для стану
            $table->enum('availability', ['Available', 'Unavailable', 'Under Contract']); // Перелічуваний тип для доступності

            $table->string('image')->nullable(); // Текстове поле для шляху до зображення
            $table->timestamps(); // Додає стовпці Ⓝcreated_atⓃ і Ⓝupdated_atⓃ

            // Зв'язки з іншими таблицями
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

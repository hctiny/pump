<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name', 50);
            $table->text('introduce');
            $table->string('images');
            $table->unsignedTinyInteger('is_command');
            $table->unsignedTinyInteger('is_show');
            $table->string('version', 50);
            $table->text('use_desc');
            $table->text('version_desc');
            $table->text('main_tech_param');
            $table->string('buy_url');
            $table->string('unit', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

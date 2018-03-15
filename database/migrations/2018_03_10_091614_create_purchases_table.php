<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('goods_type');      // 采购的物品类型：零配件、其他
            $table->string('goods');                        // 采购的物品：零配件ID、物品名称
            $table->decimal('price', 18, 2);
            $table->unsignedInteger('amount');
            $table->unsignedTinyInteger('state');
            $table->timestamp('settlement_time')->nullable();
            $table->unsignedInteger('settlement_user_id')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}

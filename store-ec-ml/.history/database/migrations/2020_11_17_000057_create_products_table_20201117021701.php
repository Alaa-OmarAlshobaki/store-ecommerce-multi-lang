<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->decimal('price', 18, 4)->unsigned();
            $table->decimal('special_price', 18, 4)->unsigned()->nullable();
            $table->string('special_price_type')->nullable()->after('special_price');
            $table->date('special_price_start')->nullable();
            $table->date('special_price_end')->nullable();
            $table->decimal('selling_price', 18, 4)->unsigned()->nullable()->default(123.45);
            $table->string('sku')->nullable();
            $table->boolean('mange_stock');
            $table->bigInteger('qty')->nullable();
            $table->boolean('in_stock');
            $table->unsignedBigInteger('viewed');
            $table->boolean('is_active');
            $table->unsignedBigInteger('brand_id')->nullable()->after('id');
            $table->foreign('brand_id')->refern
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
        Schema::dropIfExists('products');
    }
}

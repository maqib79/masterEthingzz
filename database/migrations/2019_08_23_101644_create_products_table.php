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
            $table->bigIncrements('id');
            $table->string('ProductName');
            $table->integer('ProductPrice');
            $table->string('ProductTag');
            $table->string('ProductSKU');
            $table->integer('ProductInstock');
            $table->integer('ProductQuantity');
            $table->text('ProductDesc');
            $table->text('ProductLongDesc');
            $table->string('ProductCustomLink');
            $table->string('ProductMTitle');
            $table->text('ProductMDesc');
            $table->string('ProductBrand',35);
            $table->string('ProductWarranty');
            $table->string('ProductIndex',10);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
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

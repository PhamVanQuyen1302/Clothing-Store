<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('tên sản phẩm');
            $table->unsignedInteger('quantity')->comment('số lượng sản phẩm');
            $table->decimal('price', 10, 2)->comment('giá sản phẩm');
            $table->decimal('promotional_price', 10, 2)->nullable()->comment('giá khuyến mại sản phẩm');
            $table->date('date')->comment('ngày nhập');
            $table->text('description')->nullable()->comment('mô tả sản phẩm');
            $table->unsignedBigInteger('category_id')->comment('id danh mục');
            $table->tinyInteger('status')->default(1)->comment('trạng thái sản phẩm');
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

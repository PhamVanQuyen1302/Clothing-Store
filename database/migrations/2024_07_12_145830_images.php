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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->unsignedBigInteger('product_id'); // ID của sản phẩm
            $table->string('link_image'); // Đường dẫn ảnh
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'

            // Tạo khóa ngoại cho 'san_pham_id' tham chiếu đến cột 'id' của bảng 'tb_san_pham'
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

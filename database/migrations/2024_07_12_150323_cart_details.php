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
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->unsignedBigInteger('cart_id'); // ID của giỏ hàng
            $table->unsignedBigInteger('product_id'); // ID của sản phẩm
            $table->integer('quantity'); // Số lượng sản phẩm trong giỏ hàng

            // Tạo khóa ngoại cho 'gio_hang_id' tham chiếu đến cột 'id' của bảng 'tb_gio_hang'
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            
            // Tạo khóa ngoại cho 'san_pham_id' tham chiếu đến cột 'id' của bảng 'tb_san_pham'
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_details');
    }
};

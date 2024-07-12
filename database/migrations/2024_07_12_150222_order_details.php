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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->unsignedBigInteger('order_id'); // ID của đơn hàng
            $table->unsignedBigInteger('product_id'); // ID của sản phẩm
            $table->integer('quantity'); // Số lượng sản phẩm trong đơn hàng
            $table->decimal('price', 10, 2); // Giá của sản phẩm
            $table->decimal('into_money', 10, 2); // Thành tiền (số lượng * giá)

            // Tạo khóa ngoại cho 'don_hang_id' tham chiếu đến cột 'id' của bảng 'tb_don_hang'
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            
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
       Schema::dropIfExists('order_details');
    }
};

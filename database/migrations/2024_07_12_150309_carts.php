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
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->unsignedBigInteger('user_id')->nullable(); // ID của người dùng (có thể null)
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'

            // Tạo khóa ngoại cho 'nguoi_dung_id' tham chiếu đến cột 'id' của bảng 'tb_tai_khoan'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

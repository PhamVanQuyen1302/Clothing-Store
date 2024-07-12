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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->unsignedBigInteger('user_id'); // ID của tài khoản
            $table->unsignedBigInteger('product_id'); // ID của sản phẩm
            $table->text('content'); // Nội dung bình luận
            $table->timestamp('time')->useCurrent(); // Thời gian bình luận, mặc định là thời điểm hiện tại
            $table->tinyInteger('status')->default(1); // Trạng thái bình luận, mặc định là 1 (hoạt động)
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'

            // Tạo khóa ngoại cho 'tai_khoan_id' tham chiếu đến cột 'id' của bảng 'tb_tai_khoan'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Tạo khóa ngoại cho 'san_pham_id' tham chiếu đến cột 'id' của bảng 'tb_san_pham'
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('comments');
    }
};

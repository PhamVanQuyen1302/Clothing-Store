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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu big integer, auto increment và là khóa chính
            $table->string('code_order')->unique(); // Mã đơn hàng, phải là duy nhất
            $table->unsignedBigInteger('user_id'); // ID của người dùng (nếu có)
            $table->string('name')->comment('Tên người nhận đơn hàng'); // Tên người nhận đơn hàng
            $table->string('email')->comment('Email người nhận đơn hàng'); // Email người nhận đơn hàng
            $table->string('tel')->comment('Số điện thoại người nhận đơn hàng'); // Số điện thoại người nhận đơn hàng
            $table->string('address')->comment('Địa chỉ người nhận đơn hàng'); // Địa chỉ người nhận đơn hàng
            $table->dateTime('booking_date')->comment('Ngày đặt đơn hàng'); // Ngày đặt đơn hàng
            $table->decimal('totak', 10, 2)->comment('Tổng tiền đơn hàng'); // Tổng tiền đơn hàng
            $table->text('note')->nullable(); // Ghi chú đơn hàng, có thể null
            $table->unsignedBigInteger('payment_id')->comment('ID của phương thức thanh toán'); // ID của phương thức thanh toán
            $table->unsignedBigInteger('order_status_id')->comment('ID của trạng thái đơn hàng'); // ID của trạng thái đơn hàng
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'

            // Tạo khóa ngoại cho 'nguoi_dung_id' tham chiếu đến cột 'id' của bảng 'tb_tai_khoan'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Tạo khóa ngoại cho 'phuong_thuc_thanh_toan_id' tham chiếu đến cột 'id' của bảng 'tb_phuong_thuc_thanh_toan'
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');

            // Tạo khóa ngoại cho 'trang_thai_id' tham chiếu đến cột 'id' của bảng 'tb_trang_thai_don_hang'
            $table->foreign('order_status_id')->references('id')->on('order_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

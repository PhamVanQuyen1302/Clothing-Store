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
        Schema::create('users', function(Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable()->comment('ảnh đại diện'); // Đường dẫn ảnh đại diện, có thể null
            $table->string('name')->comment('họ tên'); // Họ tên
            $table->string('email')->unique()->comment('eamil'); // Email, phải là duy nhất
            $table->string('tel')->nullable()->comment('số điện thoại'); // Số điện thoại, có thể null
            $table->tinyInteger('gender')->nullable()->comment('giới tính'); // Giới tính (0: nữ, 1: nam, có thể null)
            $table->string('address')->nullable()->comment('địa chỉ'); // Địa chỉ, có thể null
            $table->date('age')->nullable()->comment('ngày sinh'); // Ngày sinh, có thể null
            $table->string('password')->comment('mất khẩu'); // Mật khẩu
            $table->unsignedBigInteger('role_id')->comment('id chức vụ'); // ID của chức vụ
            $table->tinyInteger('status')->default(1); // Trạng thái tài khoản, mặc định là 1 (hoạt động)
            $table->timestamps(); // Tự động tạo các cột 'created_at' và 'updated_at'

            // Tạo khóa ngoại cho 'chuc_vu_id' tham chiếu đến cột 'id' của bảng 'chuc_vu' (bảng chức vụ)
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

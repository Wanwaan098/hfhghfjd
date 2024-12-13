<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id(); // Tạo cột id kiểu BIGINT tự động tăng
            $table->foreignId('medicine_id') // Định nghĩa khóa ngoại
                  ->constrained('medicines') // Tham chiếu đến bảng medicines
                  ->onDelete('cascade');     // Xóa dữ liệu liên kết khi xóa medicine
            $table->integer('quantity');
            $table->dateTime('sale_date');
            $table->string('customer_phone', 10)->nullable();
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
}

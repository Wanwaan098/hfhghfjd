<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Tạo cột id kiểu BIGINT tự động tăng
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->date('date_of_birth');
            $table->string('parent_phone', 20);
            $table->foreignId('class_id') // Khóa ngoại
                  ->constrained('classes') // Tham chiếu đến bảng classes
                  ->onDelete('cascade');  // Xóa học sinh khi lớp bị xóa
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
}

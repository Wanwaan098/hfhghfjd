<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareDevicesTable extends Migration
{
    public function up(): void
    {
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('device_name'); // Tên thiết bị
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']); // Loại thiết bị
            $table->boolean('status'); // Trạng thái hoạt động
            $table->foreignId('center_id') // Khóa ngoại
                  ->constrained('it_centers')
                  ->onDelete('cascade'); // Xóa thiết bị khi trung tâm bị xóa
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
}

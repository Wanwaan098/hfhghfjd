<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('computer_name', 50);
            $table->string('model', 100);
            $table->string('operating_system', 50);
            $table->string('processor', 50);
            $table->integer('memory'); // RAM in GB
            $table->boolean('available'); // Availability status
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
}

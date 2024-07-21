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
        Schema::create('test_user', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('name',100);
            $table->string('email',100);
            $table->integer('departmentId',10);
            $table->enum('gender',['male','female']);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_user');
    }
};

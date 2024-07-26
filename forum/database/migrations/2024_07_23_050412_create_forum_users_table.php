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
        Schema::create('forum_users', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('first_name',20);
            $table->string('email',40);
            $table->enum('gender',['female','male']);
            $table->string('address',100);
            $table->boolean('is_active')->default(1);
            $table->timestamp('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_users');
    }
};

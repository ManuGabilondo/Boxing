<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('nivel')->default(3);
            $table->string('avatar')->nullable()->default('default.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('premium')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name' => 'Manuel', 'email' => 'mngabilondo@gmail.com', 'nivel' => 1, 'password' => Hash::make('03Febrero04'), 'email_verified_at' => '2023-01-02 17:04:58', 'premium' => true]);
        User::create(['name' => 'Cliente1', 'email' => 'cliente@gmail.com', 'password' => Hash::make('12345678'), 'email_verified_at' => '2023-01-02 17:04:58', 'premium' => false]);
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

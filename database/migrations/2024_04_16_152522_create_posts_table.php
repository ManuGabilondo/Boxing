<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('text');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        DB::table('posts')->insert([
            ['user_id' => 2, 'text' => 'Esta es una de las mejores aplicaciones en el mercado', 'foto' => null],
            ['user_id' => 1, 'text' => 'estoy encantado con todas las funcionalidades', 'foto' => null],
            ['user_id' => 2, 'text' => 'Mi partefavorita de la página es la de alimentación y dietas', 'foto' => null],
            ['user_id' => 2, 'text' => 'Me gusta mucho la parte de entrenamientos de sombra', 'foto' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

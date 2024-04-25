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
            $table->string('titulo');
            $table->text('text');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        DB::table('posts')->insert([
            ['user_id' => 2, 'titulo' => 'Encantado', 'text' => 'Esta es una de las mejores aplicaciones en el mercado', 'foto' => null, 'created_at' => '2024-04-26 15:25:22'],
            ['user_id' => 1, 'titulo' => 'De mis favoritas', 'text' => 'estoy encantado con todas las funcionalidades', 'foto' => null, 'created_at' => '2024-04-26 15:25:22'],
            ['user_id' => 2, 'titulo' => 'Recomendable', 'text' => 'Mi partefavorita de la página es la de alimentación y dietas', 'foto' => null, 'created_at' => '2024-04-26 15:25:22'],
            ['user_id' => 2, 'titulo' => 'Cinco estrellas', 'text' => 'Me gusta mucho la parte de entrenamientos de sombra', 'foto' => null, 'created_at' => '2024-04-26 15:25:22'],
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

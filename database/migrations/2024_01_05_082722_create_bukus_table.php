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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('kategori_id')->constrained('categories'); // Mengubah 'id_kategori' menjadi 'kategori_id'
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('jumlah_voters')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};

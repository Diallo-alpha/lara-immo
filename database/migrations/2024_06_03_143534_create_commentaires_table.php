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
    Schema::create('commentaires', function (Blueprint $table) {
        $table->id();
        $table->text('description');
        $table->timestamp('date_publication')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->foreignId('bien_id')->constrained()->onDelete('cascade')->default(0);
        $table->timestamps();
    });
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('commentaires');

}
};

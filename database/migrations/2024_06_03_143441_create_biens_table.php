
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
    if (!Schema::hasTable('biens')) {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image')->nullable();
            $table->enum('categorie', ['luxe', 'moyenne', 'economie']);
            $table->text('description');
            $table->string('adresse');
            $table->enum('statut', ['occupé', 'libre']);
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }
}

public function down()
{
    Schema::dropIfExists('biens');
}

};

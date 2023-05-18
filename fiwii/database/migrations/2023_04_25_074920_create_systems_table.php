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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('ubicacion');
            $table->enum('status', ['Mantenimiento', 'Revisado', 'Averiado']);
            $table->enum('prioridad', ['Alta', 'Media', 'Baja']);
            $table->string('tipo');
            $table->timestamps();
        });

    }

    public $timestamps = false;
    protected $dates = ['created_at','updated_at'];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
};

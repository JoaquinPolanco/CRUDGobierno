<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto');
            $table->string('fuenteFondos');
            $table->decimal('MontoPlanificado', 10, 2);
            $table->decimal('MontoPatrocinado', 10, 2);
            $table->decimal('MontoFondosPropios', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}

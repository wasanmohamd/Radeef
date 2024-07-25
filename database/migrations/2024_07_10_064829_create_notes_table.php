<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('note')->nullable(false); // Added ->nullable(false) constraint
            $table->timestamps();
 
        });
    }
   

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
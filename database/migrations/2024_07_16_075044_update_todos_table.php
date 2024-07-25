<?php

// database/migrations/2024_07_16_XXXXXX_update_todos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Example migration file with a check
public function up()
{
    if (!Schema::hasTable('todos')) {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            // Revert the changes made in the up() method
            $table->text('description')->change();
        });
    }
}
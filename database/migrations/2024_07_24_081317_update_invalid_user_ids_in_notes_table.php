<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateInvalidUserIdsInNotesTable extends Migration
{
    public function up()
    {
        // Update any invalid user_id values to NULL
        DB::table('notes')->whereNotExists(function ($query) {
            $query->select('id')->from('users')->whereColumn('notes.user_id', 'users.id');
        })->update(['user_id' => null]);
    }

    public function down(): void
    {
        Schema::table('notes', function (Blueprint $table) {
            //
        });
    }
};

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
        Schema::table('borrowed', function (Blueprint $table) {
            $table->foreignId('books_id');
            $table->foreignId('users_id');
            $table->dateTime('borrowed_at');
            $table->string('return_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrowed', function (Blueprint $table) {
            $table->dropColumn(['books_id', 'users_id', 'borrowed_at', 'return_by']);
        });
    }
};

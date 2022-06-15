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
            $table->foreignId('books_id')->after('id');
            $table->foreignId('users_id')->after('id');
            $table->dateTime('borrowed_at')->after('book_id');
            $table->string('return_by')->after('book_id');
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
            $table->dropColumn(['book_id', 'user_id', 'borrowed_at', 'return_by']);
        });
    }
};

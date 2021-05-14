<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->renameColumn('Title', 'title');
            $table->renameColumn('Genre', 'genre');
            $table->renameColumn('Director', 'director');
            $table->renameColumn('Plot', 'plot');
            $table->year('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('Title', 'title');
            $table->dropColumn('Genre', 'genre');
            $table->dropColumn('Director', 'director');
            $table->dropColumn('Plot', 'plot');
        });
    }
}

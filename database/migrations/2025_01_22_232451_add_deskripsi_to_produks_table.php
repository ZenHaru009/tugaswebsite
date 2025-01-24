<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeskripsiToProduksTable extends Migration
{
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('harga');
        });
    }

    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }
}


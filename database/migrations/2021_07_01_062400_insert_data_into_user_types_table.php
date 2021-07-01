<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertDataIntoUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user_types')->insert([
            ['type' => 'public', 'created_at' => '2021-06-30 00:00:00'],
            ['type' => 'service_provider', 'created_at' => '2021-06-30 00:00:00'],
            ['type' => 'funder', 'created_at' => '2021-06-30 00:00:00']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialiteLoginColumnsIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('confirm_password');
            $table->string('provider', 20)->nullable()->after('avatar');
            $table->string('provider_id')->nullable()->after('provider');
            $table->string('access_token')->nullable()->after('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn('avatar');
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
            $table->dropColumn('access_token');
        });
    }
}

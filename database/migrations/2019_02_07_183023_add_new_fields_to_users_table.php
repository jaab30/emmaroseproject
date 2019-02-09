<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname', 15)->after('name');
            $table->string('phone_number');
            $table->text('address_1');
            $table->text('address_2');
            $table->text('city');
            $table->text('state');
            $table->integer('zip_code');
            $table->text('shipping_1');
            $table->text('shipping_2');
            $table->text('shipping_city');
            $table->text('shipping_state');
            $table->integer('shipping_zip_code');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastname', 15)->after('name');
            $table->dropColumn('phone_number');
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zip_code');
            $table->dropColumn('shipping_1');
            $table->dropColumn('shipping_2');
            $table->dropColumn('shipping_city');
            $table->dropColumn('shipping_state');
            $table->dropColumn('shipping_zip_code');
        });
    }
}

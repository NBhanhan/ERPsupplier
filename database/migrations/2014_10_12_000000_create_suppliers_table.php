<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('name');
            $table->string('contactNum');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('note');
            $table->string('record');
            $table->string('totalSpend');
/*            $table->string('password');
            $table->rememberToken();
*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}

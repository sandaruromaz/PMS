<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('address',100);
            $table->string('nic',50);
            $table->string('telephone1',12);
            $table->string('telephone2',12);
            $table->string('email',255);
            $table->string('behavior',50);
            $table->string('cusID',50);
            $table->string('spnote',255);
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
        Schema::dropIfExists('customers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string(	'itemname',150);
            $table->string(	'quality',8);
            $table->double('weight', 10, 2);
            $table->string(	'damage',150);
            $table->double('mxamount', 10, 2);
            $table->double('loan', 8, 2);
            $table->tinyInteger('status');
            $table->string('cusID',50);
            $table->string('itemID',50);
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
        Schema::dropIfExists('items');
    }
}

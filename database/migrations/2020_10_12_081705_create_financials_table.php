<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->unsignedBigInteger('project_id');

            $table->foreign('shareholder_id')->references('id')->on('users');
            $table->unsignedBigInteger('shareholder_id');

            $table->float('share_percentage');
            $table->float('amount');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('financials');
    }
}

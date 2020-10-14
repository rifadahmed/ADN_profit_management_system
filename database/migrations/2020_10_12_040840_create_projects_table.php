<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('lc_or_tt_date');
            $table->date('shipment_date');

            $table->integer('lc_number');

            $table->string('style_number_and_order_session');
            $table->string('shipment_mode');
            $table->string('final_invoice_of_manufacturer');
            $table->string('final_invoice_amount_of_buyer');
            $table->string('payment_record');

            $table->float('lc_value');
            $table->float('forward_lc_value');
            $table->float('total_profit_margin');
            $table->float('amount_recieved');
            $table->float('advanced_payment');
            $table->float('outstanding_payment');
            $table->float('freight_cost');
            $table->float('profits_shared_with_shareholders');
            $table->float('main_account_balaced_after_profit');
            $table->float('profit_share_outstanding');

            $table->string('payment_method');

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
        Schema::dropIfExists('projects');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('refNo');
            $table->string('customer_name');
            $table->string('city');
            $table->string('country');
            $table->string('telephone');
            $table->string('mobile');
            $table->string('fax');
            $table->string('contact_person');
            $table->string('email_id');
            $table->mediumText('address');
            $table->mediumText('account_details');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('swift_code');
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

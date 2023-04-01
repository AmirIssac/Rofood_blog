<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->references('id')->on('packages');
            $table->string('stock');
            $table->string('users_num');
            $table->string('products_num');
            $table->string('monthly_reports_num');
            $table->string('purchases');
            $table->string('monthly_purchases_inv_num');
            $table->string('daily_reports_notifications');
            $table->string('owner_app');
            $table->string('link_branches');
            $table->string('customers_sms');
            $table->string('link_external_channel');
            $table->string('walaa_app');
            $table->string('link_ecommerce');
            $table->string('ecommerce');
            $table->string('main_warehouse');
            $table->string('add_user');
            $table->string('acc_tax_reports');
            $table->string('request_from_suppliers');
            $table->string('auto_stocktaking');
            $table->string('year_subscription');
            $table->string('recommended_for');
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
        Schema::dropIfExists('features');
    }
};

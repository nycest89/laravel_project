<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('location')->nullable();
            $table->string('id_no')->nullable();
            $table->string('product_cat')->nullable();
            $table->date('received_date')->nullable();
            $table->longText('link')->nullable();
            $table->string('published_date')->nullable();
            $table->string('status')->nullable();
            $table->string('reward_product')->nullable();
            $table->string('srn_no')->nullable();
            $table->string('evoucher')->nullable();
            $table->string('platform')->nullable();
            $table->string('caregiver_name')->nullable();
            $table->string('caregiver_code')->nullable();
            $table->string('caregiver_contact_no')->nullable();
            $table->string('caregiver_status')->nullable();
            $table->string('caregiver_reward_product')->nullable();
            $table->string('caregiver_srn_no')->nullable();
            $table->string('caregiver_evoucher')->nullable();
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
        Schema::dropIfExists('testimonials');
    }
}

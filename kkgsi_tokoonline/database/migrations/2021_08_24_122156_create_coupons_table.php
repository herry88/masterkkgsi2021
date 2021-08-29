<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('offer')->nullable();
            $table->double('min_order')->nullable();
            $table->double('max_discount')->nullable();
            $table->boolean('for_new_user')->nullable()->default(false);
            $table->boolean('is_active')->nullable()->default(false);
            $table->date('started_at')->nullable()->default(new DateTime());
            $table->date('expire_date')->nullable()->default(new DateTime());

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
        Schema::dropIfExists('coupons');
    }
}

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
        // $table->foreignIdFor(User::class);
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\Role::class);
            });
        }

        if (Schema::hasTable('locations')) {
            Schema::table('locations', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\Building::class);
            });
        }

        if (Schema::hasTable('deliveries')) {
            Schema::table('deliveries', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\User::class);
            });
        }

        if (Schema::hasTable('packages')) {
            Schema::table('packages', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\Delivery::class);
            });
        }

        if (Schema::hasTable('machines')) {
            Schema::table('machines', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\Location::class);
            });
        }


        Schema::create('package_location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

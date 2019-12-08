<?php
# @Date:   2019-10-29T16:16:39+00:00
# @Last modified time: 2019-12-08T18:17:06+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('insuranceCompany_id')->unsigned();
            $table->bigInteger('policy_number');
            $table->timestamps();

            $table->foreign('insuranceCompany_id')->references('id')->on('insurance_companies')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('patient_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
}

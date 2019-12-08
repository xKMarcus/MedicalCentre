<?php
# @Date:   2019-10-29T16:16:39+00:00
# @Last modified time: 2019-12-07T20:14:23+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doctor_id')->unsigned();
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('duration');
            $table->float('cost');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('visits');
    }
}

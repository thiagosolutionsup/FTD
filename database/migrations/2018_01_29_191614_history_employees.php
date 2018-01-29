<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoryEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**|Criando Tabela de Histórico do Empregados |**/
        Schema::create('tb_history_employees', function (Blueprint $table) {
            $table->increments('emp_hist_no');
            $table->integer('emp_no')->unsigned();
            $table->string('title',50);
            $table->integer('created_by')->default(0);
            $table->timestamp('created_on');
            $table->integer('modified_by')->default(0);
            $table->timestamp('modified_on');
            $table->integer('deleted_by')->default(0);
            $table->timestamp('deleted_on');
            $table->enum('deleted',['0','1'])->default('0');
            $table->foreign('emp_no')
                ->references('emp_no')->on('tb_employees')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_history_employees');
    }
}

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
    Schema::create('museums', function (Blueprint $table) {
      $table->id();

      $table->string('name', 50);
      $table->decimal('coordinate_x', 11, 8);
      $table->decimal('coordinate_y', 11, 8);
      $table->string('city', 100);

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
      Schema::dropIfExists('museums');
  }
};

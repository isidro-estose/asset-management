<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('assetCode');
            $table->text('assetSerialNumber');
            $table->string('assetBrand');
            $table->text('assetModel');
            $table->integer('assetCategoryId');
            $table->double('assetPurchasePrice', 8, 2);
            $table->date('assetPurchaseDate');
            $table->text('assetCondition');
            $table->integer('currentempId');
            $table->date('assetWarrantyExpiry');
            $table->integer('userIdEncoded');
            $table->integer('supplierId');
            $table->string('assetStatus', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

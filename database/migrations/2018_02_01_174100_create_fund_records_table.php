<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateFundRecordsTable extends Migration { public function up() { Schema::create('fund_records', function (Blueprint $spe8060e) { $spe8060e->increments('id'); $spe8060e->integer('user_id'); $spe8060e->integer('type')->default(\App\FundRecord::TYPE_OUT); $spe8060e->integer('amount'); $spe8060e->integer('balance')->default(0); $spe8060e->integer('order_id')->nullable(); $spe8060e->string('withdraw_id')->nullable(); $spe8060e->string('remark')->nullable(); $spe8060e->timestamps(); $spe8060e->index('user_id'); }); DB::unprepared('ALTER TABLE `fund_records` CHANGE COLUMN `created_at` `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP;'); } public function down() { Schema::dropIfExists('fund_records'); } }
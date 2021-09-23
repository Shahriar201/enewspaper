<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // $table->string('contact_title_left_bn')->nullable();
            // $table->string('contact_title_left_en')->nullable();
            $table->string('contact_title_location_bn')->nullable();
            $table->string('contact_title_location_en')->nullable();
            $table->string('contact_phone_bn')->nullable();
            $table->string('contact_phone_en')->nullable();
            $table->string('contact_circulation_phone_bn')->nullable();
            $table->string('contact_circulation_phone_en')->nullable();
            $table->string('contact_advertising_phone_bn')->nullable();
            $table->string('contact_advertising_phone_en')->nullable();
            $table->string('contact_email')->nullable();
            // $table->string('editor_publisher_bn')->nullable();
            // $table->string('editor_publisher_en')->nullable();
            $table->string('editor_name_bn')->nullable();
            $table->string('editor_name_en')->nullable();
            $table->string('executive_editor_name_bn')->nullable();
            $table->string('executive_editor_name_en')->nullable();
            $table->string('message_editor_name_bn')->nullable();
            $table->string('message_editor_name_en')->nullable();
            // $table->string('editor_publisher_bn')->nullable();
            // $table->string('editor_publisher_en')->nullable();
            $table->string('editor_office_bn')->nullable();
            $table->string('editor_office_en')->nullable();
            // $table->string('editor_phone_title_bn')->nullable();
            // $table->string('editor_phone_title_en')->nullable();
            $table->string('editor_phone_bn')->nullable();
            $table->string('editor_phone_en')->nullable();
            // $table->string('editor_email_title_bn')->nullable();
            // $table->string('editor_email_title_en')->nullable();
            $table->string('editor_email')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('town');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');
            $table->string('phone');
            $table->string('workexperience');
            $table->string('type');
            $table->string('status');
            $table->mediumInteger('activationcode');
            $table->timestamp('postingdate')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->string('coursename');
            $table->string('projectname');
            $table->string('coursedescription');
            $table->string('projectdescription');
            $table->mediumInteger('coursechapters');
            $table->mediumInteger('projectchapters');
            $table->string('jobname');
            $table->string('jobdescription');
            $table->dateTime('jobdate');
            $table->string('jobstage');
            $table->string('jobcomments');
            $table->dateTime('jobinterviews');
            $table->string('companyname');
            $table->string('jobskills');
            $table->string('jobhours');
            $table->string('jobtype');
            $table->string('qualifications');
            $table->string('file');
            $table->string('ticketname');
            $table->string('message');
            $table->string('progress');
            $table->string('response');
            $table->string('assignedto');
            $table->string('sender');
            $table->string('recipient');
            $table->Integer('filesize');
            $table->string('downloads');
            $table->string('sessionname');
            $table->string('duration');
            $table->date('date');
            $table->time('time');
            $table->Integer('grade');
            $table->string('service');
            $table->decimal('amount');
            $table->bigInteger('cardno');
            $table->string('expirydate');
            $table->Integer('securitycode');
            $table->string('hash');
            $table->Integer('active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

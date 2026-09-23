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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            // প্রাথমিক রেজিস্ট্রেশনের তথ্য
            $table->string('name');                          // চালকের নাম
            $table->string('mobile', 15)->unique();          // মোবাইল নম্বর (লগইন করার জন্য ব্যবহার হবে)
            $table->string('vehicle_type');                  // গাড়ির ধরন (ইজি বাইক ইত্যাদি)
            $table->string('vehicle_number', 50)->unique();  // ভেহিকেল নম্বর
            $table->string('password');                      // পাসওয়ার্ড
            
            // প্রোফাইল কমপ্লিটের তথ্য (পরে চালক নিজে পূরণ করবে)
            $table->string('father_name')->nullable();       // পিতার নাম
            $table->string('nid_number', 20)->nullable()->unique(); // এনআইডি নম্বর
            $table->date('date_of_birth')->nullable();       // জন্ম তারিখ
            $table->text('address')->nullable();             // বর্তমান ঠিকানা
            $table->string('driver_photo')->nullable();      // চালকের ছবি
            $table->string('nid_copy')->nullable();          // এনআইডি কপির ফাইল
            
            // লাইসেন্স আবেদন ও স্ট্যাটাস ট্র্যাকিং
            $table->string('application_id')->nullable()->unique(); // লাইসেন্স আবেদন আইডি
            $table->boolean('is_profile_completed')->default(false); // প্রোফাইল আপডেট হয়েছে কিনা
            $table->enum('status', ['Unapplied', 'Pending', 'Active', 'Rejected'])->default('Unapplied'); 
            // Unapplied = শুধু রেজিস্টার্ড, Pending = লাইসেন্সের আবেদন করেছে, Active = অনুমোদিত
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};

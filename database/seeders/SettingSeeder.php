<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App settings
        DB::table('settings')->insert(['key' => 'app_logo', 'value' => '/assets/img/logo.png']);
        DB::table('settings')->insert(['key' => 'app_favicon', 'value' => '/assets/img/favicon.png']);
        DB::table('settings')->insert(['key' => 'app_name', 'value' => config('app.name')]);
        DB::table('settings')->insert(['key' => 'app_descr', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rutrum ligula a arcu consequat, in aliquam tellus auctor.']);
        DB::table('settings')->insert(['key' => 'app_locale', 'value' => config('app.locale')]);
        DB::table('settings')->insert(['key' => 'app_color', 'value' => "#4c59ff"]);
        DB::table('settings')->insert(['key' => 'app_timezone', 'value' => config('app.timezone')]);
        DB::table('settings')->insert(['key' => 'app_translations', 'value' => 1]);

        // Google Analytics
        DB::table('settings')->insert(['key' => 'analytics_property_id', 'value' => '']);
        DB::table('settings')->insert(['key' => 'manager_measurement_id', 'value' => '']);
        DB::table('settings')->insert(['key' => 'maps_api_key', 'value' => '']);

        // OneSignal Push Notifications
        DB::table('settings')->insert(['key' => 'onesignal_app_id', 'value' => 'df004855-d21d-4b90-88e3-7c6bb78ddc70']);
        DB::table('settings')->insert(['key' => 'onesignal_safari_web_id', 'value' => 'web.onesignal.auto.6514249a-4cb8-451b-a889-88f5913c9a7f']);
        DB::table('settings')->insert(['key' => 'onesignal_api_key', 'value' => 'OGNiMjlkYTMtOTM5MC00YzEwLWE5OWMtMmU5ZDQwOTliM2Rm']);

        //Mail
        DB::table('settings')->insert(['key' => 'mail_from_address', 'value' => 'example@mail.com']);
        DB::table('settings')->insert(['key' => 'mail_contact_address', 'value' => 'example@mail.com']);
        DB::table('settings')->insert(['key' => 'mail_from_name', 'value' => config('app.name')]);
        DB::table('settings')->insert(['key' => 'mail_driver', 'value' => 'smtp']);
        DB::table('settings')->insert(['key' => 'mail_host', 'value' => env('MAIL_HOST', 'smtp.mailgun.org')]);
        DB::table('settings')->insert(['key' => 'mail_port', 'value' => env('MAIL_PORT', 587)]);
        DB::table('settings')->insert(['key' => 'mail_encryption', 'value' => env('MAIL_ENCRYPTION', 'tls')]);
        DB::table('settings')->insert(['key' => 'mail_username', 'value' => env('MAIL_USERNAME')]);
        DB::table('settings')->insert(['key' => 'mail_password', 'value' => env('MAIL_PASSWORD')]);

    }
}

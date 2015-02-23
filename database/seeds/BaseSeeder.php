<?php

class BaseSeeder extends Seeder {

    private static $booted;

    public function __construct()
    {
        if ( ! self::$booted)
        {
            self::boot();

            self::$booted = true;
        }
    }

    protected static function boot()
    {
        Eloquent::unguard();
        DB::statement('set FOREIGN_KEY_CHECKS = 0');
    }
}
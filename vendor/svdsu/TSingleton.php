<?php


namespace svdsu;


trait TSingleton
{
    private static ?self $instance = null;

    private function __Construct(){}

    public static function getInstance(): static {
        return static::$instance ?? static::$instance = new static();
    }
}
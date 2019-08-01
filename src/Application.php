<?php


namespace Syafiqq\Lumen;


class Application extends \Laravel\Lumen\Application
{
    /**
     * Determine if the application configuration is cached.
     *
     * @return bool
     */
    public function configurationIsCached(){
        return false;
    }
}
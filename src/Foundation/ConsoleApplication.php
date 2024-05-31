<?php

namespace Lacora\Foundation;

use Lacora\Foundation\Application;

class ConsoleApplication extends Application
{
    protected function bindPathsInContainer()
    {
        parent::bindPathsInContainer();
    }

    /**
     * Get the modules path of the Laravel installation.
     *
     * @param  string  $path
     * @return string
     */
    public function modulesPath($path = '')
    {
        return $this->joinPaths(realpath($this->modulesPath ?: $this->basePath('../modules')), $path);
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @param  string  $path
     * @return string
     */
    public function path($path = '')
    {
        return $this->joinPaths(realpath($this->appPath ?: $this->basePath('../app')), $path);
    }
}

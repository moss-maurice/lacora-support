<?php

namespace Lacora\Foundation;

use Lacora\Foundation\Application;

class ConsoleApplication extends Application
{
    protected function bindPathsInContainer()
    {
        parent::bindPathsInContainer();
    }

    public function modulesPath($path = '')
    {
        return $this->joinPaths(realpath($this->modulesPath ?: $this->basePath('../modules')), $path);
    }

    public function path($path = '')
    {
        return $this->joinPaths(realpath($this->appPath ?: $this->basePath('../app')), $path);
    }
}

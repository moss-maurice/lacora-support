<?php

namespace Lacora\Foundation;

use Illuminate\Foundation\Application as IlluminateApplication;

class Application extends IlluminateApplication
{
    protected $basePath;

    protected $modulesPath;

    protected $corePath;

    protected $coreConfigPath;

    protected function bindPathsInContainer()
    {
        parent::bindPathsInContainer();

        $this->instance('path.modules', $this->modulesPath());
        $this->instance('core.path', $this->corePath());
        $this->instance('core.path.config', $this->coreConfigPath());
    }

    public function modulesPath($path = '')
    {
        return $this->joinPaths(realpath($this->modulesPath ?: $this->basePath('../modules')), $path);
    }

    public function useModulesPath($path)
    {
        $this->modulesPath = $path;

        $this->instance('path.modules', $path);

        return $this;
    }

    public function corePath($path = '')
    {
        return $this->joinPaths(realpath($this->corePath ?: dirname(__FILE__) . '/..'), $path);
    }

    public function useCorePath($path)
    {
        $this->corePath = $path;

        $this->instance('core.path', $path);

        return $this;
    }

    public function coreConfigPath($path = '')
    {
        return $this->joinPaths(realpath($this->coreConfigPath ?: $this->corePath('../config')), $path);
    }

    public function useCoreConfigPath($path)
    {
        $this->coreConfigPath = $path;

        $this->instance('core.path.config', $path);

        return $this;
    }

    public function publicPath($path = '')
    {
        return $this->joinPaths(realpath($this->publicPath ?: $this->basePath('../')), $path);
    }

    public function path($path = '')
    {
        return $this->joinPaths(realpath($this->appPath ?: $this->publicPath('app')), $path);
    }

    public function resourcePath($path = '')
    {
        return $this->joinPaths(realpath($this->publicPath('resources')), $path);
    }
}

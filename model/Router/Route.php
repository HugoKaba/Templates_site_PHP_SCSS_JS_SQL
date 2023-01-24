<?php

namespace model\Router;

class route
{
    protected $name;
    protected $path;
    protected $callback;
    protected $expReg;
    protected $keysParams = [];

    public function __construct($path, $callback, $name)
    {
        $this->name = $name;
        $this->path = $path;
        $this->callback = $callback;
        $this->expReg = '#.*' . preg_replace('#{[^}]*}#', '(.*)', $path) . '$#';
        $this->keysParams = $this->getKeysParams();
    }
    public function getKeysParams()
    {
        preg_match_all('#{[^}]*}#', $this->path, $params);
        return array_map(function ($v) {
            return substr($v, 1, -1);
        }, $params[0]);
    }
    public function match($uri)
    {
        return preg_match($this->expReg, $uri);
    }
    public function getName()
    {
        return $this->name;
    }
    public function generateUri($params = [])
    {
        $path = $this->path;
        foreach ($params as $key => $value) {
            $path = str_replace('{' . $key . '}', $value, $path);
        }
        return $path;
    }
    public function getCallBack()
    {
        return $this->callback;
    }
    public function getParams($uri)
    {
        $params = [];
        $i = 1;
        foreach ($this->keysParams as $param) {
            $params[$param] = preg_replace($this->expReg, '$' . $i++, $uri);
        }
        return $params;
    }
}

<?php
/**
 * ThinkPHP5.next application library
 * @author Tao <taosikai@yeah.net>
 */
namespace Think\Foundation;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use think\App;

class Kernel extends App
{
    /**
     * @var array
     */
    protected $modules = [];

    public function registerModules()
    {
        return [];
    }

    /**
     * Handles the request and return a response
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request)
    {
        return static::run($request);
    }
}
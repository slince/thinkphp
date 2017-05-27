<?php
/**
 * ThinkPHP5.next application library
 * @author Tao <taosikai@yeah.net>
 */
namespace Think\Application;

use Psr\Http\Message\ServerRequestInterface;
use think\App;

class Application extends App
{
    public function registerMiddlewares()
    {
        return [
        ];
    }

    public function handle(ServerRequestInterface $request)
    {
        try {

        }
    }
}
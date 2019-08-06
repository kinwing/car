<?php
/**
 * Created by PhpStorm.
 * User: hujianrong
 * Date: 2019/8/6
 * Time: 7:59
 */
namespace car\bmw;

class Bmw3
{
    /**
     * Bmw3 constructor.
     */
    public function __construct()
    {
        $this->fix();
        $this->sprayPaint();
        $this->other();
        echo "流水线式组装Bmw3";
    }

    /**
     * 组装
     */
    public function fix()
    {
        echo "组装Bmw3";
    }

    /**
     * 喷漆
     */
    public function sprayPaint()
    {
        echo "喷漆Bmw3";
    }

    /**
     * 其他
     */
    public function other()
    {
        echo "其他Bmw3";
    }
}
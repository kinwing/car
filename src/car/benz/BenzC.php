<?php
/**
 * Created by PhpStorm.
 * User: hujianrong
 * Date: 2019/8/6
 * Time: 7:58
 */

namespace car\benz;

class BenzC
{
    /**
     * BenzC constructor.
     */
    public function __construct()
    {
        $this->fix();
        $this->sprayPaint();
        $this->other();
        echo "流水线式组装BenzC";
    }

    /**
     * 组装
     */
    public function fix()
    {
        echo "组装BenzC" . PHP_EOL;
    }

    /**
     * 喷漆
     */
    public function sprayPaint()
    {
        echo "喷漆BenzC" . PHP_EOL;
    }

    /**
     * 其他
     */
    public function other()
    {
        echo "其他BenzC" . PHP_EOL;
    }
}
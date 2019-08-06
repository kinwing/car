<?php
/**
 * Created by PhpStorm.
 * User: hujianrong
 * Date: 2019/8/6
 * Time: 7:58
 */

namespace car\benz;


class BenzA
{
    /**
     * BenzA constructor.
     */
    public function __construct()
    {
        $this->fix();
        $this->sprayPaint();
        $this->other();
        echo "流水线式组装BenzA";
    }

    /**
     * 组装
     */
    public function fix()
    {
        echo "组装BenzA";
    }

    /**
     * 喷漆
     */
    public function sprayPaint()
    {
        echo "喷漆BenzA";
    }

    /**
     * 其他
     */
    public function other()
    {
        echo "其他BenzA";
    }
}
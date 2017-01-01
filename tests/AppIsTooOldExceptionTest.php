<?php

// +----------------------------------------------------------------------
// | date: 2016-11-12
// +----------------------------------------------------------------------
// | AppIsTooOldExceptionTest.php: 测试 AppIsTooOldException
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

use PHPUnit\Framework\TestCase;

use Yangyifan\Exception\AppIsTooOldException;

class AppIsTooOldExceptionTest extends TestCase
{
    /**
     * @expectedException Yangyifan\Exception\AppIsTooOldException
     */
    public function testException()
    {
        throw new AppIsTooOldException();
    }
}
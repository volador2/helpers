<?php

namespace Volador\Helpers;

/**
* Debug
* @author [name] <[<email address>]>
* @since [version> [<description>]
*/
class Debug
{
    /**
     * 产生一条回溯跟踪, 返回指定深度堆栈数据
     * @param  int|integer $deep [description]
     * @return [type]            [description]
     */
    static public function backtrace($deep=0)
    {
        $bt = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, $deep + 1);
        if (isset($bt[$deep])) {
            return $bt[$deep];
        }

        return array();
    }
}
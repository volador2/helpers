<?php

namespace Volador\Helpers;

/**
* UUID 生成器
* @since [version> [<description>]
* @author [name] <[<email address>]>
*/
class UUID
{
    /**
     * [TRACE_ID description]
     * @param integer $len [description]
     */
    static public function TRACE_ID($len = 8)
    {
        $trace_id =  substr(md5(uniqid(mt_rand(), true)), 0-$len);
        return $trace_id;
    }
}

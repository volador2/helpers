<?php

namespace Volador\Helpers;

/**
* 数组类
* @author [name] <[<email address>]>
* @since [version> [<description>]
*/

class ArrayHelp
{
    /**
     * 获取数组中Key的值, 如果值不存在, 则返回默认值
     * @param  [type] $input   [description]
     * @param  [type] $key     [description]
     * @param  string $default [description]
     * @return [mixed]         [description]
     */
    static public function value($input, $key, $default = null)
    {
        if (isset($input[$key])) {
            return $input[$key];
        }

        return $default;
    }
}
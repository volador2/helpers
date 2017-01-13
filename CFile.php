<?php

namespace Volador\Helpers;

/**
* CFile 文件系统类
*
* $f = new File('/user/a.txt', 'wb+');
* $f->write('hello, worldl\n');
* ....
*
* @author [name] <[<email address>]>
* @since [version> [<description>]
*/
class CFile
{

    /**
     * 文件句柄
     * @var [type]
     */
    protected $fd;

    /**
     * [打开一个文件]
     * @param string $filename [文件名称, 建议使用绝对地址]
     * @param string $mode     [打开方式, 参考 http://php.net/manual/zh/function.fopen.php]
     */
    public function __construct($filename, $mode)
    {
        if (!$this->fd) {
            $this->fd = @fopen($filename, $mode);
        }
    }

    /**
     * [__destruct description]
     */
    public function __destruct()
    {
        if ($this->fd) {
            fclose($this->fd);
        }
    }

    /**
     * 写入文件
     * @param  string $string [description]
     * @return [mixed]        [description]
     */
    public function write($string)
    {
        if ($this->fd) {
            $ret = fwrite($this->fd, $string);
            if ($ret !== FALSE) {
                return $ret; 
            }
        }

        return false;
    }

    /**
     * [fflush description]
     * @return [type] [description]
     */
    public function fflush()
    {
        if ($this->fd) {
            return fflush($this->fd);
        }

        return false;
    }
}

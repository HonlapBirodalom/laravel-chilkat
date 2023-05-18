<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSFtpDir
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSFtpDir') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSFtpDir();
    }

    public function __get($var)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        }

        return $this->_pData[$var];
    }

    public function __set($var, $value)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        }
        $this->_pData[$var] = $value;
    }

    public function __isset($var)
    {
        if ($var === 'thisown') {
            return true;
        }

        return array_key_exists($var, $this->_pData);
    }

    public function get_Utf8()
    {
        return CkSFtpDir_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSFtpDir_put_Utf8($this->_cPtr, $b);
    }

    public function get_LastMethodSuccess()
    {
        return CkSFtpDir_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSFtpDir_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumFilesAndDirs()
    {
        return CkSFtpDir_get_NumFilesAndDirs($this->_cPtr);
    }

    public function get_OriginalPath($str)
    {
        CkSFtpDir_get_OriginalPath($this->_cPtr, $str);
    }

    public function originalPath()
    {
        return CkSFtpDir_originalPath($this->_cPtr);
    }

    public function getFilename($index)
    {
        return CkSFtpDir_getFilename($this->_cPtr, $index);
    }

    public function filename($index)
    {
        return CkSFtpDir_filename($this->_cPtr, $index);
    }

    public function GetFileObject($index)
    {
        $r = CkSFtpDir_GetFileObject($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkSFtpFile($r);
        }

        return $r;
    }

    public function LoadTaskResult($task)
    {
        return CkSFtpDir_LoadTaskResult($this->_cPtr, $task);
    }

    public function Sort($field, $ascending)
    {
        CkSFtpDir_Sort($this->_cPtr, $field, $ascending);
    }
}
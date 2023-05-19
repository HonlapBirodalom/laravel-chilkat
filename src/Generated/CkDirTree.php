<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkDirTree
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkDirTree') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkDirTree();
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
        return CkDirTree_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkDirTree_put_Utf8($this->_cPtr, $b);
    }

    public function get_BaseDir($str)
    {
        CkDirTree_get_BaseDir($this->_cPtr, $str);
    }

    public function baseDir()
    {
        return CkDirTree_baseDir($this->_cPtr);
    }

    public function put_BaseDir($newVal)
    {
        CkDirTree_put_BaseDir($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkDirTree_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkDirTree_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkDirTree_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DoneIterating()
    {
        return CkDirTree_get_DoneIterating($this->_cPtr);
    }

    public function get_FileSize32()
    {
        return CkDirTree_get_FileSize32($this->_cPtr);
    }

    public function get_FileSizeStr($str)
    {
        CkDirTree_get_FileSizeStr($this->_cPtr, $str);
    }

    public function fileSizeStr()
    {
        return CkDirTree_fileSizeStr($this->_cPtr);
    }

    public function get_FullPath($str)
    {
        CkDirTree_get_FullPath($this->_cPtr, $str);
    }

    public function fullPath()
    {
        return CkDirTree_fullPath($this->_cPtr);
    }

    public function get_FullUncPath($str)
    {
        CkDirTree_get_FullUncPath($this->_cPtr, $str);
    }

    public function fullUncPath()
    {
        return CkDirTree_fullUncPath($this->_cPtr);
    }

    public function get_IsDirectory()
    {
        return CkDirTree_get_IsDirectory($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkDirTree_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkDirTree_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkDirTree_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkDirTree_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkDirTree_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkDirTree_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkDirTree_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkDirTree_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Recurse()
    {
        return CkDirTree_get_Recurse($this->_cPtr);
    }

    public function put_Recurse($newVal)
    {
        CkDirTree_put_Recurse($this->_cPtr, $newVal);
    }

    public function get_RelativePath($str)
    {
        CkDirTree_get_RelativePath($this->_cPtr, $str);
    }

    public function relativePath()
    {
        return CkDirTree_relativePath($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkDirTree_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkDirTree_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkDirTree_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkDirTree_version($this->_cPtr);
    }

    public function AdvancePosition()
    {
        return CkDirTree_AdvancePosition($this->_cPtr);
    }

    public function BeginIterate()
    {
        return CkDirTree_BeginIterate($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkDirTree_SaveLastError($this->_cPtr, $path);
    }
}

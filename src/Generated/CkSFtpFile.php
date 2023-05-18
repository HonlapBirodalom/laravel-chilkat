<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSFtpFile
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSFtpFile') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSFtpFile();
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
        return CkSFtpFile_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSFtpFile_put_Utf8($this->_cPtr, $b);
    }

    public function get_CreateTime($outSysTime)
    {
        CkSFtpFile_get_CreateTime($this->_cPtr, $outSysTime);
    }

    public function get_CreateTimeStr($str)
    {
        CkSFtpFile_get_CreateTimeStr($this->_cPtr, $str);
    }

    public function createTimeStr()
    {
        return CkSFtpFile_createTimeStr($this->_cPtr);
    }

    public function get_Filename($str)
    {
        CkSFtpFile_get_Filename($this->_cPtr, $str);
    }

    public function filename()
    {
        return CkSFtpFile_filename($this->_cPtr);
    }

    public function get_FileType($str)
    {
        CkSFtpFile_get_FileType($this->_cPtr, $str);
    }

    public function fileType()
    {
        return CkSFtpFile_fileType($this->_cPtr);
    }

    public function get_Gid()
    {
        return CkSFtpFile_get_Gid($this->_cPtr);
    }

    public function get_Group($str)
    {
        CkSFtpFile_get_Group($this->_cPtr, $str);
    }

    public function group()
    {
        return CkSFtpFile_group($this->_cPtr);
    }

    public function get_IsAppendOnly()
    {
        return CkSFtpFile_get_IsAppendOnly($this->_cPtr);
    }

    public function get_IsArchive()
    {
        return CkSFtpFile_get_IsArchive($this->_cPtr);
    }

    public function get_IsCaseInsensitive()
    {
        return CkSFtpFile_get_IsCaseInsensitive($this->_cPtr);
    }

    public function get_IsCompressed()
    {
        return CkSFtpFile_get_IsCompressed($this->_cPtr);
    }

    public function get_IsDirectory()
    {
        return CkSFtpFile_get_IsDirectory($this->_cPtr);
    }

    public function get_IsEncrypted()
    {
        return CkSFtpFile_get_IsEncrypted($this->_cPtr);
    }

    public function get_IsHidden()
    {
        return CkSFtpFile_get_IsHidden($this->_cPtr);
    }

    public function get_IsImmutable()
    {
        return CkSFtpFile_get_IsImmutable($this->_cPtr);
    }

    public function get_IsReadOnly()
    {
        return CkSFtpFile_get_IsReadOnly($this->_cPtr);
    }

    public function get_IsRegular()
    {
        return CkSFtpFile_get_IsRegular($this->_cPtr);
    }

    public function get_IsSparse()
    {
        return CkSFtpFile_get_IsSparse($this->_cPtr);
    }

    public function get_IsSymLink()
    {
        return CkSFtpFile_get_IsSymLink($this->_cPtr);
    }

    public function get_IsSync()
    {
        return CkSFtpFile_get_IsSync($this->_cPtr);
    }

    public function get_IsSystem()
    {
        return CkSFtpFile_get_IsSystem($this->_cPtr);
    }

    public function get_LastAccessTime($outSysTime)
    {
        CkSFtpFile_get_LastAccessTime($this->_cPtr, $outSysTime);
    }

    public function get_LastAccessTimeStr($str)
    {
        CkSFtpFile_get_LastAccessTimeStr($this->_cPtr, $str);
    }

    public function lastAccessTimeStr()
    {
        return CkSFtpFile_lastAccessTimeStr($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSFtpFile_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSFtpFile_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastModifiedTime($outSysTime)
    {
        CkSFtpFile_get_LastModifiedTime($this->_cPtr, $outSysTime);
    }

    public function get_LastModifiedTimeStr($str)
    {
        CkSFtpFile_get_LastModifiedTimeStr($this->_cPtr, $str);
    }

    public function lastModifiedTimeStr()
    {
        return CkSFtpFile_lastModifiedTimeStr($this->_cPtr);
    }

    public function get_Owner($str)
    {
        CkSFtpFile_get_Owner($this->_cPtr, $str);
    }

    public function owner()
    {
        return CkSFtpFile_owner($this->_cPtr);
    }

    public function get_Permissions()
    {
        return CkSFtpFile_get_Permissions($this->_cPtr);
    }

    public function get_Size32()
    {
        return CkSFtpFile_get_Size32($this->_cPtr);
    }

    public function get_SizeStr($str)
    {
        CkSFtpFile_get_SizeStr($this->_cPtr, $str);
    }

    public function sizeStr()
    {
        return CkSFtpFile_sizeStr($this->_cPtr);
    }

    public function get_Uid()
    {
        return CkSFtpFile_get_Uid($this->_cPtr);
    }

    public function GetCreateDt()
    {
        $r = CkSFtpFile_GetCreateDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetLastAccessDt()
    {
        $r = CkSFtpFile_GetLastAccessDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetLastModifiedDt()
    {
        $r = CkSFtpFile_GetLastModifiedDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }
}

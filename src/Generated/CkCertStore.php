<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCertStore
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCertStore') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCertStore();
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
        return CkCertStore_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCertStore_put_Utf8($this->_cPtr, $b);
    }

    public function get_AvoidWindowsPkAccess()
    {
        return CkCertStore_get_AvoidWindowsPkAccess($this->_cPtr);
    }

    public function put_AvoidWindowsPkAccess($newVal)
    {
        CkCertStore_put_AvoidWindowsPkAccess($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCertStore_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCertStore_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCertStore_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCertStore_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCertStore_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCertStore_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCertStore_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCertStore_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCertStore_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCertStore_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCertStore_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumCertificates()
    {
        return CkCertStore_get_NumCertificates($this->_cPtr);
    }

    public function get_SmartCardPin($str)
    {
        CkCertStore_get_SmartCardPin($this->_cPtr, $str);
    }

    public function smartCardPin()
    {
        return CkCertStore_smartCardPin($this->_cPtr);
    }

    public function put_SmartCardPin($newVal)
    {
        CkCertStore_put_SmartCardPin($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkCertStore_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkCertStore_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkCertStore_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCertStore_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCertStore_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCertStore_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCertStore_version($this->_cPtr);
    }

    public function FindCertByKeyContainer($name)
    {
        $r = CkCertStore_FindCertByKeyContainer($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertByRfc822Name($name)
    {
        $r = CkCertStore_FindCertByRfc822Name($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySerial($str)
    {
        $r = CkCertStore_FindCertBySerial($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySha1Thumbprint($str)
    {
        $r = CkCertStore_FindCertBySha1Thumbprint($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySubject($str)
    {
        $r = CkCertStore_FindCertBySubject($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySubjectCN($str)
    {
        $r = CkCertStore_FindCertBySubjectCN($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySubjectE($str)
    {
        $r = CkCertStore_FindCertBySubjectE($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertBySubjectO($str)
    {
        $r = CkCertStore_FindCertBySubjectO($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function FindCertForEmail($emailAddress)
    {
        $r = CkCertStore_FindCertForEmail($this->_cPtr, $emailAddress);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetCertificate($index)
    {
        $r = CkCertStore_GetCertificate($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function LoadPemFile($pemPath)
    {
        return CkCertStore_LoadPemFile($this->_cPtr, $pemPath);
    }

    public function LoadPemStr($pemString)
    {
        return CkCertStore_LoadPemStr($this->_cPtr, $pemString);
    }

    public function LoadPfxData($pfxData, $password)
    {
        return CkCertStore_LoadPfxData($this->_cPtr, $pfxData, $password);
    }

    public function LoadPfxFile($pfxFilename, $password)
    {
        return CkCertStore_LoadPfxFile($this->_cPtr, $pfxFilename, $password);
    }

    public function SaveLastError($path)
    {
        return CkCertStore_SaveLastError($this->_cPtr, $path);
    }
}

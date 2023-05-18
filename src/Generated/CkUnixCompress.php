<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkUnixCompress
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkUnixCompress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkUnixCompress();
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
        return CkUnixCompress_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkUnixCompress_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkUnixCompress_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkUnixCompress_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkUnixCompress_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkUnixCompress_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkUnixCompress_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkUnixCompress_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkUnixCompress_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkUnixCompress_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkUnixCompress_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkUnixCompress_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkUnixCompress_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkUnixCompress_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkUnixCompress_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkUnixCompress_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkUnixCompress_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkUnixCompress_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkUnixCompress_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkUnixCompress_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkUnixCompress_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkUnixCompress_version($this->_cPtr);
    }

    public function CompressFile($inFilename, $destPath)
    {
        return CkUnixCompress_CompressFile($this->_cPtr, $inFilename, $destPath);
    }

    public function CompressFileAsync($inFilename, $destPath)
    {
        $r = CkUnixCompress_CompressFileAsync($this->_cPtr, $inFilename, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressFileToMem($inFilename, $outData)
    {
        return CkUnixCompress_CompressFileToMem($this->_cPtr, $inFilename, $outData);
    }

    public function CompressFileToMemAsync($inFilename)
    {
        $r = CkUnixCompress_CompressFileToMemAsync($this->_cPtr, $inFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressMemory($inData, $outData)
    {
        return CkUnixCompress_CompressMemory($this->_cPtr, $inData, $outData);
    }

    public function CompressMemToFile($inData, $destPath)
    {
        return CkUnixCompress_CompressMemToFile($this->_cPtr, $inData, $destPath);
    }

    public function CompressString($inStr, $charset, $outBytes)
    {
        return CkUnixCompress_CompressString($this->_cPtr, $inStr, $charset, $outBytes);
    }

    public function CompressStringToFile($inStr, $charset, $destPath)
    {
        return CkUnixCompress_CompressStringToFile($this->_cPtr, $inStr, $charset, $destPath);
    }

    public function LoadTaskCaller($task)
    {
        return CkUnixCompress_LoadTaskCaller($this->_cPtr, $task);
    }

    public function SaveLastError($path)
    {
        return CkUnixCompress_SaveLastError($this->_cPtr, $path);
    }

    public function UncompressFile($inFilename, $destPath)
    {
        return CkUnixCompress_UncompressFile($this->_cPtr, $inFilename, $destPath);
    }

    public function UncompressFileAsync($inFilename, $destPath)
    {
        $r = CkUnixCompress_UncompressFileAsync($this->_cPtr, $inFilename, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UncompressFileToMem($inFilename, $outData)
    {
        return CkUnixCompress_UncompressFileToMem($this->_cPtr, $inFilename, $outData);
    }

    public function UncompressFileToMemAsync($inFilename)
    {
        $r = CkUnixCompress_UncompressFileToMemAsync($this->_cPtr, $inFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function uncompressFileToString($zFilename, $charset)
    {
        return CkUnixCompress_uncompressFileToString($this->_cPtr, $zFilename, $charset);
    }

    public function UncompressFileToStringAsync($zFilename, $charset)
    {
        $r = CkUnixCompress_UncompressFileToStringAsync($this->_cPtr, $zFilename, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UncompressMemory($inData, $outData)
    {
        return CkUnixCompress_UncompressMemory($this->_cPtr, $inData, $outData);
    }

    public function UncompressMemToFile($inData, $destPath)
    {
        return CkUnixCompress_UncompressMemToFile($this->_cPtr, $inData, $destPath);
    }

    public function uncompressString($inCompressedData, $charset)
    {
        return CkUnixCompress_uncompressString($this->_cPtr, $inCompressedData, $charset);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkUnixCompress_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UnTarZ($zFilename, $destDir, $bNoAbsolute)
    {
        return CkUnixCompress_UnTarZ($this->_cPtr, $zFilename, $destDir, $bNoAbsolute);
    }

    public function UnTarZAsync($zFilename, $destDir, $bNoAbsolute)
    {
        $r = CkUnixCompress_UnTarZAsync($this->_cPtr, $zFilename, $destDir, $bNoAbsolute);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }
}
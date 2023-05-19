<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkGzip
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkGzip') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkGzip();
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
        return CkGzip_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkGzip_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkGzip_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkGzip_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkGzip_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_Comment($str)
    {
        CkGzip_get_Comment($this->_cPtr, $str);
    }

    public function comment()
    {
        return CkGzip_comment($this->_cPtr);
    }

    public function put_Comment($newVal)
    {
        CkGzip_put_Comment($this->_cPtr, $newVal);
    }

    public function get_CompressionLevel()
    {
        return CkGzip_get_CompressionLevel($this->_cPtr);
    }

    public function put_CompressionLevel($newVal)
    {
        CkGzip_put_CompressionLevel($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkGzip_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkGzip_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkGzip_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_ExtraData($outBytes)
    {
        CkGzip_get_ExtraData($this->_cPtr, $outBytes);
    }

    public function put_ExtraData($inBytes)
    {
        CkGzip_put_ExtraData($this->_cPtr, $inBytes);
    }

    public function get_Filename($str)
    {
        CkGzip_get_Filename($this->_cPtr, $str);
    }

    public function filename()
    {
        return CkGzip_filename($this->_cPtr);
    }

    public function put_Filename($newVal)
    {
        CkGzip_put_Filename($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkGzip_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkGzip_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkGzip_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkGzip_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkGzip_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkGzip_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkGzip_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkGzip_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkGzip_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkGzip_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastMod($outSysTime)
    {
        CkGzip_get_LastMod($this->_cPtr, $outSysTime);
    }

    public function put_LastMod($sysTime)
    {
        CkGzip_put_LastMod($this->_cPtr, $sysTime);
    }

    public function get_LastModStr($str)
    {
        CkGzip_get_LastModStr($this->_cPtr, $str);
    }

    public function lastModStr()
    {
        return CkGzip_lastModStr($this->_cPtr);
    }

    public function put_LastModStr($newVal)
    {
        CkGzip_put_LastModStr($this->_cPtr, $newVal);
    }

    public function get_UseCurrentDate()
    {
        return CkGzip_get_UseCurrentDate($this->_cPtr);
    }

    public function put_UseCurrentDate($newVal)
    {
        CkGzip_put_UseCurrentDate($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkGzip_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkGzip_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkGzip_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkGzip_version($this->_cPtr);
    }

    public function CompressBd($binDat)
    {
        return CkGzip_CompressBd($this->_cPtr, $binDat);
    }

    public function CompressBdAsync($binDat)
    {
        $r = CkGzip_CompressBdAsync($this->_cPtr, $binDat);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressFile($inFilename, $destPath)
    {
        return CkGzip_CompressFile($this->_cPtr, $inFilename, $destPath);
    }

    public function CompressFileAsync($inFilename, $destPath)
    {
        $r = CkGzip_CompressFileAsync($this->_cPtr, $inFilename, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressFile2($inFilename, $embeddedFilename, $destPath)
    {
        return CkGzip_CompressFile2($this->_cPtr, $inFilename, $embeddedFilename, $destPath);
    }

    public function CompressFile2Async($inFilename, $embeddedFilename, $destPath)
    {
        $r = CkGzip_CompressFile2Async($this->_cPtr, $inFilename, $embeddedFilename, $destPath);
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
        return CkGzip_CompressFileToMem($this->_cPtr, $inFilename, $outData);
    }

    public function CompressFileToMemAsync($inFilename)
    {
        $r = CkGzip_CompressFileToMemAsync($this->_cPtr, $inFilename);
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
        return CkGzip_CompressMemory($this->_cPtr, $inData, $outData);
    }

    public function CompressMemoryAsync($inData)
    {
        $r = CkGzip_CompressMemoryAsync($this->_cPtr, $inData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressMemToFile($inData, $destPath)
    {
        return CkGzip_CompressMemToFile($this->_cPtr, $inData, $destPath);
    }

    public function CompressMemToFileAsync($inData, $destPath)
    {
        $r = CkGzip_CompressMemToFileAsync($this->_cPtr, $inData, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressString($inStr, $destCharset, $outBytes)
    {
        return CkGzip_CompressString($this->_cPtr, $inStr, $destCharset, $outBytes);
    }

    public function CompressStringAsync($inStr, $destCharset)
    {
        $r = CkGzip_CompressStringAsync($this->_cPtr, $inStr, $destCharset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function compressStringENC($inStr, $charset, $encoding)
    {
        return CkGzip_compressStringENC($this->_cPtr, $inStr, $charset, $encoding);
    }

    public function CompressStringToFile($inStr, $destCharset, $destPath)
    {
        return CkGzip_CompressStringToFile($this->_cPtr, $inStr, $destCharset, $destPath);
    }

    public function CompressStringToFileAsync($inStr, $destCharset, $destPath)
    {
        $r = CkGzip_CompressStringToFileAsync($this->_cPtr, $inStr, $destCharset, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Decode($encodedStr, $encoding, $outBytes)
    {
        return CkGzip_Decode($this->_cPtr, $encodedStr, $encoding, $outBytes);
    }

    public function deflateStringENC($inString, $charsetName, $outputEncoding)
    {
        return CkGzip_deflateStringENC($this->_cPtr, $inString, $charsetName, $outputEncoding);
    }

    public function encode($byteData, $encoding)
    {
        return CkGzip_encode($this->_cPtr, $byteData, $encoding);
    }

    public function ExamineFile($inGzFilename)
    {
        return CkGzip_ExamineFile($this->_cPtr, $inGzFilename);
    }

    public function ExamineMemory($inGzData)
    {
        return CkGzip_ExamineMemory($this->_cPtr, $inGzData);
    }

    public function GetDt()
    {
        $r = CkGzip_GetDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function inflateStringENC($inString, $convertFromCharset, $inputEncoding)
    {
        return CkGzip_inflateStringENC($this->_cPtr, $inString, $convertFromCharset, $inputEncoding);
    }

    public function LoadTaskCaller($task)
    {
        return CkGzip_LoadTaskCaller($this->_cPtr, $task);
    }

    public function ReadFile($path, $outBytes)
    {
        return CkGzip_ReadFile($this->_cPtr, $path, $outBytes);
    }

    public function SaveLastError($path)
    {
        return CkGzip_SaveLastError($this->_cPtr, $path);
    }

    public function SetDt($dt)
    {
        return CkGzip_SetDt($this->_cPtr, $dt);
    }

    public function UncompressBd($binDat)
    {
        return CkGzip_UncompressBd($this->_cPtr, $binDat);
    }

    public function UncompressBdAsync($binDat)
    {
        $r = CkGzip_UncompressBdAsync($this->_cPtr, $binDat);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UncompressFile($srcPath, $destPath)
    {
        return CkGzip_UncompressFile($this->_cPtr, $srcPath, $destPath);
    }

    public function UncompressFileAsync($srcPath, $destPath)
    {
        $r = CkGzip_UncompressFileAsync($this->_cPtr, $srcPath, $destPath);
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
        return CkGzip_UncompressFileToMem($this->_cPtr, $inFilename, $outData);
    }

    public function UncompressFileToMemAsync($inFilename)
    {
        $r = CkGzip_UncompressFileToMemAsync($this->_cPtr, $inFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function uncompressFileToString($gzFilename, $charset)
    {
        return CkGzip_uncompressFileToString($this->_cPtr, $gzFilename, $charset);
    }

    public function UncompressFileToStringAsync($gzFilename, $charset)
    {
        $r = CkGzip_UncompressFileToStringAsync($this->_cPtr, $gzFilename, $charset);
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
        return CkGzip_UncompressMemory($this->_cPtr, $inData, $outData);
    }

    public function UncompressMemoryAsync($inData)
    {
        $r = CkGzip_UncompressMemoryAsync($this->_cPtr, $inData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UncompressMemToFile($inData, $destPath)
    {
        return CkGzip_UncompressMemToFile($this->_cPtr, $inData, $destPath);
    }

    public function UncompressMemToFileAsync($inData, $destPath)
    {
        $r = CkGzip_UncompressMemToFileAsync($this->_cPtr, $inData, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function uncompressString($inData, $inCharset)
    {
        return CkGzip_uncompressString($this->_cPtr, $inData, $inCharset);
    }

    public function UncompressStringAsync($inData, $inCharset)
    {
        $r = CkGzip_UncompressStringAsync($this->_cPtr, $inData, $inCharset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function uncompressStringENC($inStr, $charset, $encoding)
    {
        return CkGzip_uncompressStringENC($this->_cPtr, $inStr, $charset, $encoding);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkGzip_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UnTarGz($tgzFilename, $destDir, $bNoAbsolute)
    {
        return CkGzip_UnTarGz($this->_cPtr, $tgzFilename, $destDir, $bNoAbsolute);
    }

    public function UnTarGzAsync($tgzFilename, $destDir, $bNoAbsolute)
    {
        $r = CkGzip_UnTarGzAsync($this->_cPtr, $tgzFilename, $destDir, $bNoAbsolute);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteFile($path, $binaryData)
    {
        return CkGzip_WriteFile($this->_cPtr, $path, $binaryData);
    }

    public function xfdlToXml($xfldData)
    {
        return CkGzip_xfdlToXml($this->_cPtr, $xfldData);
    }
}

<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkScp
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkScp') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkScp();
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
        return CkScp_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkScp_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkScp_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkScp_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkScp_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkScp_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkScp_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkScp_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkScp_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkScp_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkScp_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkScp_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkScp_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkScp_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkScp_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkScp_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkScp_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkScp_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_PercentDoneScale()
    {
        return CkScp_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkScp_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_SendEnv($str)
    {
        CkScp_get_SendEnv($this->_cPtr, $str);
    }

    public function sendEnv()
    {
        return CkScp_sendEnv($this->_cPtr);
    }

    public function put_SendEnv($newVal)
    {
        CkScp_put_SendEnv($this->_cPtr, $newVal);
    }

    public function get_SyncedFiles($str)
    {
        CkScp_get_SyncedFiles($this->_cPtr, $str);
    }

    public function syncedFiles()
    {
        return CkScp_syncedFiles($this->_cPtr);
    }

    public function put_SyncedFiles($newVal)
    {
        CkScp_put_SyncedFiles($this->_cPtr, $newVal);
    }

    public function get_SyncMustMatch($str)
    {
        CkScp_get_SyncMustMatch($this->_cPtr, $str);
    }

    public function syncMustMatch()
    {
        return CkScp_syncMustMatch($this->_cPtr);
    }

    public function put_SyncMustMatch($newVal)
    {
        CkScp_put_SyncMustMatch($this->_cPtr, $newVal);
    }

    public function get_SyncMustMatchDir($str)
    {
        CkScp_get_SyncMustMatchDir($this->_cPtr, $str);
    }

    public function syncMustMatchDir()
    {
        return CkScp_syncMustMatchDir($this->_cPtr);
    }

    public function put_SyncMustMatchDir($newVal)
    {
        CkScp_put_SyncMustMatchDir($this->_cPtr, $newVal);
    }

    public function get_SyncMustNotMatch($str)
    {
        CkScp_get_SyncMustNotMatch($this->_cPtr, $str);
    }

    public function syncMustNotMatch()
    {
        return CkScp_syncMustNotMatch($this->_cPtr);
    }

    public function put_SyncMustNotMatch($newVal)
    {
        CkScp_put_SyncMustNotMatch($this->_cPtr, $newVal);
    }

    public function get_SyncMustNotMatchDir($str)
    {
        CkScp_get_SyncMustNotMatchDir($this->_cPtr, $str);
    }

    public function syncMustNotMatchDir()
    {
        return CkScp_syncMustNotMatchDir($this->_cPtr);
    }

    public function put_SyncMustNotMatchDir($newVal)
    {
        CkScp_put_SyncMustNotMatchDir($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkScp_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkScp_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkScp_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UnixPermOverride($str)
    {
        CkScp_get_UnixPermOverride($this->_cPtr, $str);
    }

    public function unixPermOverride()
    {
        return CkScp_unixPermOverride($this->_cPtr);
    }

    public function put_UnixPermOverride($newVal)
    {
        CkScp_put_UnixPermOverride($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkScp_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkScp_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkScp_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkScp_version($this->_cPtr);
    }

    public function DownloadBd($remotePath, $bd)
    {
        return CkScp_DownloadBd($this->_cPtr, $remotePath, $bd);
    }

    public function DownloadBdAsync($remotePath, $bd)
    {
        $r = CkScp_DownloadBdAsync($this->_cPtr, $remotePath, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DownloadBinary($remotePath, $outBytes)
    {
        return CkScp_DownloadBinary($this->_cPtr, $remotePath, $outBytes);
    }

    public function DownloadBinaryAsync($remotePath)
    {
        $r = CkScp_DownloadBinaryAsync($this->_cPtr, $remotePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function downloadBinaryEncoded($remotePath, $encoding)
    {
        return CkScp_downloadBinaryEncoded($this->_cPtr, $remotePath, $encoding);
    }

    public function DownloadBinaryEncodedAsync($remotePath, $encoding)
    {
        $r = CkScp_DownloadBinaryEncodedAsync($this->_cPtr, $remotePath, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DownloadFile($remotePath, $localPath)
    {
        return CkScp_DownloadFile($this->_cPtr, $remotePath, $localPath);
    }

    public function DownloadFileAsync($remotePath, $localPath)
    {
        $r = CkScp_DownloadFileAsync($this->_cPtr, $remotePath, $localPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function downloadString($remotePath, $charset)
    {
        return CkScp_downloadString($this->_cPtr, $remotePath, $charset);
    }

    public function DownloadStringAsync($remotePath, $charset)
    {
        $r = CkScp_DownloadStringAsync($this->_cPtr, $remotePath, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkScp_LoadTaskCaller($this->_cPtr, $task);
    }

    public function SaveLastError($path)
    {
        return CkScp_SaveLastError($this->_cPtr, $path);
    }

    public function SyncTreeDownload($remoteRoot, $localRoot, $mode, $bRecurse)
    {
        return CkScp_SyncTreeDownload($this->_cPtr, $remoteRoot, $localRoot, $mode, $bRecurse);
    }

    public function SyncTreeDownloadAsync($remoteRoot, $localRoot, $mode, $bRecurse)
    {
        $r = CkScp_SyncTreeDownloadAsync($this->_cPtr, $remoteRoot, $localRoot, $mode, $bRecurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SyncTreeUpload($localBaseDir, $remoteBaseDir, $mode, $bRecurse)
    {
        return CkScp_SyncTreeUpload($this->_cPtr, $localBaseDir, $remoteBaseDir, $mode, $bRecurse);
    }

    public function SyncTreeUploadAsync($localBaseDir, $remoteBaseDir, $mode, $bRecurse)
    {
        $r = CkScp_SyncTreeUploadAsync($this->_cPtr, $localBaseDir, $remoteBaseDir, $mode, $bRecurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadBd($remotePath, $bd)
    {
        return CkScp_UploadBd($this->_cPtr, $remotePath, $bd);
    }

    public function UploadBdAsync($remotePath, $bd)
    {
        $r = CkScp_UploadBdAsync($this->_cPtr, $remotePath, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadBinary($remotePath, $binData)
    {
        return CkScp_UploadBinary($this->_cPtr, $remotePath, $binData);
    }

    public function UploadBinaryAsync($remotePath, $binData)
    {
        $r = CkScp_UploadBinaryAsync($this->_cPtr, $remotePath, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadBinaryEncoded($remotePath, $encodedData, $encoding)
    {
        return CkScp_UploadBinaryEncoded($this->_cPtr, $remotePath, $encodedData, $encoding);
    }

    public function UploadBinaryEncodedAsync($remotePath, $encodedData, $encoding)
    {
        $r = CkScp_UploadBinaryEncodedAsync($this->_cPtr, $remotePath, $encodedData, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadFile($localPath, $remotePath)
    {
        return CkScp_UploadFile($this->_cPtr, $localPath, $remotePath);
    }

    public function UploadFileAsync($localPath, $remotePath)
    {
        $r = CkScp_UploadFileAsync($this->_cPtr, $localPath, $remotePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadString($remotePath, $textData, $charset)
    {
        return CkScp_UploadString($this->_cPtr, $remotePath, $textData, $charset);
    }

    public function UploadStringAsync($remotePath, $textData, $charset)
    {
        $r = CkScp_UploadStringAsync($this->_cPtr, $remotePath, $textData, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UseSsh($sshConnection)
    {
        return CkScp_UseSsh($this->_cPtr, $sshConnection);
    }
}

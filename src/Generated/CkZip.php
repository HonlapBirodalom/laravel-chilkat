<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkZip
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkZip') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkZip();
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
        return CkZip_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkZip_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkZip_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkZip_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkZip_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AppendFromDir($str)
    {
        CkZip_get_AppendFromDir($this->_cPtr, $str);
    }

    public function appendFromDir()
    {
        return CkZip_appendFromDir($this->_cPtr);
    }

    public function put_AppendFromDir($newVal)
    {
        CkZip_put_AppendFromDir($this->_cPtr, $newVal);
    }

    public function get_CaseSensitive()
    {
        return CkZip_get_CaseSensitive($this->_cPtr);
    }

    public function put_CaseSensitive($newVal)
    {
        CkZip_put_CaseSensitive($this->_cPtr, $newVal);
    }

    public function get_ClearArchiveAttribute()
    {
        return CkZip_get_ClearArchiveAttribute($this->_cPtr);
    }

    public function put_ClearArchiveAttribute($newVal)
    {
        CkZip_put_ClearArchiveAttribute($this->_cPtr, $newVal);
    }

    public function get_ClearReadOnlyAttr()
    {
        return CkZip_get_ClearReadOnlyAttr($this->_cPtr);
    }

    public function put_ClearReadOnlyAttr($newVal)
    {
        CkZip_put_ClearReadOnlyAttr($this->_cPtr, $newVal);
    }

    public function get_Comment($str)
    {
        CkZip_get_Comment($this->_cPtr, $str);
    }

    public function comment()
    {
        return CkZip_comment($this->_cPtr);
    }

    public function put_Comment($newVal)
    {
        CkZip_put_Comment($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkZip_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkZip_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkZip_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DecryptPassword($str)
    {
        CkZip_get_DecryptPassword($this->_cPtr, $str);
    }

    public function decryptPassword()
    {
        return CkZip_decryptPassword($this->_cPtr);
    }

    public function put_DecryptPassword($newVal)
    {
        CkZip_put_DecryptPassword($this->_cPtr, $newVal);
    }

    public function get_DiscardPaths()
    {
        return CkZip_get_DiscardPaths($this->_cPtr);
    }

    public function put_DiscardPaths($newVal)
    {
        CkZip_put_DiscardPaths($this->_cPtr, $newVal);
    }

    public function get_Encryption()
    {
        return CkZip_get_Encryption($this->_cPtr);
    }

    public function put_Encryption($newVal)
    {
        CkZip_put_Encryption($this->_cPtr, $newVal);
    }

    public function get_EncryptKeyLength()
    {
        return CkZip_get_EncryptKeyLength($this->_cPtr);
    }

    public function put_EncryptKeyLength($newVal)
    {
        CkZip_put_EncryptKeyLength($this->_cPtr, $newVal);
    }

    public function get_EncryptPassword($str)
    {
        CkZip_get_EncryptPassword($this->_cPtr, $str);
    }

    public function encryptPassword()
    {
        return CkZip_encryptPassword($this->_cPtr);
    }

    public function put_EncryptPassword($newVal)
    {
        CkZip_put_EncryptPassword($this->_cPtr, $newVal);
    }

    public function get_FileCount()
    {
        return CkZip_get_FileCount($this->_cPtr);
    }

    public function get_FileName($str)
    {
        CkZip_get_FileName($this->_cPtr, $str);
    }

    public function fileName()
    {
        return CkZip_fileName($this->_cPtr);
    }

    public function put_FileName($newVal)
    {
        CkZip_put_FileName($this->_cPtr, $newVal);
    }

    public function get_HasZipFormatErrors()
    {
        return CkZip_get_HasZipFormatErrors($this->_cPtr);
    }

    public function get_HeartbeatMs()
    {
        return CkZip_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkZip_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_IgnoreAccessDenied()
    {
        return CkZip_get_IgnoreAccessDenied($this->_cPtr);
    }

    public function put_IgnoreAccessDenied($newVal)
    {
        CkZip_put_IgnoreAccessDenied($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkZip_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkZip_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkZip_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkZip_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkZip_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkZip_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkZip_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkZip_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumEntries()
    {
        return CkZip_get_NumEntries($this->_cPtr);
    }

    public function get_OemCodePage()
    {
        return CkZip_get_OemCodePage($this->_cPtr);
    }

    public function put_OemCodePage($newVal)
    {
        CkZip_put_OemCodePage($this->_cPtr, $newVal);
    }

    public function get_OverwriteExisting()
    {
        return CkZip_get_OverwriteExisting($this->_cPtr);
    }

    public function put_OverwriteExisting($newVal)
    {
        CkZip_put_OverwriteExisting($this->_cPtr, $newVal);
    }

    public function get_PasswordProtect()
    {
        return CkZip_get_PasswordProtect($this->_cPtr);
    }

    public function put_PasswordProtect($newVal)
    {
        CkZip_put_PasswordProtect($this->_cPtr, $newVal);
    }

    public function get_PathPrefix($str)
    {
        CkZip_get_PathPrefix($this->_cPtr, $str);
    }

    public function pathPrefix()
    {
        return CkZip_pathPrefix($this->_cPtr);
    }

    public function put_PathPrefix($newVal)
    {
        CkZip_put_PathPrefix($this->_cPtr, $newVal);
    }

    public function get_PercentDoneScale()
    {
        return CkZip_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkZip_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_PwdProtCharset($str)
    {
        CkZip_get_PwdProtCharset($this->_cPtr, $str);
    }

    public function pwdProtCharset()
    {
        return CkZip_pwdProtCharset($this->_cPtr);
    }

    public function put_PwdProtCharset($newVal)
    {
        CkZip_put_PwdProtCharset($this->_cPtr, $newVal);
    }

    public function get_TempDir($str)
    {
        CkZip_get_TempDir($this->_cPtr, $str);
    }

    public function tempDir()
    {
        return CkZip_tempDir($this->_cPtr);
    }

    public function put_TempDir($newVal)
    {
        CkZip_put_TempDir($this->_cPtr, $newVal);
    }

    public function get_TextFlag()
    {
        return CkZip_get_TextFlag($this->_cPtr);
    }

    public function put_TextFlag($newVal)
    {
        CkZip_put_TextFlag($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkZip_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkZip_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkZip_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkZip_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkZip_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkZip_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkZip_version($this->_cPtr);
    }

    public function get_Zipx()
    {
        return CkZip_get_Zipx($this->_cPtr);
    }

    public function put_Zipx($newVal)
    {
        CkZip_put_Zipx($this->_cPtr, $newVal);
    }

    public function get_ZipxDefaultAlg($str)
    {
        CkZip_get_ZipxDefaultAlg($this->_cPtr, $str);
    }

    public function zipxDefaultAlg()
    {
        return CkZip_zipxDefaultAlg($this->_cPtr);
    }

    public function put_ZipxDefaultAlg($newVal)
    {
        CkZip_put_ZipxDefaultAlg($this->_cPtr, $newVal);
    }

    public function AddNoCompressExtension($fileExtension)
    {
        CkZip_AddNoCompressExtension($this->_cPtr, $fileExtension);
    }

    public function AppendBase64($fileName, $encodedCompressedData)
    {
        $r = CkZip_AppendBase64($this->_cPtr, $fileName, $encodedCompressedData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendBd($pathInZip, $byteData)
    {
        $r = CkZip_AppendBd($this->_cPtr, $pathInZip, $byteData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendCompressed($filename, $inData)
    {
        $r = CkZip_AppendCompressed($this->_cPtr, $filename, $inData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendData($fileName, $inData)
    {
        $r = CkZip_AppendData($this->_cPtr, $fileName, $inData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendDataEncoded($filename, $encoding, $data)
    {
        $r = CkZip_AppendDataEncoded($this->_cPtr, $filename, $encoding, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendFiles($filePattern, $recurse)
    {
        return CkZip_AppendFiles($this->_cPtr, $filePattern, $recurse);
    }

    public function AppendFilesAsync($filePattern, $recurse)
    {
        $r = CkZip_AppendFilesAsync($this->_cPtr, $filePattern, $recurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendFilesEx($filePattern, $recurse, $saveExtraPath, $archiveOnly, $includeHidden, $includeSystem)
    {
        return CkZip_AppendFilesEx($this->_cPtr, $filePattern, $recurse, $saveExtraPath, $archiveOnly, $includeHidden, $includeSystem);
    }

    public function AppendFilesExAsync($filePattern, $recurse, $saveExtraPath, $archiveOnly, $includeHidden, $includeSystem)
    {
        $r = CkZip_AppendFilesExAsync($this->_cPtr, $filePattern, $recurse, $saveExtraPath, $archiveOnly, $includeHidden, $includeSystem);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendHex($fileName, $encodedCompressedData)
    {
        $r = CkZip_AppendHex($this->_cPtr, $fileName, $encodedCompressedData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendMultiple($fileSpecs, $recurse)
    {
        return CkZip_AppendMultiple($this->_cPtr, $fileSpecs, $recurse);
    }

    public function AppendMultipleAsync($fileSpecs, $recurse)
    {
        $r = CkZip_AppendMultipleAsync($this->_cPtr, $fileSpecs, $recurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendNew($fileName)
    {
        $r = CkZip_AppendNew($this->_cPtr, $fileName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendNewDir($dirName)
    {
        $r = CkZip_AppendNewDir($this->_cPtr, $dirName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendOneFileOrDir($fileOrDirPath, $saveExtraPath)
    {
        return CkZip_AppendOneFileOrDir($this->_cPtr, $fileOrDirPath, $saveExtraPath);
    }

    public function AppendOneFileOrDirAsync($fileOrDirPath, $saveExtraPath)
    {
        $r = CkZip_AppendOneFileOrDirAsync($this->_cPtr, $fileOrDirPath, $saveExtraPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendString($internalZipFilepath, $textData)
    {
        $r = CkZip_AppendString($this->_cPtr, $internalZipFilepath, $textData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendString2($internalZipFilepath, $textData, $charset)
    {
        $r = CkZip_AppendString2($this->_cPtr, $internalZipFilepath, $textData, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function AppendZip($zipFileName)
    {
        return CkZip_AppendZip($this->_cPtr, $zipFileName);
    }

    public function CloseZip()
    {
        CkZip_CloseZip($this->_cPtr);
    }

    public function DeleteEntry($entry)
    {
        return CkZip_DeleteEntry($this->_cPtr, $entry);
    }

    public function ExcludeDir($dirName)
    {
        CkZip_ExcludeDir($this->_cPtr, $dirName);
    }

    public function Extract($dirPath)
    {
        return CkZip_Extract($this->_cPtr, $dirPath);
    }

    public function ExtractAsync($dirPath)
    {
        $r = CkZip_ExtractAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ExtractInto($dirPath)
    {
        return CkZip_ExtractInto($this->_cPtr, $dirPath);
    }

    public function ExtractMatching($dirPath, $pattern)
    {
        return CkZip_ExtractMatching($this->_cPtr, $dirPath, $pattern);
    }

    public function ExtractNewer($dirPath)
    {
        return CkZip_ExtractNewer($this->_cPtr, $dirPath);
    }

    public function ExtractOne($entry, $dirPath)
    {
        return CkZip_ExtractOne($this->_cPtr, $entry, $dirPath);
    }

    public function FirstEntry()
    {
        $r = CkZip_FirstEntry($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function FirstMatchingEntry($pattern)
    {
        $r = CkZip_FirstMatchingEntry($this->_cPtr, $pattern);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function getDirectoryAsXML()
    {
        return CkZip_getDirectoryAsXML($this->_cPtr);
    }

    public function directoryAsXML()
    {
        return CkZip_directoryAsXML($this->_cPtr);
    }

    public function GetEntryByID($entryID)
    {
        $r = CkZip_GetEntryByID($this->_cPtr, $entryID);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function GetEntryByIndex($index)
    {
        $r = CkZip_GetEntryByIndex($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function GetEntryByName($entryName)
    {
        $r = CkZip_GetEntryByName($this->_cPtr, $entryName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function GetExclusions()
    {
        $r = CkZip_GetExclusions($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function InsertNew($fileName, $beforeIndex)
    {
        $r = CkZip_InsertNew($this->_cPtr, $fileName, $beforeIndex);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function IsNoCompressExtension($fileExtension)
    {
        return CkZip_IsNoCompressExtension($this->_cPtr, $fileExtension);
    }

    public function IsPasswordProtected($zipFilename)
    {
        return CkZip_IsPasswordProtected($this->_cPtr, $zipFilename);
    }

    public function IsUnlocked()
    {
        return CkZip_IsUnlocked($this->_cPtr);
    }

    public function LoadTaskCaller($task)
    {
        return CkZip_LoadTaskCaller($this->_cPtr, $task);
    }

    public function NewZip($zipFilePath)
    {
        return CkZip_NewZip($this->_cPtr, $zipFilePath);
    }

    public function OpenBd($binData)
    {
        return CkZip_OpenBd($this->_cPtr, $binData);
    }

    public function OpenFromByteData($byteData)
    {
        return CkZip_OpenFromByteData($this->_cPtr, $byteData);
    }

    public function OpenFromMemory($inData)
    {
        return CkZip_OpenFromMemory($this->_cPtr, $inData);
    }

    public function OpenZip($zipPath)
    {
        return CkZip_OpenZip($this->_cPtr, $zipPath);
    }

    public function OpenZipAsync($zipPath)
    {
        $r = CkZip_OpenZipAsync($this->_cPtr, $zipPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function QuickAppend($ZipFileName)
    {
        return CkZip_QuickAppend($this->_cPtr, $ZipFileName);
    }

    public function QuickAppendAsync($ZipFileName)
    {
        $r = CkZip_QuickAppendAsync($this->_cPtr, $ZipFileName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RemoveNoCompressExtension($fileExtension)
    {
        CkZip_RemoveNoCompressExtension($this->_cPtr, $fileExtension);
    }

    public function SaveLastError($path)
    {
        return CkZip_SaveLastError($this->_cPtr, $path);
    }

    public function SetCompressionLevel($level)
    {
        CkZip_SetCompressionLevel($this->_cPtr, $level);
    }

    public function SetExclusions($excludePatterns)
    {
        CkZip_SetExclusions($this->_cPtr, $excludePatterns);
    }

    public function SetPassword($password)
    {
        CkZip_SetPassword($this->_cPtr, $password);
    }

    public function UnlockComponent($regCode)
    {
        return CkZip_UnlockComponent($this->_cPtr, $regCode);
    }

    public function Unzip($dirPath)
    {
        return CkZip_Unzip($this->_cPtr, $dirPath);
    }

    public function UnzipAsync($dirPath)
    {
        $r = CkZip_UnzipAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipInto($dirPath)
    {
        return CkZip_UnzipInto($this->_cPtr, $dirPath);
    }

    public function UnzipIntoAsync($dirPath)
    {
        $r = CkZip_UnzipIntoAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipMatching($dirPath, $pattern, $verbose)
    {
        return CkZip_UnzipMatching($this->_cPtr, $dirPath, $pattern, $verbose);
    }

    public function UnzipMatchingAsync($dirPath, $pattern, $verbose)
    {
        $r = CkZip_UnzipMatchingAsync($this->_cPtr, $dirPath, $pattern, $verbose);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipMatchingInto($dirPath, $pattern, $verbose)
    {
        return CkZip_UnzipMatchingInto($this->_cPtr, $dirPath, $pattern, $verbose);
    }

    public function UnzipMatchingIntoAsync($dirPath, $pattern, $verbose)
    {
        $r = CkZip_UnzipMatchingIntoAsync($this->_cPtr, $dirPath, $pattern, $verbose);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipNewer($dirPath)
    {
        return CkZip_UnzipNewer($this->_cPtr, $dirPath);
    }

    public function UnzipNewerAsync($dirPath)
    {
        $r = CkZip_UnzipNewerAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifyPassword()
    {
        return CkZip_VerifyPassword($this->_cPtr);
    }

    public function WriteBd($binData)
    {
        return CkZip_WriteBd($this->_cPtr, $binData);
    }

    public function WriteBdAsync($binData)
    {
        $r = CkZip_WriteBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteToMemory($outData)
    {
        return CkZip_WriteToMemory($this->_cPtr, $outData);
    }

    public function WriteToMemoryAsync()
    {
        $r = CkZip_WriteToMemoryAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteZip()
    {
        return CkZip_WriteZip($this->_cPtr);
    }

    public function WriteZipAsync()
    {
        $r = CkZip_WriteZipAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteZipAndClose()
    {
        return CkZip_WriteZipAndClose($this->_cPtr);
    }

    public function WriteZipAndCloseAsync()
    {
        $r = CkZip_WriteZipAndCloseAsync($this->_cPtr);
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

<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkFileAccess
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkFileAccess') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkFileAccess();
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
        return CkFileAccess_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkFileAccess_put_Utf8($this->_cPtr, $b);
    }

    public function get_CurrentDir($str)
    {
        CkFileAccess_get_CurrentDir($this->_cPtr, $str);
    }

    public function currentDir()
    {
        return CkFileAccess_currentDir($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkFileAccess_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkFileAccess_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkFileAccess_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EndOfFile()
    {
        return CkFileAccess_get_EndOfFile($this->_cPtr);
    }

    public function get_FileOpenError()
    {
        return CkFileAccess_get_FileOpenError($this->_cPtr);
    }

    public function get_FileOpenErrorMsg($str)
    {
        CkFileAccess_get_FileOpenErrorMsg($this->_cPtr, $str);
    }

    public function fileOpenErrorMsg()
    {
        return CkFileAccess_fileOpenErrorMsg($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkFileAccess_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkFileAccess_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkFileAccess_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkFileAccess_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkFileAccess_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkFileAccess_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkFileAccess_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkFileAccess_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LockFileOnOpen()
    {
        return CkFileAccess_get_LockFileOnOpen($this->_cPtr);
    }

    public function put_LockFileOnOpen($newVal)
    {
        CkFileAccess_put_LockFileOnOpen($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkFileAccess_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkFileAccess_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkFileAccess_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkFileAccess_version($this->_cPtr);
    }

    public function AppendAnsi($text)
    {
        return CkFileAccess_AppendAnsi($this->_cPtr, $text);
    }

    public function AppendBd($bd)
    {
        return CkFileAccess_AppendBd($this->_cPtr, $bd);
    }

    public function AppendSb($sb, $charset)
    {
        return CkFileAccess_AppendSb($this->_cPtr, $sb, $charset);
    }

    public function AppendText($str, $charset)
    {
        return CkFileAccess_AppendText($this->_cPtr, $str, $charset);
    }

    public function AppendUnicodeBOM()
    {
        return CkFileAccess_AppendUnicodeBOM($this->_cPtr);
    }

    public function AppendUtf8BOM()
    {
        return CkFileAccess_AppendUtf8BOM($this->_cPtr);
    }

    public function DirAutoCreate($filePath)
    {
        return CkFileAccess_DirAutoCreate($this->_cPtr, $filePath);
    }

    public function DirCreate($dirPath)
    {
        return CkFileAccess_DirCreate($this->_cPtr, $dirPath);
    }

    public function DirDelete($dirPath)
    {
        return CkFileAccess_DirDelete($this->_cPtr, $dirPath);
    }

    public function DirEnsureExists($dirPath)
    {
        return CkFileAccess_DirEnsureExists($this->_cPtr, $dirPath);
    }

    public function FileClose()
    {
        CkFileAccess_FileClose($this->_cPtr);
    }

    public function FileContentsEqual($filePath1, $filePath2)
    {
        return CkFileAccess_FileContentsEqual($this->_cPtr, $filePath1, $filePath2);
    }

    public function FileCopy($existingFilepath, $newFilepath, $failIfExists)
    {
        return CkFileAccess_FileCopy($this->_cPtr, $existingFilepath, $newFilepath, $failIfExists);
    }

    public function FileDelete($filePath)
    {
        return CkFileAccess_FileDelete($this->_cPtr, $filePath);
    }

    public function FileExists($filePath)
    {
        return CkFileAccess_FileExists($this->_cPtr, $filePath);
    }

    public function FileExists3($path)
    {
        return CkFileAccess_FileExists3($this->_cPtr, $path);
    }

    public function FileOpen($filePath, $accessMode, $shareMode, $createDisposition, $attributes)
    {
        return CkFileAccess_FileOpen($this->_cPtr, $filePath, $accessMode, $shareMode, $createDisposition, $attributes);
    }

    public function FileRead($maxNumBytes, $outBytes)
    {
        return CkFileAccess_FileRead($this->_cPtr, $maxNumBytes, $outBytes);
    }

    public function FileReadBd($maxNumBytes, $binData)
    {
        return CkFileAccess_FileReadBd($this->_cPtr, $maxNumBytes, $binData);
    }

    public function FileRename($existingFilepath, $newFilepath)
    {
        return CkFileAccess_FileRename($this->_cPtr, $existingFilepath, $newFilepath);
    }

    public function FileSeek($offset, $origin)
    {
        return CkFileAccess_FileSeek($this->_cPtr, $offset, $origin);
    }

    public function FileSize($filePath)
    {
        return CkFileAccess_FileSize($this->_cPtr, $filePath);
    }

    public function FileSize64($filePath)
    {
        return CkFileAccess_FileSize64($this->_cPtr, $filePath);
    }

    public function fileSizeStr($filePath)
    {
        return CkFileAccess_fileSizeStr($this->_cPtr, $filePath);
    }

    public function FileType($path)
    {
        return CkFileAccess_FileType($this->_cPtr, $path);
    }

    public function FileWrite($data)
    {
        return CkFileAccess_FileWrite($this->_cPtr, $data);
    }

    public function FileWriteBd($binData, $offset, $numBytes)
    {
        return CkFileAccess_FileWriteBd($this->_cPtr, $binData, $offset, $numBytes);
    }

    public function genBlockId($index, $length, $encoding)
    {
        return CkFileAccess_genBlockId($this->_cPtr, $index, $length, $encoding);
    }

    public function getDirectoryName($path)
    {
        return CkFileAccess_getDirectoryName($this->_cPtr, $path);
    }

    public function directoryName($path)
    {
        return CkFileAccess_directoryName($this->_cPtr, $path);
    }

    public function getExtension($path)
    {
        return CkFileAccess_getExtension($this->_cPtr, $path);
    }

    public function extension($path)
    {
        return CkFileAccess_extension($this->_cPtr, $path);
    }

    public function getFileName($path)
    {
        return CkFileAccess_getFileName($this->_cPtr, $path);
    }

    public function fileName($path)
    {
        return CkFileAccess_fileName($this->_cPtr, $path);
    }

    public function getFileNameWithoutExtension($path)
    {
        return CkFileAccess_getFileNameWithoutExtension($this->_cPtr, $path);
    }

    public function fileNameWithoutExtension($path)
    {
        return CkFileAccess_fileNameWithoutExtension($this->_cPtr, $path);
    }

    public function GetFileTime($path, $which)
    {
        $r = CkFileAccess_GetFileTime($this->_cPtr, $path, $which);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetLastModified($path)
    {
        $r = CkFileAccess_GetLastModified($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetNumBlocks($blockSize)
    {
        return CkFileAccess_GetNumBlocks($this->_cPtr, $blockSize);
    }

    public function getTempFilename($dirPath, $prefix)
    {
        return CkFileAccess_getTempFilename($this->_cPtr, $dirPath, $prefix);
    }

    public function tempFilename($dirPath, $prefix)
    {
        return CkFileAccess_tempFilename($this->_cPtr, $dirPath, $prefix);
    }

    public function OpenForAppend($filePath)
    {
        return CkFileAccess_OpenForAppend($this->_cPtr, $filePath);
    }

    public function OpenForRead($filePath)
    {
        return CkFileAccess_OpenForRead($this->_cPtr, $filePath);
    }

    public function OpenForReadWrite($filePath)
    {
        return CkFileAccess_OpenForReadWrite($this->_cPtr, $filePath);
    }

    public function OpenForWrite($filePath)
    {
        return CkFileAccess_OpenForWrite($this->_cPtr, $filePath);
    }

    public function readBinaryToEncoded($filePath, $encoding)
    {
        return CkFileAccess_readBinaryToEncoded($this->_cPtr, $filePath, $encoding);
    }

    public function ReadBlock($blockIndex, $blockSize, $outBytes)
    {
        return CkFileAccess_ReadBlock($this->_cPtr, $blockIndex, $blockSize, $outBytes);
    }

    public function ReadBlockBd($blockIndex, $blockSize, $bd)
    {
        return CkFileAccess_ReadBlockBd($this->_cPtr, $blockIndex, $blockSize, $bd);
    }

    public function ReadEntireFile($filePath, $outBytes)
    {
        return CkFileAccess_ReadEntireFile($this->_cPtr, $filePath, $outBytes);
    }

    public function readEntireTextFile($filePath, $charset)
    {
        return CkFileAccess_readEntireTextFile($this->_cPtr, $filePath, $charset);
    }

    public function ReadNextFragment($startAtBeginning, $beginMarker, $endMarker, $charset, $sb)
    {
        return CkFileAccess_ReadNextFragment($this->_cPtr, $startAtBeginning, $beginMarker, $endMarker, $charset, $sb);
    }

    public function ReassembleFile($partsDirPath, $partPrefix, $partExtension, $reassembledFilename)
    {
        return CkFileAccess_ReassembleFile($this->_cPtr, $partsDirPath, $partPrefix, $partExtension, $reassembledFilename);
    }

    public function ReplaceStrings($filePath, $charset, $existingString, $replacementString)
    {
        return CkFileAccess_ReplaceStrings($this->_cPtr, $filePath, $charset, $existingString, $replacementString);
    }

    public function SaveLastError($path)
    {
        return CkFileAccess_SaveLastError($this->_cPtr, $path);
    }

    public function SetCurrentDir($dirPath)
    {
        return CkFileAccess_SetCurrentDir($this->_cPtr, $dirPath);
    }

    public function SetFileTimes($filePath, $createTime, $lastAccessTime, $lastModTime)
    {
        return CkFileAccess_SetFileTimes($this->_cPtr, $filePath, $createTime, $lastAccessTime, $lastModTime);
    }

    public function SetLastModified($filePath, $lastModified)
    {
        return CkFileAccess_SetLastModified($this->_cPtr, $filePath, $lastModified);
    }

    public function SplitFile($fileToSplit, $partPrefix, $partExtension, $partSize, $destDir)
    {
        return CkFileAccess_SplitFile($this->_cPtr, $fileToSplit, $partPrefix, $partExtension, $partSize, $destDir);
    }

    public function SymlinkCreate($targetPath, $linkPath)
    {
        return CkFileAccess_SymlinkCreate($this->_cPtr, $targetPath, $linkPath);
    }

    public function symlinkTarget($linkPath)
    {
        return CkFileAccess_symlinkTarget($this->_cPtr, $linkPath);
    }

    public function TreeDelete($path)
    {
        return CkFileAccess_TreeDelete($this->_cPtr, $path);
    }

    public function Truncate()
    {
        return CkFileAccess_Truncate($this->_cPtr);
    }

    public function WriteEntireFile($filePath, $fileData)
    {
        return CkFileAccess_WriteEntireFile($this->_cPtr, $filePath, $fileData);
    }

    public function WriteEntireTextFile($filePath, $textData, $charset, $includedPreamble)
    {
        return CkFileAccess_WriteEntireTextFile($this->_cPtr, $filePath, $textData, $charset, $includedPreamble);
    }
}

<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkZipProgress extends CkBaseProgress
{
    public $_cPtr = null;

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkZipProgress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkZipProgress();
    }

    public function __get($var)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        }

        return CkBaseProgress::__get($var);
    }

    public function __set($var, $value)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        }
        CkBaseProgress::__set($var, $value);
    }

    public function __isset($var)
    {
        if ($var === 'thisown') {
            return true;
        }

        return CkBaseProgress::__isset($var);
    }

    public function DirToBeAdded($filePath)
    {
        return CkZipProgress_DirToBeAdded($this->_cPtr, $filePath);
    }

    public function ToBeAdded($filePath, $fileSize)
    {
        return CkZipProgress_ToBeAdded($this->_cPtr, $filePath, $fileSize);
    }

    public function FileAdded($filePath, $fileSize)
    {
        return CkZipProgress_FileAdded($this->_cPtr, $filePath, $fileSize);
    }

    public function ToBeZipped($filePath, $fileSize)
    {
        return CkZipProgress_ToBeZipped($this->_cPtr, $filePath, $fileSize);
    }

    public function FileZipped($filePath, $fileSize, $compressedSize)
    {
        return CkZipProgress_FileZipped($this->_cPtr, $filePath, $fileSize, $compressedSize);
    }

    public function ToBeUnzipped($filePath, $compressedSize, $fileSize, $isDirectory)
    {
        return CkZipProgress_ToBeUnzipped($this->_cPtr, $filePath, $compressedSize, $fileSize, $isDirectory);
    }

    public function FileUnzipped($filePath, $compressedSize, $fileSize, $isDirectory)
    {
        return CkZipProgress_FileUnzipped($this->_cPtr, $filePath, $compressedSize, $fileSize, $isDirectory);
    }

    public function SkippedForUnzip($filePath, $compressedSize, $fileSize, $isDirectory)
    {
        CkZipProgress_SkippedForUnzip($this->_cPtr, $filePath, $compressedSize, $fileSize, $isDirectory);
    }

    public function AddFilesBegin()
    {
        CkZipProgress_AddFilesBegin($this->_cPtr);
    }

    public function AddFilesEnd()
    {
        CkZipProgress_AddFilesEnd($this->_cPtr);
    }

    public function WriteZipBegin()
    {
        CkZipProgress_WriteZipBegin($this->_cPtr);
    }

    public function WriteZipEnd()
    {
        CkZipProgress_WriteZipEnd($this->_cPtr);
    }

    public function UnzipBegin()
    {
        CkZipProgress_UnzipBegin($this->_cPtr);
    }

    public function UnzipEnd()
    {
        CkZipProgress_UnzipEnd($this->_cPtr);
    }
}

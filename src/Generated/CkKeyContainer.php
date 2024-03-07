<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkKeyContainer
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkKeyContainer') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkKeyContainer();
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function get_Utf8()
    {
        return CkKeyContainer_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkKeyContainer_put_Utf8($this->_cPtr, $b);
    }

    function get_ContainerName($str)
    {
        CkKeyContainer_get_ContainerName($this->_cPtr, $str);
    }

    function containerName()
    {
        return CkKeyContainer_containerName($this->_cPtr);
    }

    function get_DebugLogFilePath($str)
    {
        CkKeyContainer_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkKeyContainer_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkKeyContainer_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_IsMachineKeyset()
    {
        return CkKeyContainer_get_IsMachineKeyset($this->_cPtr);
    }

    function get_IsOpen()
    {
        return CkKeyContainer_get_IsOpen($this->_cPtr);
    }

    function get_LastErrorHtml($str)
    {
        CkKeyContainer_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkKeyContainer_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkKeyContainer_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkKeyContainer_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkKeyContainer_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkKeyContainer_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkKeyContainer_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkKeyContainer_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_LegacyKeySpec()
    {
        return CkKeyContainer_get_LegacyKeySpec($this->_cPtr);
    }

    function put_LegacyKeySpec($newVal)
    {
        CkKeyContainer_put_LegacyKeySpec($this->_cPtr, $newVal);
    }

    function get_MachineKeys()
    {
        return CkKeyContainer_get_MachineKeys($this->_cPtr);
    }

    function put_MachineKeys($newVal)
    {
        CkKeyContainer_put_MachineKeys($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkKeyContainer_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkKeyContainer_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkKeyContainer_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkKeyContainer_version($this->_cPtr);
    }

    function CloseContainer()
    {
        CkKeyContainer_CloseContainer($this->_cPtr);
    }

    function CreateContainer($name, $machineKeyset)
    {
        return CkKeyContainer_CreateContainer($this->_cPtr, $name, $machineKeyset);
    }

    function DeleteContainer()
    {
        return CkKeyContainer_DeleteContainer($this->_cPtr);
    }

    function DeleteKey($keyName, $storageProvider)
    {
        return CkKeyContainer_DeleteKey($this->_cPtr, $keyName, $storageProvider);
    }

    function ExportKey($keyName, $storageProvider, $silentFlag, $key)
    {
        return CkKeyContainer_ExportKey($this->_cPtr, $keyName, $storageProvider, $silentFlag, $key);
    }

    function FetchContainerNames($bMachineKeyset)
    {
        return CkKeyContainer_FetchContainerNames($this->_cPtr, $bMachineKeyset);
    }

    function GenerateKeyPair($bKeyExchangePair, $keyLengthInBits)
    {
        return CkKeyContainer_GenerateKeyPair($this->_cPtr, $bKeyExchangePair, $keyLengthInBits);
    }

    function generateUuid()
    {
        return CkKeyContainer_generateUuid($this->_cPtr);
    }

    function GetKeys($storageProvider, $json)
    {
        return CkKeyContainer_GetKeys($this->_cPtr, $storageProvider, $json);
    }

    function getNthContainerName($bMachineKeyset, $index)
    {
        return CkKeyContainer_getNthContainerName($this->_cPtr, $bMachineKeyset, $index);
    }

    function nthContainerName($bMachineKeyset, $index)
    {
        return CkKeyContainer_nthContainerName($this->_cPtr, $bMachineKeyset, $index);
    }

    function GetNumContainers($bMachineKeyset)
    {
        return CkKeyContainer_GetNumContainers($this->_cPtr, $bMachineKeyset);
    }

    function GetPrivateKey($bKeyExchangePair)
    {
        $r = CkKeyContainer_GetPrivateKey($this->_cPtr, $bKeyExchangePair);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkPrivateKey($r);
        }
        return $r;
    }

    function GetPublicKey($bKeyExchangePair)
    {
        $r = CkKeyContainer_GetPublicKey($this->_cPtr, $bKeyExchangePair);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkPublicKey($r);
        }
        return $r;
    }

    function GetStorageProviders($json)
    {
        return CkKeyContainer_GetStorageProviders($this->_cPtr, $json);
    }

    function ImportKey($keyName, $storageProvider, $allowOverwrite, $allowExport, $key)
    {
        return CkKeyContainer_ImportKey($this->_cPtr, $keyName, $storageProvider, $allowOverwrite, $allowExport, $key);
    }

    function ImportPrivateKey($key, $bKeyExchangePair)
    {
        return CkKeyContainer_ImportPrivateKey($this->_cPtr, $key, $bKeyExchangePair);
    }

    function ImportPublicKey($key, $bKeyExchangePair)
    {
        return CkKeyContainer_ImportPublicKey($this->_cPtr, $key, $bKeyExchangePair);
    }

    function OpenContainer($name, $needPrivateKeyAccess, $machineKeyset)
    {
        return CkKeyContainer_OpenContainer($this->_cPtr, $name, $needPrivateKeyAccess, $machineKeyset);
    }

    function SaveLastError($path)
    {
        return CkKeyContainer_SaveLastError($this->_cPtr, $path);
    }
}

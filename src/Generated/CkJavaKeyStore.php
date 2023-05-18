<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkJavaKeyStore
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkJavaKeyStore') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkJavaKeyStore();
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
        return CkJavaKeyStore_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkJavaKeyStore_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkJavaKeyStore_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkJavaKeyStore_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkJavaKeyStore_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkJavaKeyStore_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkJavaKeyStore_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkJavaKeyStore_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkJavaKeyStore_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkJavaKeyStore_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkJavaKeyStore_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkJavaKeyStore_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkJavaKeyStore_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumPrivateKeys()
    {
        return CkJavaKeyStore_get_NumPrivateKeys($this->_cPtr);
    }

    public function get_NumSecretKeys()
    {
        return CkJavaKeyStore_get_NumSecretKeys($this->_cPtr);
    }

    public function get_NumTrustedCerts()
    {
        return CkJavaKeyStore_get_NumTrustedCerts($this->_cPtr);
    }

    public function get_RequireCompleteChain()
    {
        return CkJavaKeyStore_get_RequireCompleteChain($this->_cPtr);
    }

    public function put_RequireCompleteChain($newVal)
    {
        CkJavaKeyStore_put_RequireCompleteChain($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkJavaKeyStore_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkJavaKeyStore_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_VerifyKeyedDigest()
    {
        return CkJavaKeyStore_get_VerifyKeyedDigest($this->_cPtr);
    }

    public function put_VerifyKeyedDigest($newVal)
    {
        CkJavaKeyStore_put_VerifyKeyedDigest($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkJavaKeyStore_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkJavaKeyStore_version($this->_cPtr);
    }

    public function AddPfx($pfx, $alias, $password)
    {
        return CkJavaKeyStore_AddPfx($this->_cPtr, $pfx, $alias, $password);
    }

    public function AddPrivateKey($cert, $alias, $password)
    {
        return CkJavaKeyStore_AddPrivateKey($this->_cPtr, $cert, $alias, $password);
    }

    public function AddSecretKey($encodedKeyBytes, $encoding, $algorithm, $alias, $password)
    {
        return CkJavaKeyStore_AddSecretKey($this->_cPtr, $encodedKeyBytes, $encoding, $algorithm, $alias, $password);
    }

    public function AddTrustedCert($cert, $alias)
    {
        return CkJavaKeyStore_AddTrustedCert($this->_cPtr, $cert, $alias);
    }

    public function ChangePassword($index, $oldPassword, $newPassword)
    {
        return CkJavaKeyStore_ChangePassword($this->_cPtr, $index, $oldPassword, $newPassword);
    }

    public function FindCertChain($alias, $caseSensitive)
    {
        $r = CkJavaKeyStore_FindCertChain($this->_cPtr, $alias, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function FindPrivateKey($password, $alias, $caseSensitive)
    {
        $r = CkJavaKeyStore_FindPrivateKey($this->_cPtr, $password, $alias, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPrivateKey($r);
        }

        return $r;
    }

    public function FindTrustedCert($alias, $caseSensitive)
    {
        $r = CkJavaKeyStore_FindTrustedCert($this->_cPtr, $alias, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetCertChain($index)
    {
        $r = CkJavaKeyStore_GetCertChain($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function GetPrivateKey($password, $index)
    {
        $r = CkJavaKeyStore_GetPrivateKey($this->_cPtr, $password, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPrivateKey($r);
        }

        return $r;
    }

    public function getPrivateKeyAlias($index)
    {
        return CkJavaKeyStore_getPrivateKeyAlias($this->_cPtr, $index);
    }

    public function privateKeyAlias($index)
    {
        return CkJavaKeyStore_privateKeyAlias($this->_cPtr, $index);
    }

    public function getSecretKey($password, $index, $encoding)
    {
        return CkJavaKeyStore_getSecretKey($this->_cPtr, $password, $index, $encoding);
    }

    public function secretKey($password, $index, $encoding)
    {
        return CkJavaKeyStore_secretKey($this->_cPtr, $password, $index, $encoding);
    }

    public function getSecretKeyAlias($index)
    {
        return CkJavaKeyStore_getSecretKeyAlias($this->_cPtr, $index);
    }

    public function secretKeyAlias($index)
    {
        return CkJavaKeyStore_secretKeyAlias($this->_cPtr, $index);
    }

    public function GetTrustedCert($index)
    {
        $r = CkJavaKeyStore_GetTrustedCert($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function getTrustedCertAlias($index)
    {
        return CkJavaKeyStore_getTrustedCertAlias($this->_cPtr, $index);
    }

    public function trustedCertAlias($index)
    {
        return CkJavaKeyStore_trustedCertAlias($this->_cPtr, $index);
    }

    public function LoadBd($password, $bd)
    {
        return CkJavaKeyStore_LoadBd($this->_cPtr, $password, $bd);
    }

    public function LoadBinary($password, $jksData)
    {
        return CkJavaKeyStore_LoadBinary($this->_cPtr, $password, $jksData);
    }

    public function LoadEncoded($password, $jksEncData, $encoding)
    {
        return CkJavaKeyStore_LoadEncoded($this->_cPtr, $password, $jksEncData, $encoding);
    }

    public function LoadFile($password, $path)
    {
        return CkJavaKeyStore_LoadFile($this->_cPtr, $password, $path);
    }

    public function LoadJwkSet($password, $jwkSet)
    {
        return CkJavaKeyStore_LoadJwkSet($this->_cPtr, $password, $jwkSet);
    }

    public function RemoveEntry($entryType, $index)
    {
        return CkJavaKeyStore_RemoveEntry($this->_cPtr, $entryType, $index);
    }

    public function SaveLastError($path)
    {
        return CkJavaKeyStore_SaveLastError($this->_cPtr, $path);
    }

    public function SetAlias($entryType, $index, $alias)
    {
        return CkJavaKeyStore_SetAlias($this->_cPtr, $entryType, $index, $alias);
    }

    public function ToBinary($password, $outBytes)
    {
        return CkJavaKeyStore_ToBinary($this->_cPtr, $password, $outBytes);
    }

    public function toEncodedString($password, $encoding)
    {
        return CkJavaKeyStore_toEncodedString($this->_cPtr, $password, $encoding);
    }

    public function ToFile($password, $path)
    {
        return CkJavaKeyStore_ToFile($this->_cPtr, $password, $path);
    }

    public function ToJwkSet($password, $sbJwkSet)
    {
        return CkJavaKeyStore_ToJwkSet($this->_cPtr, $password, $sbJwkSet);
    }

    public function ToPem($password)
    {
        $r = CkJavaKeyStore_ToPem($this->_cPtr, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPem($r);
        }

        return $r;
    }

    public function ToPfx($password)
    {
        $r = CkJavaKeyStore_ToPfx($this->_cPtr, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPfx($r);
        }

        return $r;
    }

    public function UnlockComponent($unlockCode)
    {
        return CkJavaKeyStore_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UseCertVault($vault)
    {
        return CkJavaKeyStore_UseCertVault($this->_cPtr, $vault);
    }
}

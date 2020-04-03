<?php

namespace SimpleSAML\Module\perun;

use SimpleSAML\Error\Exception;
use SimpleSAML\Logger;
use SimpleSAML\Configuration;

class AttributeUtils
{
    const CONFIG_FILE_NAME = 'perun_attributes.php';
    const TYPE = 'type';

    public static function getAttrName($internalAttrName, $interface)
    {
        $perunAttributesConfig = self::getConfig();
        $resultAttrName = null;

        try {
            $attrArray = $perunAttributesConfig->getArray($internalAttrName);

            if (array_key_exists($interface, $attrArray)) {
                $resultAttrName = $attrArray[$interface];
            }
        } catch (\Exception $ex) {
            Logger::warning(
                'perun:AttributeUtils: missing ' . $internalAttrName . ' attribute in perun_attributes.php file'
            );
        }

        return $resultAttrName;
    }

    public static function getAttrNames($internalAttrNames, $interface)
    {
        $perunAttributesConfig = self::getConfig();
        $resultAttrNames = [];

        foreach ($internalAttrNames as $internalAttrName) {
            try {
                $attrArray = $perunAttributesConfig->getArray($internalAttrName);

                if (array_key_exists($interface, $attrArray)) {
                    array_push($resultAttrNames, $attrArray[$interface]);
                }
            } catch (\Exception $ex) {
                Logger::warning(
                    'perun:AttributeUtils: missing ' . $internalAttrName . ' attribute in perun_attributes.php file'
                );
            }
        }

        return $resultAttrNames;
    }

    public static function getAttrNamesMap($internalAttrNames, $interface)
    {
        $perunAttributesConfig = self::getConfig();
        $resultAttrNamesMap = [];

        foreach ($internalAttrNames as $internalAttrName) {
            try {
                $attrArray = $perunAttributesConfig->getArray($internalAttrName);

                if (array_key_exists($interface, $attrArray)) {
                    $resultAttrNamesMap[$attrArray[$interface]] = $internalAttrName  ;
                }
            } catch (\Exception $ex) {
                Logger::warning(
                    'perun:AttributeUtils: missing ' . $internalAttrName . ' attribute in perun_attributes.php file'
                );
            }
        }

        return $resultAttrNamesMap;
    }

    public static function createAttrNameTypeMap($internalAttrNames, $interface)
    {
        $perunAttributesConfig = self::getConfig();
        $resultArray = [];

        foreach ($internalAttrNames as $internalAttrName) {
            try {
                $attrArray = $perunAttributesConfig->getArray($internalAttrName);

                if (array_key_exists($interface, $attrArray)) {
                    $resultArray[$attrArray[$interface]] = $attrArray[self::TYPE];
                }
            } catch (\Exception $ex) {
                Logger::warning(
                    'perun:AttributeUtils: missing ' . $internalAttrName . ' attribute in perun_attributes.php file'
                );
            }
        }

        return $resultArray;
    }

    public static function getInterfaceAttrNameDisplayAttrNameMap($internalAttrNamesDisplayNamesMap, $interface)
    {
        $resultMap = [];

        foreach ($internalAttrNamesDisplayNamesMap as $internalAttrName => $displayName) {
            $interfaceAttrName = self::getAttrName($internalAttrName, $interface);
            $resultMap[$interfaceAttrName] = $displayName;
        }

        return $resultMap;
    }

    private static function getConfig()
    {
        $perunAttributesConfig = null;

        try {
            $perunAttributesConfig = Configuration::getConfig(self::CONFIG_FILE_NAME);
        } catch (\Exception $ex) {
            Logger::warning('perun:AttributeUtils: missing or invalid perun_attributes.php config file');
        }

        if ($perunAttributesConfig === null) {
            throw new Exception(
                'perun:AttributeUtils: missing or invalid perun_attributes.php config file'
            );
        }

        return $perunAttributesConfig;
    }
}

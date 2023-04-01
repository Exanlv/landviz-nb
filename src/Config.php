<?php

namespace Exan\Landviz;

class Config
{
    protected static string $dir = 'conf';

    public static function get(string $key): mixed
    {
        $configRequired = explode('.', $key);

        $file = __DIR__ . '/../conf/' . $configRequired[0] . '.php';

        $data = require($file);

        if (count($configRequired) === 1) {
            return $data;
        }

        array_shift($configRequired);

        return self::getSpecific($data, $configRequired);
    }

    private static function getSpecific(mixed $data, array $configRequired)
    {
        $dataPart = $data[$configRequired[0]];

        if (count($configRequired) === 1) {
            return $dataPart;
        }

        array_shift($configRequired);

        return self::getSpecific($data, $configRequired);
    }
}

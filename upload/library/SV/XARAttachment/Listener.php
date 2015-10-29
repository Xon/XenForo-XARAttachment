<?php

class SV_XARAttachment_Listener
{
    const AddonNameSpace = 'SV_XARAttachment';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.'_'.$class;
    }
}
<?php

class SV_XARAttachment_Listener
{
    public static function load_class($class, array &$extend)
    {
        switch($class)
        {
            case 'XenForo_ViewAdmin_Attachment_View':
                $extend[] = 'SV_XARAttachment_XenForo_ViewAdmin_Attachment_View';
                break;
            case 'XenForo_ViewPublic_Attachment_View':
                $extend[] = 'SV_XARAttachment_XenForo_ViewPublic_Attachment_View';
                break;                
        }
    }
}
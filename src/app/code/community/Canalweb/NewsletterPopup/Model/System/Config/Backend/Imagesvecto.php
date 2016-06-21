<?php
class Canalweb_NewsletterPopup_Model_System_Config_Backend_Imagesvecto extends Mage_Adminhtml_Model_System_Config_Backend_File
{
    protected function _getAllowedExtensions()
    {
        return array('svg', 'jpg', 'jpeg', 'gif', 'png', 'bmp');
    }
}

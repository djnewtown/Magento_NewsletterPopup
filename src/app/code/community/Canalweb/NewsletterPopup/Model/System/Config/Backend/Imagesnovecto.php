<?php
class Canalweb_NewsletterPopup_Model_System_Config_Backend_Imagesnovecto extends Mage_Adminhtml_Model_System_Config_Backend_File
{
    protected function _getAllowedExtensions()
    {
        return array('jpg', 'jpeg', 'gif', 'png', 'bmp');
    }
}

<?php

class Canalweb_NewsletterPopup_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'auto',
                'label' => 'Automatique',
            ),
            array(
                'value' => 'clic',
                'label' => 'Clic',
            ),
        );
    }
}

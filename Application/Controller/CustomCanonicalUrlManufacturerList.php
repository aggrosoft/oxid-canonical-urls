<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller;


class CustomCanonicalUrlManufacturerList extends CustomCanonicalUrlManufacturerList_parent
{
    public function getCanonicalUrl()
    {
        if (($manufacturer = $this->getActManufacturer())) {
            if ($manufacturer->oxmanufacturers__agcanonicalurl->value)
            {
                return $manufacturer->oxmanufacturers__agcanonicalurl->value;
            }
        }
        return parent::getCanonicalUrl();
    }
}
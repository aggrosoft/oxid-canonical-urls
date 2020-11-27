<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller;


class CustomCanonicalUrlVendorList extends CustomCanonicalUrlVendorList_parent
{
    public function getCanonicalUrl()
    {
        if (($vendor = $this->getActVendor())) {
            if ($vendor->oxvendor__agcanonicalurl->value)
            {
                return $vendor->oxvendor__agcanonicalurl->value;
            }
        }
        return parent::getCanonicalUrl();
    }
}
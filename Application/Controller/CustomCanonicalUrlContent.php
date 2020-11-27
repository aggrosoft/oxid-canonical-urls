<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller;


class CustomCanonicalUrlContent extends CustomCanonicalUrlContent_parent
{
    public function getCanonicalUrl()
    {
        if ($content = $this->getContent()) {
            if ($content->oxcontents__agcanonicalurl->value)
            {
                return $content->oxcontents__agcanonicalurl->value;
            }
        }
        return parent::getCanonicalUrl();
    }
}
<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller;


class CustomCanonicalUrlArticleList extends CustomCanonicalUrlArticleList_parent
{
    public function getCanonicalUrl()
    {
        if (($category = $this->getActiveCategory())) {
            if ($category->oxcategories__agcanonicalurl->value)
            {
                return $category->oxcategories__agcanonicalurl->value;
            }
        }
        return parent::getCanonicalUrl();
    }
}
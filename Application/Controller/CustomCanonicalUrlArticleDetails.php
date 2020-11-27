<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller;


class CustomCanonicalUrlArticleDetails extends CustomCanonicalUrlArticleDetails_parent
{
    public function getCanonicalUrl()
    {
        if (($article = $this->getProduct())) {
            if ($article->oxarticles__oxparentid->value) {
                $article = $this->_getParentProduct($article->oxarticles__oxparentid->value);
            }

            if ($article->oxarticles__agcanonicalurl->value)
            {
                return $article->oxarticles__agcanonicalurl->value;
            }

            return parent::getCanonicalUrl();
        }
    }
}
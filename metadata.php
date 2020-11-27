<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agcanonicalurls',
    'title'        => 'Custom Canonical Urls',
    'description'  => 'Allow custom canonical urls for articles and categories',
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlArticleDetails::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleSeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlArticleSeo::class
    ),
    'blocks' => array(
        [
            'template' => 'object_seo.tpl',
            'block' => 'admin_object_seo_form',
            'file' => '/views/blocks/admin_object_seo_form.tpl',
        ]
    ),
    'events'       => array(
        'onActivate'   => '\Aggrosoft\CustomCanonicalUrl\Core\Events::onActivate'
    )
);

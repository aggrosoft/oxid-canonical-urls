<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agcanonicalurls',
    'title'        => 'Custom Canonical Urls',
    'description'  => 'Allow custom canonical urls for articles and categories',
    'thumbnail'    => '',
    'version'      => '1.0.2',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlArticleDetails::class,
        \OxidEsales\Eshop\Application\Controller\ArticleListController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlArticleList::class,
        \OxidEsales\Eshop\Application\Controller\ContentController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlContent::class,
        \OxidEsales\Eshop\Application\Controller\ManufacturerListController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlManufacturerList::class,
        \OxidEsales\Eshop\Application\Controller\VendorListController::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\CustomCanonicalUrlVendorList::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleSeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlArticleSeo::class,
        \OxidEsales\Eshop\Application\Controller\Admin\CategorySeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlCategorySeo::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ContentSeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlContentSeo::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ManufacturerSeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlManufacturerSeo::class,
        \OxidEsales\Eshop\Application\Controller\Admin\VendorSeo::class => \Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin\CustomCanonicalUrlVendorSeo::class
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

<?php

class CanonicalUrlsModule{

    public function get_additional_field_names($table)
    {
        if (in_array($table, [
            'oxarticle',
            'oxcategory',
            'oxmanufacturer'
        ]))
        {
            return ["agcanonicalurl" => "agcanonicalurl"];
        }
        return [];
    }
}

$canonicalUrlsModule = new CanonicalUrlsModule;
ModuleManager::getInstance()->registerModule( $canonicalUrlsModule );
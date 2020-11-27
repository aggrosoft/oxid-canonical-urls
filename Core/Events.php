<?php


namespace Aggrosoft\CustomCanonicalUrl\Core;


class Events
{
    public static function onActivate()
    {
        $queries = [
            'ALTER TABLE oxarticles ADD COLUMN AGCANONICALURL varchar(2048) NULL',
            'ALTER TABLE oxarticles ADD COLUMN AGCANONICALURL_1 varchar(2048) NULL',
            'ALTER TABLE oxarticles ADD COLUMN AGCANONICALURL_2 varchar(2048) NULL',
            'ALTER TABLE oxarticles ADD COLUMN AGCANONICALURL_3 varchar(2048) NULL',

            'ALTER TABLE oxcategories ADD COLUMN AGCANONICALURL varchar(2048) NULL',
            'ALTER TABLE oxcategories ADD COLUMN AGCANONICALURL_1 varchar(2048) NULL',
            'ALTER TABLE oxcategories ADD COLUMN AGCANONICALURL_2 varchar(2048) NULL',
            'ALTER TABLE oxcategories ADD COLUMN AGCANONICALURL_3 varchar(2048) NULL',

            'ALTER TABLE oxmanufacturers ADD COLUMN AGCANONICALURL varchar(2048) NULL',
            'ALTER TABLE oxmanufacturers ADD COLUMN AGCANONICALURL_1 varchar(2048) NULL',
            'ALTER TABLE oxmanufacturers ADD COLUMN AGCANONICALURL_2 varchar(2048) NULL',
            'ALTER TABLE oxmanufacturers ADD COLUMN AGCANONICALURL_3 varchar(2048) NULL',

            'ALTER TABLE oxvendor ADD COLUMN AGCANONICALURL varchar(2048) NULL',
            'ALTER TABLE oxvendor ADD COLUMN AGCANONICALURL_1 varchar(2048) NULL',
            'ALTER TABLE oxvendor ADD COLUMN AGCANONICALURL_2 varchar(2048) NULL',
            'ALTER TABLE oxvendor ADD COLUMN AGCANONICALURL_3 varchar(2048) NULL',

            'ALTER TABLE oxcontents ADD COLUMN AGCANONICALURL varchar(2048) NULL',
            'ALTER TABLE oxcontents ADD COLUMN AGCANONICALURL_1 varchar(2048) NULL',
            'ALTER TABLE oxcontents ADD COLUMN AGCANONICALURL_2 varchar(2048) NULL',
            'ALTER TABLE oxcontents ADD COLUMN AGCANONICALURL_3 varchar(2048) NULL',
        ];

        foreach($queries as $query){
            try{
                \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute($query);
            }catch(\Exception $e){

            }
        }

    }
}
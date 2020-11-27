<?php

namespace Aggrosoft\CustomCanonicalUrl\Application\Controller\Admin;

trait CustomCanonicalUrlObjectSeoTrait
{
    public function render()
    {
        $sTemplate = parent::render();
        $this->_aViewData['blAllowCustomCanonicalUrl'] = true;
        return $sTemplate;
    }

    public function save ()
    {
        parent::save();

        $sCanonicalUrl = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('agcanonicalurl');
        $oObject = $this->getEditObject();
        if ($oObject) {
            $oObject->assign([
                'agcanonicalurl' => $sCanonicalUrl
            ]);
            $oObject->save();
        }
    }

    public function getCustomCanonicalUrl ()
    {
        $oObject = $this->getEditObject();
        if ($oObject) {
            return $oObject->getFieldData('agcanonicalurl');
        }
    }

    protected function getEditObject ()
    {
        $iLang = $this->getEditLang();

        if ($sType = $this->_getType()) {
            $oObject = oxNew($sType);
            if ($oObject->load($this->getEditObjectId())) {
                $oOtherLang = $oObject->getAvailableInLangs();
                if (!isset($oOtherLang[$iLang])) {
                    $oObject->loadInLang(key($oOtherLang), $this->getEditObjectId());
                }
            }
            return $oObject;
        }

    }
}
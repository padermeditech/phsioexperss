<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2019
 * @module      asy_b2b
 * @version     29.03.2019 2.0.0
 */
 
namespace AlphaSys\AsyB2B\Core;

class Config extends Config_parent {

    /**
     * Returns config parameter value if such parameter exists.
     * Manipulates config param blShowNetPrice if user is a dealer
     *
     * @param string $sName config parameter name
     * @param string $default default value
     *
     * @return mixed
     */
    public function getConfigParam($sName, $default = null)
    {
        $ret = parent::getConfigParam($sName, $default);
        
        //if b2b config param
        if($sName == "blShowNetPrice"){
            if($this->showNetPrice()){
                return true;
            }
        }
        return $ret;
    }
    
    /**
     * Checks if user is in dealer group
     * 
     * @return boolean
     */
    public function showNetPrice(){
        $oUser = $this->getUser();

        // check if user is in any of the configured groups
        $groups = $this->getShopConfVar('aB2BCustomerGroups', null, 'module:asy_b2b');

        if($oUser){
            foreach($groups as $group){
                if($oUser->inGroup('oxiddealer')){
                    return true;
                }
            }
        }
    }
}

<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/app_model.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.model
 */
class AppModel extends Model {
    /** 
     * Makes a subquery 
     * @param strin|array $type The type o the query (only available 'count') or the $options 
     * @param string|array $options The options array or $alias in case of $type be a array 
     * @param string $alias You can use this intead of $options['alias'] if you want 
     */ 
    public function subquery($type, $options = null, $alias = null){ 
        $fields = array(); 
        if(is_string($type)){ 
            $isString = true; 
        }else{ 
            $alias = $options; 
            $options = $type; 
        } 
         
        if($alias === null){ 
            $alias = $this->alias . '2'; 
        } 
         
        if(isset($isString)){ 
            switch ($type){ 
                case 'count': 
                    $fields = array('COUNT(*)'); 
                    break; 
            } 
        } 
         
        $dbo = $this->getDataSource(); 
                 
        $default = array( 
            'fields' => $fields, 
            'table' => $dbo->fullTableName($this), 
            'alias' => $alias, 
            'limit' => null, 
            'offset' => null, 
            'joins' => array(), 
            'conditions' => array(), 
            'order' => null, 
            'group' => null 
        ); 
         
        $params = array_merge($default, $options); 
        $subQuery = $dbo->buildStatement($params, $this); 
         
        return $subQuery; 
    }
    
}

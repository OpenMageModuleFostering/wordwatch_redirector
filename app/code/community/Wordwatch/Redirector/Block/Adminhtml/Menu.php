<?php

/**
 *
 * @category   WordWatch
 * @package    WordWatch_Redirector
 * @author     Maciej Mensfeld <maciej@wordwatch.com>
 */
class Wordwatch_Redirector_Block_Adminhtml_Menu extends Mage_Adminhtml_Block_Page_Menu
{
	public function getMenuArray()
	{
		$parentArr = parent::getMenuArray();
		$parentArr['view_sites'] = array(
			'label' => 'WordWatch',
			'active'=>false ,
			'sort_order'=>0,
			'url'=>'https://my.wordwatch.com/login?utm_source=magento&utm_medium=partner&utm_campaign=e-commerce%2Bplatforms/',
			'level'=>0,
			'last'=> true
		);
		return $parentArr;
        }
}

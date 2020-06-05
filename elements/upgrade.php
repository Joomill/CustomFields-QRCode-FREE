<?php
/**
 *  package: Custom Fields - QR Code plugin - FREE Version
 *  copyright: Copyright (c) 2020. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

class JFormFieldUpgrade extends JFormField
{
	protected $type = 'upgrade';

	protected function getInput()
	{
		return
			'<p class="alert alert-warning">You are using the Free version. For more functionality you can purchase the PRO version. <a href="https://www.joomill-extensions.com/subscribe/product/custom-fields-plugins?coupon=UP2PRO10" target="_blank" class="btn btn-small btn-primary">Get <b>10% discount</b> after trying!</a></p>';
	}


}
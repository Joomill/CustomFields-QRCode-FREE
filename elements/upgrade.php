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
            '<div class="alert alert-success text-center small">This is the FREE version of Joomill Custom Fields plugin. <br/> Some features and support are only available in the <a class="alert-link" target="_blank" href="https://www.joomill-extensions.com/extensions/custom-fields-plugins">PRO Version</a></div>';
	}


}
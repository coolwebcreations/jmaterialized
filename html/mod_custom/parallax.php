<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="parallax-container hide-on-med-and-down">
	<div class="parallax">
  		<img class="responsive-img" src="<?php echo $params->get('backgroundimage');?>">
	</div>
	<div class="<?php echo $moduleclass_sfx ?>">
		<?php echo $module->content;?>
	</div>  		
</div>

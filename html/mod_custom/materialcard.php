<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * Template JMaterialized by cool Webcreations
 */

defined('_JEXEC') or die;
?>

          <div class="<?php echo $moduleclass_sfx ?>">
            <?php if ($params->get('backgroundimage')) : ?>
            <div class="card-image">
              <img src="<?php echo $params->get('backgroundimage');?>">
              <span class="card-title"><?php echo $module->title;?></span>
            </div>
            <?php endif;?>
            <?php if ($module->showtitle) : ?>
            	<span class="card-title">
                <h2><?php echo $module->title;?></h2></span>
            <?php endif;?>
            <div class="card-content">
              <?php echo $module->content;?>
            </div>
          </div>

<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * modified for MaterialsCSS by coolwebcreations
 * Template JMaterialized by cool Webcreations
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');
?>

<nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <?php if ($params->get('showHere', 1)) : ?>
        	<a href="#!" class="breadcrumb"><?php echo JText::_('MOD_BREADCRUMBS_HERE'); ?>&#160;</a>
        <?php else : ?>
        	<a href="#!" class="breadcrumb"><span class="divider icon-location"></span></a>
        <?php endif; ?>
        
        <?php
		// Get rid of duplicated entries on trail including home page when using multilanguage
		for ($i = 0; $i < $count; $i++)
		{
			if ($i == 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link == $list[$i - 1]->link)
			{
				unset($list[$i]);
			}
		}

		// Find last and penultimate items in breadcrumbs list
		end($list);
		$last_item_key   = key($list);
		prev($list);
		$penult_item_key = key($list);

		// Make a link if not the last item in the breadcrumbs
		$show_last = $params->get('showLast', 1);

		// Generate the trail
		foreach ($list as $key => $item) :
		if ($key != $last_item_key) :
			// Render all but last item - along with separator ?>
				<?php if (!empty($item->link)) : ?>
					<a itemprop="item" href="<?php echo $item->link; ?>" class="breadcrumb"><span itemprop="name"><?php echo $item->name; ?></span></a>
				<?php else : ?>
        			<a itemprop="name" href="#" class="breadcrumb"><span itemprop="name"><?php echo $item->name; ?></span></a>
				<?php endif; ?>
				<meta itemprop="position" content="<?php echo $key + 1; ?>">
		<?php elseif ($show_last) :
			// Render last item if reqd. ?>
      		<a itemprop="item" href="<?php echo $item->link; ?>" class="breadcrumb"><span itemprop="name"><?php echo $item->name; ?></span></a>
		<?php endif;
		endforeach; ?>
        
        
        
      </div>
    </div>
</nav>

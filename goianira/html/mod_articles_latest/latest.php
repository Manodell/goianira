<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

	//echo "<pre>"; var_dump($list[0]->catid); echo "</pre>";

?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
	<?php $imageItems = json_decode($item->images); ?>
	<li itemscope itemtype="https://schema.org/Article">
		<img src="<?php echo $imageItems->image_intro;?>" itemprop="image" />
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
	</li>
<?php endforeach; ?>
<a href="<?php echo 'index.php?option=com_content&view=category&id=' . $list[0]->catid;?>">Ver todos</a>
</ul>


<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page">

<div class="container">
	<div id="nav" class="span-12 last">
	  <?php if ($main_menu_links || $secondary_menu_links): ?>
	      <?php print $main_menu_links; ?>
	  <?php endif; ?>
	</div>
</div>

<div id="wrapper" class="container">
	<div id="header" class="span-12 last">

		<div id="logo" class="span-2">
			<h1>NECTAR</h1>
		</div>

		<div id="tagline" class="span-10 last">
			<h2>VINTAGE/MODERN Floral Design</h2>
		</div>
		
	</div>

	<?php if ($page['header']): ?>
	<div id="header-region" class="region span-12 last">
		<?php print render($page['header']); ?>
	</div>
	<?php endif; ?>

		<?php if ($page['highlighted']): ?>
		<div id="highlighted" class="<?php print ns('span-12 last', $page['header'], 7); ?>">
		<?php print render($page['highlighted']); ?>
		</div>
		<?php endif; ?>

		<div id="main" class="span-12 last">

			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
			<h1 class="title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>

			<?php if ($page['featured']): ?>
			<div id="header-region" class="region span-12 last">
				<?php print render($page['featured']); ?>
			</div>
			<?php endif; ?>

			<?php if ($page['diptych_left']): ?>
			<div id="header-region" class="region span-6 last">
				<?php print render($page['diptych_left']); ?>
			</div>
			<?php endif; ?>

			<?php if ($page['diptych_right']): ?>
			<div id="header-region" class="region span-6 last">
				<?php print render($page['diptych_right']); ?>
			</div>
			<?php endif; ?>

			<?php print render($title_suffix); ?>      
			<?php if ($tabs): ?>
			<div class="tabs"><?php print render($tabs); ?></div>
			<?php endif; ?>
			<?php print $messages; ?>
			<?php print render($page['help']); ?>
			
			<div id="main-content" class="region clearfix">
			<?php print render($page['content']); ?>
			</div>
		</div>

	</div>
	
</div>

<div id="footer" class="span-12 last">
	<center>copyright 2011 Nectar</center>
</div>
</div>
</div>
</div>
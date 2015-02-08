<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<header>
					<div class="page-header">
						<h1 class="page-title slab">
							<span class="page-title-sub">The </span><?php the_title(); ?><span class="page-title-sub"> Page.</span>
						</h1>
					</div>
					<div class="page-subhead">
					</div>
				</header>
								
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
				<table id="flowertable" celpadding=0 cellspacing=0>

					<tr class="tr1">
						<td class="flowername tdl" colspan="1"><span class="tablehead">&nbsp;</span></td>
						<td colspan="3"><span class="tablehead"><center>Plant Features</center></span></td>
						<td colspan="4"><span class="tablehead"><center>Seasonal Availability</center></span></td>
					</tr>
	
					<tr class="tr2">
						<td class="flowername"><span class="tablehead">Name</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trbra">Branches</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trfol">Foliage</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trber">Berries</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trspr">Spring</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trsum">Summer</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trfal">Fall</span></td>
						<td class="tdc"><span class="tablehead"><a href="#" title="trwin">Winter</span></td>
					</tr>
	
					<?php $flowers_query = new WP_Query( 'post_type=flowers&posts_per_page=100&orderby=meta_value&meta_key=f101_common1&order=ASC' );
					$count = 0; ?>
					<?php while ( $flowers_query->have_posts() ) : $flowers_query->the_post(); ?>				
						<?php $count = $count + 1; ?>
						<tr class="
						<?php $bra = get_post_meta($post->ID, 'f101_branches', $single); if ($bra == on) echo 'trbraon'; else echo 'trbraoff'; ?>
						<?php $fol = get_post_meta($post->ID, 'f101_foliage', $single); if ($fol == on) echo 'trfolon'; else echo 'trfoloff'; ?>
						<?php $ber = get_post_meta($post->ID, 'f101_berries', $single); if ($ber == on) echo 'trberon'; else echo 'trberoff'; ?>
						<?php $spr = get_post_meta($post->ID, 'f101_spring', $single); if ($spr == on) echo 'trspron'; else echo 'trsproff'; ?>
						<?php $sum = get_post_meta($post->ID, 'f101_summer', $single); if ($sum == on) echo 'trsumon'; else echo 'trsumoff'; ?>
						<?php $fal = get_post_meta($post->ID, 'f101_fall', $single); if ($fal == on) echo 'trfalon'; else echo 'trfaloff'; ?>
						<?php $win = get_post_meta($post->ID, 'f101_winter', $single); if ($win == on) echo 'trwinon'; else echo 'trwinoff'; ?>
						">

							<td class="flowername tdl">
								<a href="#infocard<?php echo $count ; ?>" class="flowertog" title="<?php echo $count ; ?>"><?php echo get_post_meta($post->ID, 'f101_common1', $single); ?></a>
							</td>
							<?php $bra = get_post_meta($post->ID, 'f101_branches', $single); ?>
							<td class="fcol tdc <?php if ($bra == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
							<?php $fol = get_post_meta($post->ID, 'f101_foliage', $single); ?>
							<td class="fcol tdc <?php if ($fol == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
							<?php $ber = get_post_meta($post->ID, 'f101_berries', $single); ?>
							<td class="fcol tdc <?php if ($ber == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
	
							<?php $spr = get_post_meta($post->ID, 'f101_spring', $single); ?>
							<td class="fcol tdc <?php if ($spr == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
							<?php $sum = get_post_meta($post->ID, 'f101_summer', $single); ?>
							<td class="fcol tdc <?php if ($sum == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
							<?php $fal = get_post_meta($post->ID, 'f101_fall', $single); ?>
							<td class="fcol tdc <?php if ($fal == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
							<?php $win = get_post_meta($post->ID, 'f101_winter', $single); ?>
							<td class="fcol tdc <?php if ($win == on) echo 'on'; else echo 'off';  ?>">
								&nbsp;
							</td>
						</tr>
						<tr class="
						<?php $bra = get_post_meta($post->ID, 'f101_branches', $single); if ($bra == on) echo 'trbraon'; else echo 'trbraoff'; ?>
						<?php $fol = get_post_meta($post->ID, 'f101_foliage', $single); if ($fol == on) echo 'trfolon'; else echo 'trfoloff'; ?>
						<?php $ber = get_post_meta($post->ID, 'f101_berries', $single); if ($ber == on) echo 'trberon'; else echo 'trberoff'; ?>
						<?php $spr = get_post_meta($post->ID, 'f101_spring', $single); if ($spr == on) echo 'trspron'; else echo 'trsproff'; ?>
						<?php $sum = get_post_meta($post->ID, 'f101_summer', $single); if ($sum == on) echo 'trsumon'; else echo 'trsumoff'; ?>
						<?php $fal = get_post_meta($post->ID, 'f101_fall', $single); if ($fal == on) echo 'trfalon'; else echo 'trfaloff'; ?>
						<?php $win = get_post_meta($post->ID, 'f101_winter', $single); if ($win == on) echo 'trwinon'; else echo 'trwinoff'; ?>
						">
							<td colspan=8>
								<div class="infocard infocard<?php echo $count ; ?>">
									
									<h4><span class="gold"><?php the_title(); ?></span> info card</h4>
									
									<hr class="space">
									<hr>
									<hr class="space">
																		
									<h3>Latin Name:</h3>
									<p>
										<?php $latin = get_post_meta($post->ID, 'f101_latin', $single); if ($latin != null) echo $latin; ?>
									</p>
								
									<hr class="space">
									<hr>
									<hr class="space">
									
									<h3>Common Name(s):</h3>
									<p class="common1">
										<?php $common1 = get_post_meta($post->ID, 'f101_common1', $single); if ($common1 != null) echo $common1; ?>
									</p>
									<p>
										<?php $common2 = get_post_meta($post->ID, 'f101_common2', $single); if ($common2 != null) echo ",  " . $common2; ?>
									</p>
									<p>
										<?php $common3 = get_post_meta($post->ID, 'f101_common3', $single); if ($common3 != null) echo ",  " . $common3; ?>
									</p>
										
									<div class="flower-photo">
										<?php
										$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'posts_per_page'    => 1) );
										foreach ( $attachments as $attachment_id => $attachment ) {
											echo '<div>';
											echo wp_get_attachment_image($attachment_id, 'thumbnail', true);
											echo '</div>';
											echo the_post_thumbnail_caption();
										} ?>
									</div>
									
									<hr class="space">
									<hr>
									<hr class="space">

									
									<?php $col1 = get_post_meta($post->ID, 'f101_color1', $single);
									if ($col1 != null)
									echo "<h3>Color Variations:</h3>
									<table class=\"colortable\" cellspacing=\"2\" cellpadding=\"0\">
										<tr>
											<td><div class=\"colorbox\" style=\"background:#" . $col1 . "\">&nbsp;</td>";
									
									$col2 = get_post_meta($post->ID, 'f101_color2', $single);
									if ($col2 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col2 . "\">&nbsp;</div></td>";
									
									$col3 = get_post_meta($post->ID, 'f101_color3', $single);
									if ($col3 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col3 . "\">&nbsp;</div></td>";
									
									$col4 = get_post_meta($post->ID, 'f101_color4', $single);
									if ($col4 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col4 . "\">&nbsp;</div></td>";
									
									$col5 = get_post_meta($post->ID, 'f101_color5', $single);
									if ($col5 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col5 . "\">&nbsp;</div></td>";
									
									$col6 = get_post_meta($post->ID, 'f101_color6', $single);
									if ($col6 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col6 . "\">&nbsp;</div></td>";
									
									$col7 = get_post_meta($post->ID, 'f101_color7', $single);
									if ($col7 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col7 . "\">&nbsp;</div></td>";
									
									$col8 = get_post_meta($post->ID, 'f101_color8', $single);
									if ($col8 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col8 . "\">&nbsp;</div></td>";
									
									$col9 = get_post_meta($post->ID, 'f101_color9', $single);
									if ($col9 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col9 . "\">&nbsp;</div></td>";
									
									$col10 = get_post_meta($post->ID, 'f101_color10', $single);
									if ($col10 != null)
									echo "<td><div class=\"colorbox\" style=\"background:#" . $col10 . "\">&nbsp;</div></td>";
									
									$col1 = get_post_meta($post->ID, 'f101_color1', $single);
									if ($col1 != null)
									echo "</tr>
									</table>"; ?>
									
								</div>
							</td>
						</tr>
					<?php endwhile; ?>
				</table>
				
			
			</div>
		</div>
	</div>

<?php get_footer(); ?>
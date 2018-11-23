<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage FxTheme
 *
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is added to the sidebar
 * @uses $vars['nav']     Optional override of the page nav (default: breadcrumbs)
 * @uses $vars['header']  Optional override for the header
 * @uses $vars['footer']  Optional footer
 * @uses $vars['class']   Additional class to apply to layout
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

?>

<div class="<?php echo $class; ?>">
	<div class="elgg-main elgg-body" data-anijs="
	if: load, on: window, do: fadeIn animated, to: .elgg-layout-one-sidebar .elgg-main, before: $addClass visible, after: removeAnim;
	
	if: load, on: window, do: fadeIn animated, to: .elgg-layout-one-sidebar .elgg-sidebar, before: $addClass visible, after: removeAnim;
	if: scroll, on:window, do: bounceIn animated, to: .elgg-pagination, before: scrollReveal, after: removeAnim;
	if: scroll, on:window, do: bounceIn animated, to: .elg-main .elgg-item .elgg-avatar, before: scrollReveal, after: removeAnim;
	if: load, on:window, do: bounceIn animated, to: .elg-main .elgg-item .elgg-avatar, before: scrollReveal, after: removeAnim;
	if: scroll, on:window, do: bounceIn animated, to: .elgg-main .elgg-item .elgg-image, before: scrollReveal, after: removeAnim;
	if: load, on:window, do: bounceIn animated, to: .elgg-main .elgg-item .elgg-image, before: scrollReveal, after: removeAnim;
	
	">
		<?php
			echo elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

			echo elgg_view('page/layouts/elements/header', $vars);

			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			if (isset($vars['content'])) {
				echo $vars['content'];
			}

			echo elgg_view('page/layouts/elements/footer', $vars);
		?>
	</div>
	<div class="elgg-sidebar">
		<?php
			// With the mobile experience in mind, the content order is changed in FX theme,
			// by moving sidebar below main content.
			// On smaller screens, blocks are stacked in left to right order: content, sidebar.
			echo elgg_view('page/elements/sidebar', $vars);
		?>
	</div>
</div>

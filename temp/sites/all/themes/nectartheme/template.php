<?php
// $Id: template.php,v 1.1.2.6.4.2 2011/01/11 01:08:49 dvessel Exp $

/**
 * The default group for nectartheme framework CSS files added to the page.
 */
define('CSS_NS_FRAMEWORK', -200);

/**
 * Implements hook_preprocess_html
 */
function nectartheme_preprocess_html(&$vars) {
  $vars['classes_array'][] = 'show-grid';
}

/**
 * Implements Name template
 */
function theme_preprocess_page(&$vars, $hook) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    switch($alias) {
      case "override":
        $vars['template_files'][] = "page-different-filename";
	  break;
      default:
        if($alias != $_GET['q']) {
	  $template_filename = 'page';
	  foreach (explode('/', $alias) as $path_part) {
	    $template_filename = $template_filename . '-' . $path_part;
	    $vars['template_files'][] = $template_filename;
	  }
        }
	break;
      }
   }
}

/**
 * Preprocessor for page.tpl.php template file.
 */
function nectartheme_preprocess_page(&$vars, $hook) {

  // Site navigation links.
  $vars['main_menu_links'] = '';
  if (isset($vars['main_menu'])) {
    $vars['main_menu_links'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'id' => 'main-menu',
        'class' => array('inline', 'main-menu'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }
  $vars['secondary_menu_links'] = '';
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu_links'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'id'    => 'secondary-menu',
        'class' => array('inline', 'secondary-menu'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }

}

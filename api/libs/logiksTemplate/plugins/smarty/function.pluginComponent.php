<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 * @author		Bismay Kumar Mohaptra
 */

function smarty_function_pluginComponent($params) {
	$src=explode(".",$params['src']);
	if(count($src)<=2) {
		trigger_error("Plugin defination not proper", E_USER_ERROR);
	}
	loadModuleComponent($src[1],$src[0]);
}
?>

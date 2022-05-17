<?php

require_once 'eventcalendar.civix.php';
use CRM_EventCalendar_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function eventcalendar_civicrm_config(&$config) {
  _eventcalendar_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function eventcalendar_civicrm_xmlMenu(&$files) {
  _eventcalendar_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function eventcalendar_civicrm_install() {
  _eventcalendar_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function eventcalendar_civicrm_uninstall() {
  _eventcalendar_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function eventcalendar_civicrm_enable() {
  _eventcalendar_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function eventcalendar_civicrm_disable() {
  _eventcalendar_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function eventcalendar_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _eventcalendar_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function eventcalendar_civicrm_managed(&$entities) {
  _eventcalendar_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function eventcalendar_civicrm_caseTypes(&$caseTypes) {
  _eventcalendar_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function eventcalendar_civicrm_angularModules(&$angularModules) {
  _eventcalendar_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function eventcalendar_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _eventcalendar_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function eventcalendar_civicrm_preProcess($formName, &$form) {
}*/

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
function eventcalendar_civicrm_navigationMenu(&$menu) {
_eventcalendar_civix_insert_navigation_menu($menu, 'Events', array(
'label' => ts('Show Events Calendar', array('domain' => 'com.osseed.eventcalendar')),
'name' => 'Show Events Calendar',
'url' => 'civicrm/showevents',
'permission' => 'view event info',
'operator' => 'AND',
'separator' => 0,
));
_eventcalendar_civix_navigationMenu($menu);

_eventcalendar_civix_insert_navigation_menu($menu, 'Administer/CiviEvent', array(
'label' => ts('Event Calendar Settings', array('domain' => 'com.osseed.eventcalendar')),
'name' => 'Event Calendar Settings',
'url' => 'civicrm/admin/event-calendar',
'permission' => 'administer CiviCRM',
'operator' => 'AND',
'separator' => 0,
));
_eventcalendar_civix_navigationMenu($menu);
}
<?php

require_once 'bikemddiscounts.civix.php';

define('DISCOUNT_CODE_FIELD', 'discountcode');

function bikemddiscounts_civicrm_buildForm($formName, &$form) {
    $version = CRM_Utils_System::version();

    if ($form->elementExists(DISCOUNT_CODE_FIELD)){
         $templatePath = realpath(dirname(__FILE__) . "/templates");
        CRM_Core_Region::instance('page-body')->add(array(
            'template' => "{$templatePath}/discounts.tpl"
        ));
    }
}

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function bikemddiscounts_civicrm_config(&$config) {
  _bikemddiscounts_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function bikemddiscounts_civicrm_xmlMenu(&$files) {
  _bikemddiscounts_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function bikemddiscounts_civicrm_install() {
  _bikemddiscounts_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function bikemddiscounts_civicrm_uninstall() {
  _bikemddiscounts_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function bikemddiscounts_civicrm_enable() {
  _bikemddiscounts_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function bikemddiscounts_civicrm_disable() {
  _bikemddiscounts_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function bikemddiscounts_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _bikemddiscounts_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function bikemddiscounts_civicrm_managed(&$entities) {
  _bikemddiscounts_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function bikemddiscounts_civicrm_caseTypes(&$caseTypes) {
  _bikemddiscounts_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function bikemddiscounts_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _bikemddiscounts_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

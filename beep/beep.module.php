<?php

/**
 * @file
 * Provide a simulated beep.
 */

function beep_beep()
{
	watchdog('beep', 'Beep!');
}

/**
 * Implementation of hook_user_login()
 */
function beep_user(&$edit, $account)
{
	beep_beep();
}

/**
 * Implementation of hook_node_insert()
 */
function beep_node_insert($node)
{
	beep_beep();
}
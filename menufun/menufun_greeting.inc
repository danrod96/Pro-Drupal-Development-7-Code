<?php

/**
 * Page callback
 */
function menufun_greeting($first_name = '', $last_name = '')
{
	return t('Hello @first_name @last_name!', array('@first_name' => $first_name, '@last_name' => $last_name));
}

function menufun_farewell()
{
	return t('Goodbye');
}
<?php
/**
 * @file
 *
 * This is the template file for rendering the formexample nameform.
 * In this file each element of the form is rendered individually
 * instead of the entire form at once, giving me the ultimate control
 * over how my forms are laid out. I could also print the whole form
 * at once - using the predefined layout in the module by
 * printing $variables['formexample_nameform_form'];
 *
 */
 print '<div id="formexample_nameform_form">';
 print $variables['formexample_nameform']['color'];
 print $variables['formexample_nameform']['name'];
 print $variables['formexample_nameform']['country'];
 print $variables['formexample_nameform']['flavor'];
 print $variables['formexample_nameform']['pet_name'];
 print $variables['formexample_nameform']['pass'];
 print $variables['formexample_nameform']['pet_habits'];
 print $variables['formexample_nameform']['pet_tail'];
 print $variables['formexample_nameform']['date'];
 print $variables['formexample_nameform']['tests'];
 print $variables['formexample_nameform']['hiddenfield'];
 print $variables['formexample_nameform']['deadline'];
 print $variables['formexample_nameform']['picture'];
 print $variables['formexample_nameform']['manufacturer_dropdown'];
 print $variables['formexample_nameform']['model_dropdown'];
 print $variables['formexample_nameform']['submit'];
 print $variables['formexample_nameform']['hidden'];
 print '</div>';

 dpm($variables['formexample_nameform']['color']);

 //print $variables['formexample_nameform_form'];
?>

<?php


// If you use these functions and settings, make sure that the CSS
// is correctly written to layout.css by:
// 1. Fresh reload of Thesis Design Options page,
// 2. Save options using big button,
// 3. Refresh the target page.
// This is necessary because Thesis reads from layout.css on 
// every page load, but it doesn't write to layout.css unless
// the design options are saved.  Exercise for the reader:
// Figure out how to invoke saving the design options from 
// this function without inducing a White Screen Of Death.
/*
function hrecipe_set_default_thesis_options() {
   $design_options = new thesis_design_options;
   $design_options->get_options();
   $design_options->multimedia_box['status'] = 0;         
   $design_options->borders['show'] = false;
   $design_options->layout['columns'] = '2';
   $design_options->layout['widths'] = array('content' => 580, 'sidebar_1' => 250);
   $design_options->layout['order'] = 'normal';   
   $design_options->layout['framework'] = 'page'; 
   
   update_option('thesis_design_options', $design_options);
}  
hrecipe_set_default_thesis_options();
*/

/*

<form method="post" class="af-form-wrapper" action="http://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="324068116" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="hrecipe" />
<input type="hidden" name="redirect" value="http://www.aweber.com/thankyou-coi.htm?m=text" id="redirect_d3608c275682f44e4765e3c31aff1a04" />

<input type="hidden" name="meta_adtracking" value="My_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-324068116" class="af-form"><div id="af-header-324068116" class="af-header"><div class="bodyText"><p>&nbsp;</p></div></div>
<div id="af-body-324068116" class="af-body af-standards">
<div class="af-element">
<label class="previewLabel" for="awf_field-19149425">Name: </label>
<div class="af-textWrap">
<input id="awf_field-19149425" type="text" name="name" class="text" value=""  tabindex="500" />
</div>
<div class="af-clear"></div></div>
<div class="af-element">
<label class="previewLabel" for="awf_field-19149426">Email: </label>
<div class="af-textWrap"><input class="text" id="awf_field-19149426" type="text" name="email" value="" tabindex="501"  />
</div><div class="af-clear"></div>
</div>
<div class="af-element buttonContainer">
<input name="submit" class="submit" type="submit" value="Read by email" tabindex="502" />
<div class="af-clear"></div>
</div>
<div class="af-element privacyPolicy" style="text-align: center"><p><a title="Privacy Policy" href="http://www.aweber.com/permission.htm" target="_blank">We respect your email privacy</a></p>
<div class="af-clear"></div>
</div>

</div>

<div id="af-footer-324068116" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>

<div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=zEwsDGwcjIxs" alt="" /></div>

</form>


 */

 
remove_action('thesis_hook_footer', 'thesis_attribution'); 
function hrecipe_site_copyright() {
  echo '<p>
  Copyright &copy; 2009-2011 David M. Doolin | 
  <a href="http://www.shareasale.com/r.cfm?b=198392&u=403468&m=24570&urllink=&afftrack=" rel="nofollow">Thesis Theme for WordPress</a> | 
  <a href="http://www.shareasale.com/r.cfm?b=214486&u=403468&m=25929&urllink=&afftrack=" rel="nofollow">Scribe Makes SEO Simple</a>
  </p>';
}
add_action('thesis_hook_footer', 'hrecipe_site_copyright');
 
function hrecipe_required_pages() {
  $pages = <<<EOF
  <p>
  <a href="http://hrecipe.com/disclosure">Disclosure</a> |
  <a href="http://hrecipe.com/disclaimer">Disclaimer</a> |
  <a href="http://hrecipe.com/privacy-policy">Privacy Policy</a>
  </p>
EOF;
  echo $pages;
} 
add_action('thesis_hook_footer', 'hrecipe_required_pages'); 

 
if (file_exists(THESIS_CUSTOM . '/is_custom_pages.php')){
  include(THESIS_CUSTOM . '/is_custom_pages.php');
}

/*
if (file_exists(THESIS_CUSTOM . '/header_footer_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/header_footer_nosidebar_18.php');
}

if (file_exists(THESIS_CUSTOM . '/header_nofooter_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/header_nofooter_nosidebar_18.php');
}

if (file_exists(THESIS_CUSTOM . '/noheader_nofooter_nosidebar_18.php')){
  include(THESIS_CUSTOM . '/noheader_nofooter_nosidebar_18.php');
}
*/
?>

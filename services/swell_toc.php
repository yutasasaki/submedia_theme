<?php 
function toc_open_close($the_content) {
$SETTING = \SWELL_FUNC::get_setting();
$tocBef = '<span class="p-toc__ttl">' . $SETTING['toc_title'];
  $tocAft = '</span>';
$add_content1 = '<input type="checkbox" class="toc-chk" id="tocChk">';
$add_content2 = '<label class="toc-ttl" for="tocChk"></label>';
$the_content = str_replace($tocBef.$tocAft, $add_content1.$tocBef.$add_content2.$tocAft, $the_content);
return $the_content;
}
add_filter('the_content','toc_open_close',13);
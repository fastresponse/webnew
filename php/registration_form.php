<?php

function registration_form($text, $url, $args = null, $target = '_self') {
  $query_str = '';
  $hidden_els = '';
  if ($args === null) $args = array();
  if (count($args)) {
    foreach ($args as $key => $value) {
      $query[] = "{$key}={$value}";
      $hidden[] = "<input type=\"hidden\" name=\"{$key}\" value=\"{$value}\" />";
    }
    $query_str = '?' . implode('&', $query);
    $hidden_els = implode("\n  ", $hidden);
  }
  $url .= $query_str;

  $out = <<<"HTML"
<form action="{$url}" method="get" class="registration-btn" target="{$target}">
  <input type="submit" class="register-btn" value="{$text}" />
  {$hidden_els}
</form>
HTML;

  return $out;
}

?>

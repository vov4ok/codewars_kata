function cmp($a, $b)
{
  $aa = array_sum(str_split($a));
  $bb = array_sum(str_split($b));
  if ($aa==$bb)
    return strcasecmp(strval($a),strval($b));
  return $aa <=> $bb;
}

function orderWeight($str) {
  $nums = explode(" ", $str);
  usort($nums, 'cmp');
  return implode(' ', $nums);
}
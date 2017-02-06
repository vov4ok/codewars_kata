function mysort($a, $b){
    if (array_sum(str_split($a)) == array_sum(str_split($b))){
    return (strcasecmp($a, $b)<0)?-1:1;
}
    return (array_sum(str_split($a)) < array_sum(str_split($b))) ? -1 : 1;
}

function orderWeight($str) {
  $nums = explode(" ", $str);
  usort($nums, "mysort");
  return implode(' ', $nums);
}
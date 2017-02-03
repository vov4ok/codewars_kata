function string_transformer(string $s): string {
  $answer = str_split($s);
  foreach ($answer as $key=>$val){
    $answer[$key]=ctype_upper($val)?strtolower($val):strtoupper($val);
  }
  return implode(' ', array_reverse(explode(' ', implode($answer))));
}
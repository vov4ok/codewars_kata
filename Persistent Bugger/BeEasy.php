function persistence(int $num): int {
  $answer = 0;
  while (count(str_split($num))>1){
    $answer++;
    $num = array_product(str_split($num));
  }
  return $answer;
}
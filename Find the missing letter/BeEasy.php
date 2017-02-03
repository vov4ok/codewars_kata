function find_missing_letter(array $array): string {
  $alpha = range($array[0], end($array));
  for ($i = 0; $i<count($array); $i++){
    if($array[$i]!=$alpha[$i]){
      return $answer = $alpha[$i];
      break;}
  }
}
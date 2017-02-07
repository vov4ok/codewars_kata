function productFib($prod) {
  $arr = [];
  $p0 = 1;
  $p1 = 1;
  while($p1*$p0<$prod){
    $temp = $p0;
    $p0 = $p1; 
    $p1 = $temp+$p0;
    if($p1*$p0==$prod){
      return [$p0,$p1, true];
    }
  }
  return [$p0,$p1, false];
}
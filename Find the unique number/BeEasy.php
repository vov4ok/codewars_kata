function find_uniq($a) {
 for($i = 1; $i<count($a)-1;$i++){
    if($a[$i]!=$a[$i-1]){
       if($a[$i]!=$a[$i+1]){
          return $a[$i];
          break;
        }else{
          return $a[$i-1];
          break;
        }
    }
}
}
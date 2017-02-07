function nbYear($p0, $percent, $aug, $p) {
$answer = 0;
    while(intval($p0)<$p){
$p0 = $p0 + $p0*$percent/100 + $aug;
$answer++;
} 
return $answer;
}
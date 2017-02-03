function solution($number){
    $summ = 0;
    while($number-->2){
       $summ+=($number%3==0||$number%5==0)?$number:0;
    }
    return $summ;
}
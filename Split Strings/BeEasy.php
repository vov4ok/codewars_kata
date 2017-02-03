function solution($str) {
 $foo = str_split($str, 2);
 if(strlen(end($foo))<2)
{$foo[count($foo)-1].='_';
}
 return $foo;
}
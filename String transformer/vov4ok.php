function string_transformer(string $s): string {
  return implode(' ', array_reverse(explode(' ', 
  strtr($s, implode('', array_merge(range('A','Z'), range('a', 'z'))), implode('', array_merge(range('a','z'), range('A', 'Z')))))));
}
function find_uniq($a) {
  return array_search(1, array_count_values(explode('#', implode('#', $a))));
}
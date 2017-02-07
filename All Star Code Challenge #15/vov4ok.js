function rotate(str){
  let arr = [];
  for(let i = 0; i < str.length; i++)
    arr.push(str.slice(i+1) + str.slice(0,i+1));
  return arr;
}
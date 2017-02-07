function rotate(str){
  var answer = [];
  for(var i = 1; i<= str.length; i++){
    str +=str.substr(0, 1);
    str = str.replace(str.substr(0, 1),'');
    answer.push(str);
}
return answer;
}
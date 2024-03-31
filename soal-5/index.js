function getLengthOfString(str) {
  if (typeof str === 'number') {
    str = str.toString();
  }
  return str.length;
}

console.log(getLengthOfString(3204657895));

function countFractionOfMoney(totalMoney) {

  let fractionOf100rb = 0;
  let fractionOf50rb = 0;
  let fractionOf20rb = 0;
  let fractionOf5rb = 0;
  let fractionOf100 = 0;
  let fractionOf50 = 0;

  while (totalMoney >= 100000) {
    fractionOf100rb++;
    totalMoney -= 100000;
  }

  while (totalMoney >= 50000) {
    fractionOf50rb++;
    totalMoney -= 50000;
  }

  while (totalMoney >= 20000) {
    fractionOf20rb++;
    totalMoney -= 20000;
  }

  while (totalMoney >= 5000) {
    fractionOf5rb++;
    totalMoney -= 5000;
  }

  while (totalMoney >= 100) {
    fractionOf100++;
    totalMoney -= 100;
  }

  while (totalMoney >= 50) {
    fractionOf50++;
    totalMoney -= 50;
  }

  console.log(`Rp 100.000: ${fractionOf100rb}`);
  console.log(`Rp 50.000: ${fractionOf50rb}`);
  console.log(`Rp 20.000: ${fractionOf20rb}`);
  console.log(`Rp 5.000: ${fractionOf5rb}`);
  console.log(`Rp 100: ${fractionOf100}`);
  console.log(`Rp 50: ${fractionOf50}`);
}

countFractionOfMoney(1575250);

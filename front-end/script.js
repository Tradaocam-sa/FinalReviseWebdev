const tp = document.querySelector("#truePositive");
const fn = document.querySelector("#falseNegative");
const fp = document.querySelector("#falseNegagtive");
const tn = document.querySelector("#trueNegative");

const form = document.querySelector("#form");



const inputValue = document.querySelectorAll("input");
const errorElement = document.querySelector("#error");

form.addEventListener('submit', (e) => {
  let messages = [];
  if(parseInt(tp.value) <= 0 || parseInt(fn.value) <= 0 || parseInt(fp.value) <= 0 || parseInt(tn.value) <= 0){
    messages.push("Wrong Data Type");
  }

  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join(', ');


  }

 
});
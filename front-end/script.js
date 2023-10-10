
const form = document.querySelector('form');


form.addEventListener('submit', (e) => {
  const truePositive = document.querySelector("#truePositive");
  const falseNegative = document.querySelector("#falseNegative");
  const trueNegative = document.querySelector("#trueNegative");
  const falsePositive = document.querySelector("#falsePositive");
  const inputValue = document.querySelectorAll(".input").value;
  let object = {
    "truePositive": truePositive.value,
    "falseNegative": falseNegative.value,
    "trueNegative": trueNegative.value,
    "falsePositive": falsePositive.value
  }
  for (const value in object) {
    if (value < 0) {
      alert("wrong");
    }
  }


  console.log(Object.values(object));
  e.preventDefault();

  fetch("http://localhost/FinalRevise/back-end/script.php", {
    "method": "POST",
    "headers": {
      "Content-Type": "application/json; charset=utf-8"
    },
    "body": JSON.stringify(object)
  })
  .then((res) => {
    return res;
  })
  .then((data) => {
    console.log(data);
  })
});




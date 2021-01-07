const interestRateButtons = document.querySelectorAll(".interest-rate-button");
const monthButtons = document.querySelectorAll(".month-button");
let principle = 100000;
let annualInterest = 5;
let interestRate = 4;
let periodInMonths = 12;
let interestPerYear = 0;
let interestPerMonth = 0;
let totalInterest = 0;
let totalPayment = 0;
let paymentPerMonth = 0;
let price = parseFloat(document.getElementById('priceofbike').innerText);

for (var i = 0; i < interestRateButtons.length; i++) {
  interestRateButtons[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("interest-active");

    if (current.length > 0) {
      current[0].className = current[0].className.replace(
        " interest-active",
        ""
      );
    }
    this.className += " interest-active";

    interestRate = parseInt(this.id);

    calculateInterest();
  });
}

for (var i = 0; i < monthButtons.length; i++) {
  monthButtons[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("month-active");

    if (current.length > 0) {
      current[0].className = current[0].className.replace(" month-active", "");
    }
    this.className += " month-active";

    periodInMonths = parseInt(this.id);

    calculateInterest();
  });
}

function calculateInterest() {
  document.getElementById("period-in-months").innerHTML = periodInMonths;
  document.getElementById("interest-per-year").innerHTML = price * (interestRate / 100)+"฿";
  document.getElementById("interest-per-month").innerHTML = (price * (interestRate / 100)) / 12+"฿";
  document.getElementById("total-interest").innerHTML = (price * (interestRate / 100) * periodInMonths) / 12+"฿";
  document.getElementById("total-payment").innerHTML = price + (price * (interestRate / 100) * periodInMonths) / 12+"฿";
  document.getElementById("total-payment-per-month").innerHTML = (price + (price * (interestRate / 100) * periodInMonths) / 12) /
    periodInMonths+"฿";
}

//Picture of bikes
$('.thumbnail').on('click', function() {
  var clicked = $(this);
  var newSelection = clicked.data('big');
  var $img = $('.primary').css("background-image","url(" + newSelection + ")");
  clicked.parent().find('.thumbnail').removeClass('selected');
  clicked.addClass('selected');
  $('.primary').empty().append($img.hide().fadeIn('slow'));
});
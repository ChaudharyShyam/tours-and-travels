<!DOCTYPE html>
<div class="payment-method-container">
<p><strong>Total Cost:</strong> $<span id="totalPrice"></span></p>
    <h2>Select Payment Method</h2>
    <select id="payment-method" style="width: 20%; margin-top: 3%;">
        <option value="select">select...</option>
        <option value="upi">UPI</option>
        <option value="debit-card">Debit Card</option>
        <option value="credit-card">Credit Card</option>
        <option value="bank">Bank Transfer</option>
    </select>

    <div id="upi" class="payment-method-detail">
        <div class="radio-container">
        <input type="radio" id="payid" name="paymentMethod" value="upiId">
        <label for="payid">Pay With UPI id</label><br>
        <input type="radio" id="paytm" name="paymentMethod" value="paytm">
        <label for="paytm">Pay With Paytm Number</label><br>
        <input type="radio" id="scanid" name="paymentMethod" value="scanId">
        <label for="scanid">Scan The QR code</label><br>
    </div>
    <div id="upiContent" style="display: none; margin-top: 4%; justify-content: center;">
        <img src="https://zeevector.com/wp-content/uploads/Bhim-Upi-Logo-PNG.png" alt="upilogo" style="width: 250px; height: 30px;"><br><br>
        <label for="Bname">Banking Name:</label><br><br>
        <input id="Bname" class="input" name="Bname" type="text" /><br><br>
        <label for="upiid">Enter Your Upi Id:</label><br><br>
        <input id="upiid" class="input" name="upiid" type="text" />
        <button id="payNowBtn" class="Btn">Pay Now  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0-24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0-24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
       
    </div>
    <div id="scanContent" style="display: none;">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/QrCode.jpeg" alt="QR" style="height: 500px; width: fit-content; margin-left: 40%;">
      
    </div>
    <div id="numContent" style="display: none; margin-top: 4%;">
        <img src="https://assetscdn1.paytm.com/images/catalog/category/5165/paytm_logo.png" alt="paytm" style="width: 250px; height: 60px;"><br><br>
        <label for="phone">Enter Your Mobile Number Linked With Paytm:</label><br><br>
        <input itype="tel" id="phone" name="phone" class="input" pattern="[0-9]{2,}" required>
        <button id="payNow" class="Btn">Pay Now  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0-24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0-24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
    </div>
    </div>

    <div id="debit-card" class="payment-method-detail">
        <div class="credit-card-form">
            <h2>Debit Card Payment</h2>
           
              <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="Card number" required>
              </div>
              <div class="form-group">
                <label for="card-holder">Card Holder</label>
                <input type="text" id="card-holder" placeholder="Card holder's name" required>
              </div>
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="expiry-date">Expiry Date</label>
                  <input type="text" id="expiry-date" placeholder="MM/YY" required >
                </div>
                <div class="form-group form-column">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" placeholder="CVV">
                </div>
              </div>
              <button id="debit" class="class-button">Pay Now  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0-24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0-24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
        
          </div>
          
          <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/cards2.png" alt="alt" style="width: 500px; height: 100px; margin-top: 5%; margin-left: 20%;">

    </div>
    <div id="credit-card" class="payment-method-detail">
        <div class="credit-card-form">
            <h2>Credit Card Payment</h2>
           
              <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="Card number" required>
              </div>
              <div class="form-group">
                <label for="card-holder">Card Holder</label>
                <input type="text" id="card-holder" placeholder="Card holder's name" required>
              </div>
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="expiry-date">Expiry Date</label>
                  <input type="text" id="expiry-date" placeholder="MM/YY" required >
                </div>
                <div class="form-group form-column">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" placeholder="CVV">
                </div>
              </div>
              <button id="credit" class="class-button">Pay Now  <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0-24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0-24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
        
          </div>
          <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/cards2.png" alt="alt" style="width: 500px; height: 100px; margin-top: 5%; margin-left: 20%;">

    </div>
    <div id="bank" class="payment-method-detail">
        <h5 style="text-align: center; font-size: 20px;">Bank Transfer Details</h5>
        <div class="bank" style="margin-top: 4%;">
       <p>Bank Account Holder Name : Annapurana Caterers Pvt. Ltd</p><br>
       <p>Bank Account Number : 1745672699</p><br>
       <p>Ifsc Cide : KKBK0000627</p><br>
       <div class="inputContainer">
	  <input required="" class="customInput" type="text">
	  <label class="inputLabel">Your Name</label>
	  <div class="inputUnderline"></div>
	</div>

 
     <button id="bank" class="Btn" style="margin-top: 3%;">Submit <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0-24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0-24-10.7 24-24s-10.7-24-24-24H248z"></path></svg></button>
    </div>
    </div>
    <form action="payment" method="post">
    <div id="payment-success-popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid #ccc; box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.1);  height: 35%;">
        <h2>Payment Successful</h2>
        <p>Your Payment Is Successful</p><br><br>
        <p>Click On Download Reciept To Order Reciept </p>
        <a href="bill.php">Download</a>
        <p id="payment-method-label" hidden>Payment Method: <span id="selected-payment-method"></span></p>
         <input type="hidden" name="paymethod" value="">
    </div>
    <div id="timer" style="position: absolute; top: 20px; right: 20px; display: none;">
        Processing Your Request: <span id="timer-counter">10</span> seconds
    </div>
  </form>
</div>

</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {

const payWithUPI = document.getElementById("payid");
const scanTheQR = document.getElementById("scanid");
const payWithnum = document.getElementById("paytm")
const upiContent = document.getElementById("upiContent");
const scanContent = document.getElementById("scanContent");
const numContent = document.getElementById("numContent");
const payNowBtn = document.getElementById("payNowBtn");
const payNow = document.getElementById("payNow");
const bank = document.getElementById("bank");
const credit = document.getElementById("credit");
const timerContainer = document.getElementById("timer");
const timerCounter = document.getElementById("timer-counter");
const creditCardPayNowBtn = document.getElementById("credit");
const debitCardPayNowBtn = document.getElementById("debit");
const paymentSuccessPopup = document.getElementById("payment-success-popup");

// Retrieve the total cost from localStorage
var totalPrice = localStorage.getItem('totalPrice');

// Check if totalCost is not null or undefined
if (totalPrice !== null && totalPrice !== undefined) {
    // Display the total cost on the page
    // Note: Make sure you have an element with the id "totalCost" where you want to display it
    document.getElementById('totalPrice').textContent = totalPrice;
} else {
    // Handle the case where totalCost is not found in localStorage
    document.getElementById('totalPrice').textContent = 'Total cost not available.';
}


payWithUPI.addEventListener("change", () => {
if (payWithUPI.checked) {
upiContent.style.display = "block";
scanContent.style.display = "none";
numContent.style.display = "none";
}
});

payWithnum.addEventListener("change", () => {
if (payWithnum.checked) {
upiContent.style.display = "none";
scanContent.style.display = "none";
numContent.style.display = "block";
}
});


scanTheQR.addEventListener("change", () => {
if (scanTheQR.checked) {
upiContent.style.display = "none";
scanContent.style.display = "block";
numContent.style.display = "none";
}
});

var paymentMethodSelect = document.getElementById("payment-method");


// Get a reference to the selected-payment-method span element in the popup
var selectedPaymentMethodSpan = document.getElementById("selected-payment-method");
paymentMethodSelect.addEventListener("change", function () {
// Update the selected-payment-method span with the selected payment method
selectedPaymentMethodSpan.textContent = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;
selectedPaymentMethodSpan.style.display = "none";
});




// Retrieve cart data from localStorage
const cartDataString = localStorage.getItem("cartData");
if (cartDataString) {
const cartData = JSON.parse(cartDataString);

// Display order details
const paymentOrderId = document.getElementById("payment-order-id");
paymentOrderId.textContent = cartData.orderId;

const paymentGuestCount = document.getElementById("payment-guest-count");
paymentGuestCount.textContent = cartData.guestCount;

// Display cart items
const paymentCartItemsList = document.getElementById("payment-cart-items");
cartData.cartItems.forEach(function (itemData) {
    const cartItemElement = document.createElement("li");
    cartItemElement.innerHTML = `
        <ul>
            ${itemData.subItems.map(subItemData => `<li>${subItemData.name} - ₹${subItemData.price}</li>`).join('')}
        </ul>
    `;
    paymentCartItemsList.appendChild(cartItemElement);
});

// Display overall price


const paymentOverallPrice2 = document.getElementById("payment-overall-price-2");
paymentOverallPrice2.textContent = `${$totalCost}`;




// Populate hidden input fields with data
document.querySelector('input[name="orderid"]').value = cartData.orderId;
document.querySelector('input[name="guest"]').value = cartData.guestCount;
document.querySelector('input[name="items"]').value = JSON.stringify(cartData.cartItems);
document.querySelector('input[name="totalprice"]').value = cartData.overallPrice;
}

// Get references to the select element and the payment method details div
var paymentMethodSelect = document.getElementById("payment-method");
var paymentMethodDetails = document.getElementById("payment-method-details");

paymentMethodSelect.addEventListener("change", function () {
    var selectedMethod = paymentMethodSelect.value;
    console.log("Selected method:", selectedMethod); // Debugging line

    // Hide all payment method details
    var allDetailsDivs = document.querySelectorAll(".payment-method-detail");
    allDetailsDivs.forEach(function (div) {
        div.style.display = "none";
    });

    // Show the selected payment method details
    var selectedDetailDiv = document.getElementById(selectedMethod);
    if (selectedDetailDiv) {
        selectedDetailDiv.style.display = "block";
    }
});
let timerInterval;

payNowBtn.addEventListener("click", () => {
// Hide the "Pay Now" button
payNowBtn.style.display = "none";

document.querySelector('input[name="paymethod"]').value = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;

// Show the timer container
timerContainer.style.display = "block";

// Initialize the timer to 30 seconds
let remainingTime = 10;
timerCounter.textContent = remainingTime;

// Start the countdown
timerInterval = setInterval(() => {
remainingTime--;

if (remainingTime <= 0) {
    // Stop the timer when it reaches 0
    clearInterval(timerInterval);

    // Show the payment success popup
    paymentSuccessPopup.style.display = "block";

    // Hide the timer container
    timerContainer.style.display = "none";
} else {
    // Update the timer display
    timerCounter.textContent = remainingTime;
}
}, 1000);
});
// Event listener for "Pay Now" button in the "Pay With Paytm Number" section
payNow.addEventListener("click", () => {
// Hide the "Pay Now" button
payNow.style.display = "none";

document.querySelector('input[name="paymethod"]').value = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;

// Show the timer container
timerContainer.style.display = "block";

// Initialize the timer to 30 seconds (adjust as needed)
let remainingTime = 30;
timerCounter.textContent = remainingTime;

// Start the countdown
let timerInterval = setInterval(() => {
    remainingTime--;

    if (remainingTime <= 0) {
        // Stop the timer when it reaches 0
        clearInterval(timerInterval);

        // Show the payment success popup
        paymentSuccessPopup.style.display = "block";

        // Hide the timer container
        timerContainer.style.display = "none";
    } else {
        // Update the timer display
        timerCounter.textContent = remainingTime;
    }
}, 1000);
});
bank.addEventListener("click", () => {
// Hide the "Pay Now" button


document.querySelector('input[name="paymethod"]').value = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;

// Show the timer container
timerContainer.style.display = "block";

// Initialize the timer to 30 seconds (adjust as needed)
let remainingTime = 30;
timerCounter.textContent = remainingTime;

// Start the countdown
let timerInterval = setInterval(() => {
    remainingTime--;

    if (remainingTime <= 0) {
        // Stop the timer when it reaches 0
        clearInterval(timerInterval);

        // Show the payment success popup
        paymentSuccessPopup.style.display = "block";

        // Hide the timer container
        timerContainer.style.display = "none";
    } else {
        // Update the timer display
        timerCounter.textContent = remainingTime;
    }
}, 1000);
});
creditCardPayNowBtn.addEventListener("click", () => {
// Hide the "Pay Now" button
creditCardPayNowBtn.style.display = "none";

document.querySelector('input[name="paymethod"]').value = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;

// Show the timer container
timerContainer.style.display = "block";

// Initialize the timer to 30 seconds (adjust as needed)
let remainingTime = 30;
timerCounter.textContent = remainingTime;

// Start the countdown
let timerInterval = setInterval(() => {
    remainingTime--;

    if (remainingTime <= 0) {
        // Stop the timer when it reaches 0
        clearInterval(timerInterval);

        // Show the payment success popup
        paymentSuccessPopup.style.display = "block";

        // Hide the timer container
        timerContainer.style.display = "none";
    } else {
        // Update the timer display
        timerCounter.textContent = remainingTime;
    }
}, 1000);

// You can add additional code here to handle the credit card payment details
// For example, you can collect the credit card number, card holder's name, etc.
const cardNumber = document.getElementById("card-number").value;
const cardHolder = document.getElementById("card-holder").value;
const expiryDate = document.getElementById("expiry-date").value;
const cvv = document.getElementById("cvv").value;

// You can use these values to make the actual payment request to a payment gateway
// Replace this with your payment processing logic
});

debitCardPayNowBtn.addEventListener("click", () => {
// Hide the "Pay Now" button
debitCardPayNowBtn.style.display = "none";

document.querySelector('input[name="paymethod"]').value = paymentMethodSelect.options[paymentMethodSelect.selectedIndex].text;

// Show the timer container
timerContainer.style.display = "block";

// Initialize the timer to 30 seconds (adjust as needed)
let remainingTime = 30;
timerCounter.textContent = remainingTime;

// Start the countdown
let timerInterval = setInterval(() => {
    remainingTime--;

    if (remainingTime <= 0) {
        // Stop the timer when it reaches 0
        clearInterval(timerInterval);

        // Show the payment success popup
        paymentSuccessPopup.style.display = "block";

        // Hide the timer container
        timerContainer.style.display = "none";
    } else {
        // Update the timer display
        timerCounter.textContent = remainingTime;
    }
}, 1000);

// You can add additional code here to handle the credit card payment details
// For example, you can collect the credit card number, card holder's name, etc.
const cardNumber = document.getElementById("card-number").value;
const cardHolder = document.getElementById("card-holder").value;
const expiryDate = document.getElementById("expiry-date").value;
const cvv = document.getElementById("cvv").value;


// You can use these values to make the actual payment request to a payment gateway
// Replace this with your payment processing logic
});
});

</script>
<style>
    /* Style the payment method container */
    .payment-method-container {

         
            border: 3px solid #ccc;
            background-color: #fff;
            margin: 2%;
            padding: 20px;
            position: absolute;
            width: 100%;
            margin-left: 0%;
            display: inline-block;
            justify-content: center;
            flex-direction: column;
        }

        .payment-method-detail {
            display: none;
        }

        /* Style the payment method dropdown */
        #payment-method {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
        }

        /* Style the payment method details section */
        #payment-method-details {
            padding-top: 10px;
        }

        input[type="radio"]
{
  appearance: none;
}

input[type="radio"] + label
{
  cursor: pointer;
  position: relative;
  padding-left: 30px;
  line-height: 20px;
}

input[type="radio"] + label::before
{
  content: "";
  display: inline-flex;
  width: 20px;
  aspect-ratio: 1;
  border: 1px solid #686de0;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  opacity: 1;
  transition: all 0.3s;
}

input[type="radio"] + label::after
{
  content: "";
  display: inline-block;
  width: 10px;
  aspect-ratio: 1;
  border: 1px solid #686de0;
  background: #686de0;
  border-radius: 50%;
  position: absolute;
  left: 5px;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0;
  transition: all 0.3s;
}

input[type="radio"]:checked + label::after
{
  opacity: 1;
}

.radio-container{
    margin-top: 2%;
    justify-content: space-between;
    display: flex;
}
.input {
  width: 300px;
  padding: 8px;
  border: none;
  border-radius: 4px;
  box-shadow: 2px 2px 7px 0 rgb(0, 0, 0, 0.2);
  outline: none;
  color: dimgray;
}

.Btn {
    margin-top: 2%;
  width: 130px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: blue;
  border: none;
  color: white;
  font-weight: 600;
  gap: 8px;
  cursor: pointer;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.103);
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
}

.svgIcon {
  width: 16px;
}

.svgIcon path {
  fill: white;
}

.Btn::before {
  width: 130px;
  height: 130px;
  position: absolute;
  content: "";
  background-color: white;
  border-radius: 50%;
  left: -100%;
  top: 0;
  transition-duration: .3s;
  mix-blend-mode: difference;
}

.Btn:hover::before {
  transition-duration: .3s;
  transform: translate(100%,-50%);
  border-radius: 0;
}

.Btn:active {
  transform: translate(5px,5px);
  transition-duration: .3s;
}

/* Style for the payment success popup */
#payment-success-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    width: 400px;
    z-index: 1000;
}

#payment-success-popup h2 {
    font-size: 24px;
    color: #0073e6;
    margin-bottom: 10px;
}

#payment-success-popup p {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

#payment-success-popup button {
    background-color: #0073e6;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

#payment-success-popup button:hover {
    background-color: #005bbf;
}
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@600&display=swap');

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.credit-card-form {
    margin-top: 3%;
  max-width: 400px;
  margin: auto;
  padding: 1em;
  margin-top: 3%;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
  font-family: 'Montserrat', sans-serif;
  background-color: #dbdbdb;
  text-align: center;
  color: #424242;
  align-content: center;
}


.credit-card-form h2 {
  margin-bottom: 10%;
  font-size: 24px;
}

.credit-card-form .form-group {
  margin-bottom: 15px;
}

.credit-card-form label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #777;
}

.credit-card-form input[type="text"],
.credit-card-form select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 1rem;
  font-size: 16px;
    font-family: 'Montserrat', sans-serif;
}

.credit-card-form .form-row {
  display: flex;
}


.class-button {
  width: 100%;
  padding: 14px;
  color: #fff;
  background-color: black;
  border: none;
  border-radius: 1rem;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
  font-family: 'Montserrat', sans-serif;
}

.class-button:hover {
  background-color: #bebebe;
  color: #424242;
  font-family: 'Montserrat', sans-serif;
}

.class-button {
  outline: none;
  font-family: 'Montserrat', sans-serif;
}

.inputContainer {
  position: relative;
  margin-bottom: 20px;
  margin-top: 5%;
}

.customInput {
  width: 50%;
  padding: 12px;
  font-size: 16px;
  background-color: transparent;
  border: none;
  border-bottom: 2px solid #007bff;
  outline: none;
  transition: border-color 0.3s ease;
  color: #007bff;
}

.customInput:focus,
.customInput:not(:placeholder-shown) {
  border-color: #0056b3;
}

.inputLabel {
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  padding: 5px;
  font-size: 16px;
  color: #007bff;
  transition: transform 0.3s ease, color 0.3s ease;
}

.customInput:focus + .inputLabel,
.customInput:not(:placeholder-shown) + .inputLabel {
  transform: translateY(-100%) translateX(-5px) scale(0.8);
}

.inputUnderline {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50%;
  height: 2px;
  background-color: #007bff;
}
</style>
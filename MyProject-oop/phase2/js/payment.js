

var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {

    event.preventDefault();
  var handler = PaystackPop.setup({
    key: 'pk_test_7793b89427f40a25ace97c2ac9acdd84ba13f41a', // Replace with your public key
    userId: document.getElementById('userId').value,
    email: document.getElementById('email').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: Math.floor((Math.random() * 1000000000) + 1), // Replace with a reference you generated
    callback: function(response) {
      //this happens after the payment is completed successfully
      
      var reference = response.reference;
      var user_id = document.getElementById('userId').value;
      
      alert('Payment complete! Reference: ' + reference);
      window.location.href = '/Myproject-oop/phase2/Controller/user-auth/Payment/paymentProcess.php?ref='+reference+'&userId='+user_id+'';
      // Make an AJAX call to your server with the reference to verify the transaction
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}

var openModalBtn = document.getElementById('openModalBtn');
var closeModalBtn = document.getElementById('closeModalBtn');
var modal = document.getElementById('myModal');


openModalBtn.onclick = openModal;

function openModal(){
    modal.style.display = 'block';
}

closeModalBtn.onclick =closeModal;

function closeModal(){
    modal.style.display = 'none';
}





//   document.addEventListener('DOMContentLoaded', function () {
//     var openModalBtn = document.getElementById('openModalBtn');
//     var closeModalBtn = document.getElementById('closeModalBtn');
//     var modal = document.getElementById('myModal');

//     // Open modal
//     openModalBtn.addEventListener('click', function () {
//         modal.style.display = 'block';
//     });

//     // Close modal
//     closeModalBtn.addEventListener('click', function () {
//         modal.style.display = 'none';
//     });

//     // Close modal if clicked outside the modal content
//     window.addEventListener('click', function (event) {
//         if (event.target === modal) {
//             modal.style.display = 'none';
//         }
//     });
// });

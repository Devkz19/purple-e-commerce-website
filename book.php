<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="book">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>

<body>
    <style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
}

button {
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}

button.btn-primary {
    background-color: #007bff;
    color: #fff;
}

button.btn-primary:hover {
    background-color: #0056b3;
}

button.btn-success {
    background-color: #28a745;
    color: #fff;
}

button.btn-success:hover {
    background-color: #218838;
}

/* Cart Section Styles */
.cart-items-container {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
    background-color: #f8f9fa;
}
.cart-item{
	align-items: center;
    justify-content: space-between;
}
.order-summary {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f8f9fa;
}

.order-summary h4 {
    font-size: 20px;
    margin-bottom: 10px;
}

.product-price, .total-price {
    font-size: 18px;
}

.total-price strong {
    color: #333;
}

/* Booking Section Styles */
.payment-methods {
            margin-bottom: 20px;
        }
        .payment-methods button {
            margin-right: 10px;
        }
        
#booking1 {
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #f8f9fa;
    padding: 20px;
}

form#bookingForm .form-group {
    margin-bottom: 15px;
}

form#bookingForm label {
    font-weight: bold;
}

form#bookingForm input,
form#bookingForm textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 5px;
}

form#bookingForm textarea {
    resize: none;
}

form#bookingForm input:focus,
form#bookingForm textarea:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Responsive Design */
@media (max-width: 768px) {
    .cart-items-container, .order-summary, #booking1 {
        padding: 10px;
    }

    button {
        font-size: 14px;
        padding: 8px 16px;
    }

    h2 {
        font-size: 20px;
    }
}


    </style>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all orders </div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<!-- <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li> -->
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">Purple<span>Star</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">home</a></li>
								<li><a href="categories.php">shop</a></li>
								<!-- <li><a href="#">promotion</a></li> -->
								<li><a href="#">pages</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.php">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">0</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="categories.php">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="single.php">blog</a></li>
				<li class="menu_item"><a href="contact.php">contact</a></li>
			</ul>
		</div>
	</div>
    <div class="container contact_container">
        <div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Cart</a></li>
					</ul>
				</div>

			</div>
		</div>
    
       <!-- Cart Section -->
<<div class="row">
    <div class="col">
        <div class="container mt-5">
            <h2>Your Cart</h2>
            <div class="row">
                <!-- Cart Items - col-md-8 -->
                <div class="col-md-8">
                    <div id="cart-items-container" class="cart-items-container">
                        <!-- Dynamically generated cart items will be injected here -->
                    </div>
                </div>
                <!-- Summary Section -->
                <div class="col-md-4">
                    <div class="order-summary">
                        <h4>Order Summary</h4>
                        <p class="total-price"><strong>Total: $<span id="totalPrice">0.00</span></strong></p>
                        <button id="proceedToPayButton" class="btn btn-success mt-3">Proceed to Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                <!-- Order Summary - col-md-4 -->
                <div class="col-md-4">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Simulation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .payment-methods {
            margin-bottom: 20px;
        }
        .payment-methods button {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Payment Gateway Simulation</h2>
    <div class="payment-methods">
        <button class="btn btn-primary" id="creditCardBtn">Credit Card</button>
        <button class="btn btn-warning" id="paypalBtn">PayPal</button>
        <button class="btn btn-info" id="walletBtn">Wallet</button>
    </div>

    <div id="paymentForm" style="display: none;">
        <h4 id="paymentTitle"></h4>
        <form id="paymentDetailsForm">
            <div class="form-group">
                <label for="paymentAmount">Amount</label>
                <input type="number" id="paymentAmount" class="form-control" value="500" disabled>
            </div>
            <div class="form-group" id="paymentMethodDetails"></div>
            <button type="submit" class="btn btn-success">Pay Now</button>
        </form>
    </div>

    <div id="paymentResult" style="display: none;">
        <h3 id="paymentResultTitle"></h3>
        <p id="paymentResultDetails"></p>
    </div>
</div>

<script>
// Function to load cart items and calculate total price
function loadCartItems() {
    const savedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    const cartItemsContainer = document.getElementById("cart-items-container");

    cartItemsContainer.innerHTML = ''; // Clear previous items

    if (savedCartItems.length === 0) {
        // If no items in the cart, show an empty cart message
        cartItemsContainer.innerHTML = '<p>Your cart is empty!</p>';
        document.getElementById("totalPrice").textContent = '0.00';
    } else {
        let totalPrice = 0;

        savedCartItems.forEach((item, index) => {
            totalPrice += item.price; // Add item price to total

            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `
                <div class="cart-item-content d-flex">
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                    <div class="cart-item-details">
                        <p class="product-name">${item.name}</p>
                        <p class="product-description">${item.description}</p>
                        <p class="product-price">$${item.price.toFixed(2)}</p>
                    </div>
                </div>
                <button class="btn btn-danger remove-item" onclick="removeItem(${index})">Remove</button>
            `;

            cartItemsContainer.appendChild(cartItem);
        });

        // Update the total price on the order summary
        document.getElementById("totalPrice").textContent = totalPrice.toFixed(2);
    }
}

// Remove item from cart
function removeItem(index) {
    const savedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    savedCartItems.splice(index, 1); // Remove item from the cart
    localStorage.setItem("cartItems", JSON.stringify(savedCartItems)); // Save updated cart back to localStorage
    loadCartItems(); // Reload cart items
}

// Call the function to load cart items when the page loads
window.onload = function () {
    loadCartItems();
}

// Payment logic
document.getElementById("proceedToPayButton").addEventListener("click", function () {
    const totalAmount = parseFloat(document.getElementById("totalPrice").textContent);

    if (totalAmount > 0) {
        // Show payment method options
        const paymentMethod = prompt("Choose payment method: Credit Card, PayPal, or Wallet");

        if (paymentMethod === "Credit Card") {
            alert(`Proceeding to Credit Card payment for $${totalAmount.toFixed(2)}.`);
            // Simulate payment processing (replace with actual payment gateway logic)
            processPayment(totalAmount);
        } else if (paymentMethod === "PayPal") {
            alert(`Proceeding to PayPal payment for $${totalAmount.toFixed(2)}.`);
            // Handle PayPal payment (replace with actual PayPal integration)
            processPayment(totalAmount);
        } else if (paymentMethod === "Wallet") {
            alert(`Proceeding to Wallet payment for $${totalAmount.toFixed(2)}.`);
            // Handle Wallet payment (replace with actual Wallet integration)
            processPayment(totalAmount);
        } else {
            alert("Invalid payment method.");
        }
    } else {
        alert("Your cart is empty.");
    }
});

// Simulate payment processing
function processPayment(amount) {
    setTimeout(() => {
        alert(`Payment of $${amount.toFixed(2)} processed successfully!`);
        // Optionally clear cart after successful payment
        localStorage.removeItem("cartItems");
        loadCartItems(); // Reload the cart (empty now)
    }, 2000);
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- Cart Items Container (hidden on checkout page) -->
<div id="cart-items-container" style="display:none;"></div>

</div>

<script>
// Function to load cart items and calculate total price
function loadCartItems() {
    const savedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    const cartItemsContainer = document.getElementById("cart-items-container");

    cartItemsContainer.innerHTML = ''; // Clear previous items

    let totalPrice = 0;

    savedCartItems.forEach((item, index) => {
        totalPrice += item.price; // Add item price to total

        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");

        cartItem.innerHTML = `
            <div class="cart-item-content d-flex">
                <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                <div class="cart-item-details">
                    <p class="product-name">${item.name}</p>
                    <p class="product-description">${item.description}</p>
                    <p class="product-price">$${item.price.toFixed(2)}</p>
                </div>
            </div>
            <button class="btn btn-danger remove-item" onclick="removeItem(${index})">Remove</button>
        `;

        cartItemsContainer.appendChild(cartItem);
    });

    // Update the total price on the order summary
    document.getElementById("totalPrice").textContent = totalPrice.toFixed(2);
}

// Remove item from cart
function removeItem(index) {
    const savedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    savedCartItems.splice(index, 1); // Remove item
    localStorage.setItem("cartItems", JSON.stringify(savedCartItems)); // Save updated cart
    loadCartItems(); // Reload cart items
}

// Call the function to load cart items when the page loads
if (window.location.pathname.includes("cart.html")) {
    loadCartItems();
}

// Payment logic
document.getElementById("proceedToPayButton").addEventListener("click", function () {
    const totalAmount = parseFloat(document.getElementById("totalPrice").textContent);

    if (totalAmount > 0) {
        // Show payment method options
        const paymentMethod = prompt("Choose payment method: Credit Card, PayPal, or Wallet");

        if (paymentMethod === "Credit Card") {
            alert(`Proceeding to Credit Card payment for $${totalAmount.toFixed(2)}.`);
            // Simulate payment processing (replace with actual payment gateway logic)
            processPayment(totalAmount);
        } else if (paymentMethod === "PayPal") {
            alert(`Proceeding to PayPal payment for $${totalAmount.toFixed(2)}.`);
            // Handle PayPal payment (replace with actual PayPal integration)
            processPayment(totalAmount);
        } else if (paymentMethod === "Wallet") {
            alert(`Proceeding to Wallet payment for $${totalAmount.toFixed(2)}.`);
            // Handle Wallet payment (replace with actual Wallet integration)
            processPayment(totalAmount);
        } else {
            alert("Invalid payment method.");
        }
    } else {
        alert("Your cart is empty.");
    }
});

// Simulate payment processing
function processPayment(amount) {
    setTimeout(() => {
        alert(`Payment of $${amount.toFixed(2)} processed successfully!`);
    }, 2000);
}

</script>

            </div>
        </div>

        <!-- Booking Section -->
        <div class="container mt-5" id="booking1" style="display:none;">
            <h2>Booking Details</h2>
            <div class="row">
                <!-- Booking Form - col-md-8 -->
                <div class="col-md-8">
                    <form id="bookingForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
                        </div>
                    </form>
                </div>

                <!-- Order Summary - col-md-4 -->
                <div class="col-md-4">
                    <div class="order-summary">
                        <h4>Order Summary</h4>
                        <p class="product-price"></p>
                        <p class="total-price"><strong>Total: $59.98</strong></p>
                        <!-- Proceed to Pay Button -->
                        <button id="proceedToPayButton" class="btn btn-success mt-3">Proceed to Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    </div>
</div>

        

    

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="post">
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

	 <!-- Footer Start -->
	 <?php include 'include/footer.php';  ?>
    <!-- Footer End -->


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!-- <script src="js/custom.js"></script> -->


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>


</body>

</html>

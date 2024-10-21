<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wholesale Inquiry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2e9e4;
        }
        .inquiry-container {
            margin-top: 50px;
        }
        .inquiry-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-submit {
            background-color: #F67280;
            color: white;
        }
        .btn-submit:hover {
            background-color: #e7516c;
        }
    </style>
</head>
<body>

<div class="container inquiry-container">
    <h2 class="text-center mb-4">Wholesale Inquiry Form</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="inquiry-form">
            <form id="wholesaleInquiryForm" action="wholesale_inquiry.php" method="POST">
    <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="company">Company/Business Name</label>
        <input type="text" class="form-control" name="company" id="company" placeholder="Enter your company name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
        <label for="message">Additional Requirements or Notes</label>
        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter additional requirements or notes"></textarea>
    </div>
    <button type="submit" class="btn btn-submit">Submit Inquiry</button>
</form>

            </div>
        </div>
    </div>
</div>

<script>
    function submitInquiry() {
        const name = document.getElementById('name').value;
        const company = document.getElementById('company').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;

        if (name && company && email && phone ) {
            alert("Thank you for your wholesale inquiry! Our team will contact you soon.");
            document.getElementById('wholesaleInquiryForm').reset();
        } else {
            alert("Please fill out all required fields.");
        }
    }
</script>

</body>
</html>

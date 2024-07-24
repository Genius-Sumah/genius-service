<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link rel="stylesheet" href="netx.css">
</head>
<body>
    <form id="multiStepForm" action="submit.php" method="POST">
        <div class="form-step active">
            <h2>Step 1</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <button type="button" class="next">Next</button>
        </div>
        <div class="form-step">
            <h2>Step 2</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="button" class="prev">Previous</button>
            <button type="button" class="next">Next</button>
        </div>
        <div class="form-step">
            <h2>Step 3</h2>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <button type="button" class="prev">Previous</button>
            <button type="submit">Submit</button>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>

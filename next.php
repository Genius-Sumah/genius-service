<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Form Navigation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="form1" class="form-section">
        <h2>Formulaire 1</h2>
        <form action="your_php_script.php" method="POST">
            <label for="name1">Nom:</label>
            <input type="text" id="name1" name="name1" required>
            <label for="email1">Email:</label>
            <input type="email" id="email1" name="email1" required>
            <button type="button" onclick="showNextForm('form2')">Next</button>
        </form>
    </div>

    <div id="form2" class="form-section" style="display: none;">
        <h2>Formulaire 2</h2>
        <form action="your_php_script.php" method="POST">
            <label for="name2">Nom:</label>
            <input type="text" id="name2" name="name2" required>
            <label for="email2">Email:</label>
            <input type="email" id="email2" name="email2" required>
            <button type="button" onclick="showPreviousForm('form1')">Previous</button>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function showNextForm(formId) {
            document.querySelectorAll('.form-section').forEach(form => form.style.display = 'none');
            document.getElementById(formId).style.display = 'block';
        }

        function showPreviousForm(formId) {
            document.querySelectorAll('.form-section').forEach(form => form.style.display = 'none');
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>
</html>

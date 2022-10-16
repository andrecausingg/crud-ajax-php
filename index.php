<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>

    <h1>Insert Data</h1>
    <!-- Form -->
    <form id="formInsert">
        <!-- First Name -->
        <label for="firstName">First Name</label>
        <input type="text" id="firstName"> <br>

        <!-- Last Name -->
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName"> <br>

        <!-- Submit -->
        <input type="submit" value="submit">
    </form>

    <hr>

    <h1>Display Data</h1>
    <!-- Display -->
    <?php
        require_once("./asset/php/main/displayMF.php");
        $classDisplay = new classDisplay();
        $classDisplay->displayData();
    ?>

    <hr>

    <div id="containerFormUpdate" style="display: none;">
        <h1>Update Data</h1>
        <!-- Form -->
        <form id="formUpdate" >
            <!-- First Name -->
            <label for="updateFirstName">Update First Name</label>
            <input type="text" id="updateFirstName"> <br>

            <!-- Last Name -->
            <label for="updateLastName">Update Last Name</label>
            <input type="text" id="updateLastName"> <br>

            <!-- Submit -->
            <input type="submit" value="submit">
        </form>
    </div>

    <!-- Ajax -->
    <script src="./asset/js/ajax/insert.js"></script>
    <script src="./asset/js/ajax/delete.js"></script>
    <script src="./asset/js/ajax/update.js"></script>
</body>
</html>
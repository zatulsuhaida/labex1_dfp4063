<!DOCTYPE html>
<html>

<head>
    <link href="style.css" rel="stylesheet">
    <title>NOVEL MR DR ALPHA</title>
</head>

<body>

    <div class="header">

        <h1>NOVEL MR DR ALPHA<h1>
                </center>
    </div>

    <div class="navbar">
        <?php include "containingMenu.php"; ?>

    </div>
    <?php
    echo "<p>TROLEY BOOK </p>";
    ?>

    <center>
        <form method="post" action="">
            <table border="0">
                <tr>
                    <th colspan="2">
                        <h2></h2>
                    </th>
                </tr>
                <tr>
                    <th>NAME:</th>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <th> ADRESS :</th>
                    <td><textarea name="address" rows="5" cols="40"></textarea> </td>
                </tr>

                <tr>
                    <th> NUMBER PHONE :</th>
                    <td><input type="number" name="contact"></td>
                </tr>

                <tr>
                    <th>DATE :</th>
                    <td><input type="text" name="date"></td>
                </tr>

                <tr>
                    <th>BOOK:</th>
                    <td><select name="book" id="book">
                            <option value="">Choose Your Book</option>
                            <option value="DR. ALPHA MALE">DR. ALPHA MALE</option>
                        </select></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="update" value="Submit" />
                    </td>
                </tr>

                <?php

                if (isset($_POST['update'])) {
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $contact = $_POST['contact'];
                    $Date = $_POST['date'];
                    $Book = $_POST['book'];


                    if ($name == "") {
                        echo "<script>alert('Name is required');</script>";
                    } else if ($address == "") {
                        echo "<script>alert('Address is required');</script>";
                    } else if ($contact == "") {
                        echo "<script>alert('Contact No is required');</script>";
                    } else {
                        session_start();

                        $_SESSION['name'] = $_POST['name'];
                        $_SESSION['address'] = $_POST['address'];
                        $_SESSION['contact'] = $_POST['contact'];
                        $_SESSION['date'] = $_POST['date'];
                        $_SESSION['book'] = $_POST['book'];

                ?>

                <?php
                    }
                }

                ?>

            </table>
        </form>
</body>

</html>

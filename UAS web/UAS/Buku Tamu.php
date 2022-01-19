<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas UAS</title>
    <!--CSS EKSTERNAL-->
    <link rel="stylesheet" href="Buku_Tamu.css">

</head>

<body>
    <header class="header">
    <div class="judul">
            <h1 align="center">ERABOOKpedia</h1>
        </div>
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href="About.html">About Us</a>
            <a href="Product.html">Product</a>
            <a href="#">Buku Tamu</a>
        </div>
    </header>
    <section>
        <fieldset>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div>
                <h3>Buku Tamu</h3>
            </div>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><input type="text" name="fname"></td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td>:</td>
                        <td><input type="number" name="fnumber"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><input type="text" name="faddress"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="femail"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td><input type="text" name="fpesan"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td ><input type="submit" value="Submit"></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div>
                                <?php
                                    if(isset($_POST['fname'])){
                                        $name = $_POST['fname'];
                                        $number = $_POST['fnumber'];
                                        $address = $_POST['faddress'];
                                        $email = $_POST['femail'];
                                        $pesan = $_POST['fpesan'];
                                        echo "&nbsp;&nbsp;&nbsp;Nama: $name <br> &nbsp;&nbsp;&nbsp;email: $email <br> &nbsp;&nbsp;&nbsp;number: $number 
                                        <br> &nbsp;&nbsp;&nbsp;Address: $address <br> &nbsp;&nbsp;&nbsp;pesan: $pesan <br>";
                                    }
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </section>
    
</body>
</html>
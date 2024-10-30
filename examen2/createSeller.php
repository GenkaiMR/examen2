<?php 
    include "includes/header.php";
    require "includes/config/connect2db.php";  

    $db = connect2db();
    // var_dump($_POST);

if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $query = "insert into seller (name, email, phone) values ('$name', '$email', '$phone');";

    $response = mysqli_query($db, $query);

    if ($response){
        echo "Seller added successfully";
    } else {
        echo "Seller not created";
    }
}
    
?>

    <section>
        <h2>Seller format</h2>
            <div>
                <form method="post" action="createSeller.php">
                    <fieldset>
                        <legend>Fill All Forms Fields</legend>
                        <div>
                            <label for="name">Seller Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <label for="email">Seller Email</label>
                            <input type="email"  id="email" name="email">
                        </div>
                        <div>
                            <label for="phone">Seller number</label>
                            <input type="tel" name="phone"  id="phone">
                        </div>
                        <div>
                            <button type="submit">Crear nuevo vendedor</button>
                        </div>
                    </fieldset>
                </form>
            </div>
    </section>




<?php
    include  "includes/footer.php";
?>
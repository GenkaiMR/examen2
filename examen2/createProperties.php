<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "includes/header.php";
    require "includes/config/connect2db.php";

    $db=connect2db();
    // var_dump($_POST);

    
    $query_sellers = "select id, name from seller;";

    $sellers = mysqli_query($db, $query_sellers);


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $rooms = $_POST["rooms"];
    $wc = $_POST["wc"];
    $garage = $_POST["garage"];
    $timestamp = $_POST["timestamp"];
    $seller = $_POST["id_seller"];

    $query = "insert into propierties(id, title, price, image, description, rooms, wc, garages, timestamp, id_seller) values ('$id', '$title', '$price', '$image', '$description', '$rooms', '$wc', '$garage', '$timestamp', '$seller');";
    $response = mysqli_query($db,$query);

    if($response){
        echo "propertie created correctly";
    }else{
        echo "propertie not created";
    }
    
}
?>

<section>
    <h2>Propierties form</h2>
    <div>
        <form action="createProperties.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Fill al the form fields</legend>
                    <div>
                        <label for="id">ID</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Propierty Title">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price">
                    </div>
                    <div>
                        <label for="image">Selecciona una imagen:</label>
                        <input type="file" name="image" id="image" accept="image/*" required>
                    </div>

                    <!-- <div>
                        <label for="image">Image</label>
                        <input type="image" accept="image" id="image" name="image">
                    </div> -->
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div>
                        <label for="rooms">Rooms</label>
                        <input type="number" name="rooms" id="rooms">
                    </div>
                    <div>
                        <label for="wc">WC</label>
                        <input type="number" name="wc" id="wc">
                    </div>
                    <div>
                        <label for="garage">Garage</label>
                        <input type="number" name="garage" id="garage">
                    </div>
                    <div>
                        <label for="timestamp">TimeStamp</label>
                        <input type="date" name="timestamp" id="timestamp">
                    </div>
                    <div>
                        <label for="id_seller">Seller</label>
                        <select name="id_seller" id="id_seller">
                            <?php while($seller = mysqli_fetch_assoc($sellers)) : ?>
                                <option value="<?php echo $seller['id'];?>"><?php echo $seller['name'];?></option>
                            <?php endwhile;?>
                        </select>
                        
                    </div>
                    <div>
                        <button type="submit">Create a new propierty</button>
                    </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
    include "includes/footer.php";
?>
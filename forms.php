<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" placeholder="name">
    <br><br>
    <input type="text" name="city" placeholder="city">
    <br><br>
    <button type="submit" name="trigger">Print message</button>
</form>

<?php 

if(isset($_POST['trigger'])){
    echo "Name: " . $_POST['name'] . "<br>";
    echo "City: " . $_POST['city'];

}
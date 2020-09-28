<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP FORMS"; ?></title>
</head>
<body>
<?php 
error_reporting(0);
if(isset($_GET['submit'])){
$name = $_GET['name'];
$option = $_GET['opt'];
$check = $_GET['checkbox'];
$cgpa = $_GET['cgpa'];

}else{
    $name = '';
    $option = '';
    $check = '';
    $cgpa = '';
}  ?>
    <form action="#" method="get">
    <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name; ?>">
    <select name="opt" id="">
    <option <?php echo ($option == 'A+') ? 'selected' :'' ;?> value="A+">A+</option>
    <option <?php echo ($option == 'A') ? 'selected' :'' ;?> value="A">A</option>
    <option <?php echo ($option == 'A-') ? 'selected' :'' ;?> value="A-">A-</option>
    </select>
    <input type="checkbox" value="Agree" <?php echo !empty($check) ? 'checked' : '' ; ?>  name="checkbox">
    <br><br> CGPA: 4.00 <input type="radio" <?php echo ($cgpa == 4.00) ? "checked" : "" ?> value=4.0 name="cgpa"> 5.00 <input type="radio" <?php echo ($cgpa == 5.00) ? "checked" : "" ?>  value=5.0 name="cgpa"> 
    <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
    echo $name;
    
    ?>
</body>
</html>
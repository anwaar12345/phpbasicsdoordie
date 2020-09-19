<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP FORMS"; ?></title>
</head>
<body>
<?php if(isset($_GET['submit'])){
$name = $_GET['name'];
$option = $_GET['opt'];
$check = isset($_GET['checkbox']) ? $_GET['checkbox'] : '';
echo !empty($check) ? "<script>alert($check);</script>" : '';

}else{
    $name = '';
    $option = '';
}  ?>
    <form action="#" method="get">
    <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name; ?>">
    <select name="opt" id="">
    <option <?php echo ($option == 'A+') ? 'selected' :'' ;?> value="A+">A+</option>
    <option <?php echo ($option == 'A') ? 'selected' :'' ;?> value="A">A</option>
    <option <?php echo ($option == 'A-') ? 'selected' :'' ;?> value="A-">A-</option>
    </select>
    <input type="checkbox" value="Agree" <?php echo !empty($check) ? 'checked' : '' ; ?>  name="checkbox">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
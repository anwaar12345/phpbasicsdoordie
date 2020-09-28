<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Aptech PHP Revision"; ?></title>
</head>
<body>
<?php  
// echo isset($_SESSION['error']) ? $_SESSION['error'] : '';
error_reporting(0);
if(isset($_POST['submit'])){
$empid = $_POST['empid'];
$name = $_POST['name'];
$dept = $_POST['department'];
$email = $_POST['email'];
$details  = $_POST['details'];
if(!empty($empid) || !empty($name) || !empty($dept) || !empty($email)){
echo 'string length: '.strlen($name).' <br>Word Count: '.str_word_count($name).'<br>Spaces count: '.substr_count($name,' ');
}


}else{
    $empid = " ";
    $name = " ";
    $dept = " ";
    $email = " ";
    $details = " ";
}
?>
 <div style="margin-top:100px;margin-left:300px;">
    <!-- <h1> Enter Your Personal Details </h1>
    <form action="formhandler.php" method="get">
    <input type="text" name="name" placeholder="Enter Name"> <br> <br>
    <input type="text" name="fathername" placeholder="Enter Father Name"> <br> <br>
    <textarea name="details" style="resize:none;" cols="30" rows="5" placeholder="Enter Personal Details"></textarea>
    <br><br>
    <button name="submit">click</button>
    </form>  -->
    <div style="margin-top:100px;margin-left:300px;">
    <h1> Enter Employee Details </h1>
    <form action="#" method="post">
    <input type="text" name="empid" placeholder="Enter Employee ID" value="<?php echo $empid; ?>"> <br> <br>
    <input type="text" name="name" placeholder="Enter Name" value="<?php if(!empty($name)) echo $name; ?>"> <br> <br>
    Department <input type="radio" value="finance" <?php if($dept == "finance") echo "checked"; ?> name="department"> Finance 
    <input type="radio" value="marketing" name="department" <?php if($dept == "marketing") echo "checked"; ?>> Marketing
    <input type="radio" value="it" name="department" <?php if($dept == "it") echo "checked"; ?>> IT <br> <br>
    <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>"> <br><br> 
    <textarea name="details" style="resize:none;" cols="30" rows="5" placeholder="Enter Personal Details">
    <?php echo isset($details) ? $details : ''; ?>
    </textarea>
    <br><br>
    <button name="submit">click</button>
    </form>
    </div>
</body>
</html>
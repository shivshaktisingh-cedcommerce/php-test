<?php
if(isset($_POST['upper'])){
    $text = $_POST['check'];
    
    $convertedtext = strtoupper($text);
    $count =0;
    for($i=0;$i<500;$i++)
    {
        if($text[$i]==""){
            $count++;
        }
   
    }
   
    
}
if(isset($_POST['lower'])){
    $text = $_POST['check'];
    $convertedtext = strtolower($text);
    $count =0;
    for($i=0;$i<500;$i++)
    {
        if($text[$i]==""){
            $count++;
        }
   
    }

    

    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
</head>
<body>
      <h2 class="mx-5">Text Area</h2>
      <form method="POST" action ="#">
      <input type="textarea" name="check" class="form-control mx-5"  value="<?php echo $convertedtext ?>">
      <input type="submit" name="upper" class="btn btn-primary mt-2 mx-5" value="Uppercase">
      <input type="submit" name="lower" class="btn btn-primary mt-2 " value="Lowercase">
      </form>
<br>
<br>
<h3 class="mx-5">Summary</h3>
<div class="mx-5"> 
    <?php 
$s = str_word_count($text);

echo "$s words and ";
    $txt = strlen($text);
echo "$txt characters";
   ?>
</div> 


</body>
</html>
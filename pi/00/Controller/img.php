<?php
if(isset($_FILES['imagee'])){
              $tmpName = $_FILES['imagee']['tmp_name'];
              $name = $_FILES['imagee']['name'];
              $size = $_FILES['imagee']['size'];
              $error = $_FILES['imagee']['error'];
              move_uploaded_file($tmpName, './upload/'.$name);
}
else
echo "aaaa";
              
?>
<html>

<form action="" method="POST"  enctype="multipart/form-data">
    <label for="descriptionn" class=" form-control-label">imagee</label>
    <input type="file" name="imagee" id="imagee" placeholder="Enter photo" class="form-control">

    <input type="submit" value="Envoyer">

</form>

</html>
<?php
require 'db.php';
?>
<?php if ( isset ($_SESSION['logged_user']) ) :
$name_p= $_SESSION['logged_user']->login;


$link=mysqli_connect('localhost', 'root', '', 'usertable')
                                                                                or die("Ошибка " . mysqli_error($link));
                                                                            $query ="SELECT * FROM `users` WHERE login='$name_p'";
                                                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                                                            while($row = mysqli_fetch_array($result)){
                                                                            $id_p=$row['id'];
                                                                            echo $id_p;

                                                                                                        }

													endif	?>



<?php
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$tph=$_POST['telephone'];
$ad=$_POST['address'];
$pc=$_POST['postcode'];
$ci=$_POST['city'];
$di=$_POST['dop-infa'];


echo $pc, $tph;



$link=mysqli_connect('localhost', 'root', '', 'usertable');

//$img=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Вставляем имя изображения и содержимое изображения в image_table
$query="INSERT INTO dostavka VALUES('','$fn','$ln','$em','$tph','$ad','$pc','$ci','$di','$id_p')";

					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


ob_start();
			$new_url = 'http://localhost/my-account.php';
			header('Location: '.$new_url);
			ob_end_flush();
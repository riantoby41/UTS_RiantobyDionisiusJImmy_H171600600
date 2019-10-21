<?php
$data=array(1, 4, 6, 9);
for ($i=0; $i < sizeof($data); $i++){
    echo $data[$i];
        }
    echo "<br>";
    $array=array('0','2','4','6');
while ($row=each($array))
{
  echo $row['value'].'';
}
echo "<br>";
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bilangan Positif dan Negatif</title>
    </head>
    <body>
        <form method="POST">
            Masukan nilai = 
            <input type="text" name="nilai1" value="<?php echo $nilai1; ?>"/><br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0) {
                echo $nilai1 . ' Bilangan positif';
            } else if ($nilai1 < 0) {
                echo $nilai1 . ' Bilangan negatif';
            }
            ?>
        </form>
    </body>
</html>

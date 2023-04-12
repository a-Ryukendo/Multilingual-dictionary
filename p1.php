

<!DOCTYPE html>
<html>
<head>
<title>My Dictionary</title>
<style>
body{
background-color: #f6fbfb;
font: cursive;
padding-left:100px;
padding-right: 150px;
}
form{
text-align:center;
}
hr{
border: 1px solid skyblue;
margin-right: 790px;
}
big{
font-size: 20px;
}

b{
font-size: 40px;
}

span{
font-size: 50px;
}
input{
text-align: center;
margin-top: 27px;
margin-bottom: 40px;
border: 1px solid black;
border-radius: 20px;
height: 40px;
width: 85px;
font-size: 20px;

}

.b, .b:hover{
border: 3px solid skyblue;
background-color: #f3f6f7;
color: #99779d;
border-radius: 30px;
width: 300px;
}

.dic{
text-align: center;
/*background-image: url('dictionary.png');*/
font-size: 100px;
padding-top: 80px;
padding-bottom: 68px;
margin-right: -159px;
margin-left: -134px;
margin-top: -8px;
background-size: cover;
background-attachment: scroll;
background-size: 1000px 400px;
border-bottom: 1px solid black;
}
</style>
</head>

<body>
<p class="dic"><em><strong>Dictionary</strong></em></p>

<form action="<?php $_PHP_SELF ?>" method = "POST">
<input class="b" type="text" name="search" placeholder="ENTER A WORD...">
<input type="submit" value="Submit">
</form>

<?php
    $servername = "localhost";
    $username = "deepanshu";
    $password = "kkkk";
     $conn = new PDO("mysql:host=$servername;dbname=dictionary", $username, $password);


if(isset($_POST['search'])){
$sear=$_POST['search'];
$sql="select * from eng where word='$sear'";
$stmt = $conn->query($sql);

$result=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
echo "<span><b><br><br>WORD: ".$row['word']."</b></span>";
$imag=$row['img'];
if($imag!=NULL){
?>
<img align="right"  class="image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($imag);  ?>"style="width:400px;height:400px;" />
<?php
}
echo "<br><br>(<strong>Syllable </strong>- <em>".$row['syllable']."</em>)";
echo "<br><br>(<strong>Pronounciation </strong>- <em>".$row['Pro']."</em>)";
echo "<br><br><strong>SCIENTIFIC NAME </strong>- ".$row['sname']."<br><br><hr>";

$a=$row['id'];
$sql2="select * from e2 where id=$a";
$stmt2=$conn->query($sql2);
$result2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
foreach($result2 as $row2){
echo "<br><br><strong>Type of Speech </strong>- ".$row2['tos'];
echo "<br><br><strong>Synonym</strong>: ".$row2['synonym'];
echo "<br><br><strong>Antonym</strong>: ".$row2['antonym'];
echo "<br><br><strong>Definition</strong>: ".$row2['defintion'];
echo "<br><br><strong>Example</strong>: ".$row2['example']."<br><br><hr>";
}
}
$sql3="select * from languages where id=$a";
$stmt3=$conn->query($sql3);
$result3=$stmt3->fetchAll(PDO::FETCH_ASSOC);
foreach($result3 as $row3){
echo "<br><br><strong><big>TRANSLATION IN INDIAN LANGUAGES:-</big></strong><br><br>";
echo "<br><strong>Hindi</strong>: ".$row3['hword'];
echo "<br><br><strong>Gujrati</strong>: ".$row3['gword'];
echo "<br><br><strong>Malayalam</strong>: ".$row3['mword'];
}
}
?>

</body>
</html>


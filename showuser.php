<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'e_com');

$query1="select * from achat ";
  

  $res=mysqli_query($connection,$query1);

?>
<!DOCTYPE html>
<html>
<head>

<script>

	</script>
	<style>
tbody{
    display: table-row-group !important;
    vertical-align: middle !important;
    border-color: inherit !important;
width:55% !important;
}
.k
{

margin-left:10px;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  
    font-weight: 400;
    line-height: 1.5;

   
}


table
{width: 55% !important;
    max-width: 90%;
    border-spacing: 2px;
    border-color: grey;
    
    display: table;

margin-top:1% !important;
    margin-bottom: 25px !important;


}
table, th, td {


  border: 1px solid grey;
color:grey !important;
    padding: 10px;
size:30px !important;
  margin: 80px;

  text-align:  center;
  
}
th, td {
  padding: 10px;
  
  text-align: left;    
}
h1
{
	text-align: center;
}
.o{
	text-align: center;
	font-size: 52px;
	color: red;
opacity: 0.7;
}
input{
	opcaity:1;
}
h1
{
color:white !important;
}

</style>
  <link rel="shortcut icon" type="image/jpg" href="d.jpg"> 
<link href='css\bootstrap.min.css' rel='stylesheet' type='text/css'>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- If IE use the latest rendering engine -->

  <meta name="viewport" content="width = device-width, initial-scale = 1"> <!-- Set the page to  width of the device and set the zoon lvl -->

  <title>ZELDA</title>
  

  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link href="css/style2.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

 <title>ZELDA</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_1.css">

  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body >
<header style="height: 200px; background-color: black;" >
  <div class="container">
    <nav>
      <h1 class="brand"><a href="home.html"><span>z</span>e<span>l</span>d<span>a</span></a></h1>

      <ul>
        <li><a href="home.html">home</a>
         <li><a href="adee.php">Delete user</a>
        <li><a href="#">about us</a>
      </ul>
    </nav>
  </div>
</header>
<h1> Shopping List </h1>

<?php
if(mysqli_num_rows($res)>0)
	
{
  ?>
  <center>

<table width="50%" border="1" height="200px" class="table table-inverse table-striped mb-0">
<tr><th><div class="k">Id User</div></th><th><div class="k">Username</div></th><th><div class="k">Id Game</div></th><th><div class="k">Gamename</div></th></tr>
    <?php
  while( $t=mysqli_fetch_array($res))
  {
	  $u=$t["User_id"];
	  $g=$t["Game_id"];
	  $reqgame="select * from games where id_game='$g' ";
  	  $requser="select * from login where Id='$u'  ";
	  $res2=mysqli_query($connection,$requser);
	  $res3=mysqli_query($connection,$reqgame);
	$tt=mysqli_fetch_array($res2);
	$tt1=mysqli_fetch_array($res3);
  
     ?>
<tbody>
  <tr>
    <td><div class="k"><?php echo $tt["Id"] ?></div></td>
    <td><div class="k"><?php echo $tt["User_N"] ?></div></td>
 <td><div class="k"><?php echo $tt1["id_game"] ?></div></td>
 <td><div class="k"><?php echo $tt1["Game_N"] ?></div></td>
    
  </tr>
<?php }
  ?>
</table></tbody></center>
<?php 
}
?>






</body>

</html>
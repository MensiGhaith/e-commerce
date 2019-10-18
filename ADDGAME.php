<!DOCTYPE html>
<html>
<head>
        <script language="javascript">
function verif()
{
a=f.name.value;
b=f.price.value;
c=f.genre.value;
d=f.platform.value:
if(a.length==0)
{
    alert("Enter the Game's Name");
    return false;
}
if(b.length==0)
{
    alert("Enter the Game's Price");
    return false;
}
if(isNaN(b))
{
    alert("The Price should be a Integer");
}
if(c.length==0)
{
    alert("Enter the Game's Genre");
    return false;

}
if(d.length==0)
{
    alert("Enter the Game's Platform");
    return false;
}
}
    </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<script src="php/registre.php"></script>
<style type="text/css">
.sub
{
    border: none;
    width: 190px;
    background: white !important;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
}
.sub:hover
{
    color: #fff;
    background-color: grey !important;
}
</style>
</head>

<body>
    <form name="f" class="signup" method="POST" action="php/registre1.php">
        <h2 style="color: #fff;">ADD A GAME</h2>
        <input type="text" name="name" placeholder="Game Name" required><br><br>
        <input type="Number" name="price" placeholder="Price" required><br><br>
        <input type="text" name="genre" placeholder="Genre" required><br><br>
        <input type="text" name="platform" placeholder="Platform" required><br><br>  
        <button type="submit" onclick="verif()" class="sub">ADD</button>
        <br><br>
    </form>
</body>
</html>
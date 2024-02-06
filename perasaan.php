<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

a[type=submit] {
  width: 5%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

a[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
a[type=iya]{
    position:absolute;
    top:143px;
    left:105px;
	width: 5%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>
<body>
<div>
<?php
$namanya	= $_POST['namanya'];
?>
<h2>Apakah kamu perlu belajar pada mata pelajaran <?php echo $namanya ?>  ?</h2>
<p>Jawabannya Adalah...</p>
</div>
<br><br>
<a href="" type="iya"><b><center>TIDAK PERLU</center></b></a>
<a href="hasil.php?nama=<?php echo $namanya ?>" type="submit"  ><b>PERLU</b></a>
</body>
</html>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script>
$(function(){
    $("a").on({
        mouseover:function(){
            $(this).css({
                left:(Math.random()*300)+"px",
                top:(Math.random()*300)+"px",
            });
        }
    });
});
</script>

<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
<form action="" method="post" >
        <input name="num1" type="text" placeholder="numero_1"><br>
        <input name="num2" type="text" placeholder="numero_2"><br>
   
        <input type="submit" name="numero" value="9">
        <input type="submit" name="numero" value="8">
        <input type="submit" name="numero" value="7"> 
        <input type="submit" name="operacao" value="+"><br>
        <input type="submit" name="numero" value="6">
        <input type="submit" name="numero" value="5">
        <input type="submit" name="numero" value="4"> 
        <input type="submit" name="operacao" value="-"><br>
        <input type="submit" name="numero" value="3"> 
        <input type="submit" name="numero" value="2">
        <input type="submit" name="numero" value="1"> 
        <input type="submit" name="operacao" value="*"><br>
        <input type="submit" name="numero" value="0">
        <input type="submit" name="numero" value="=">
        <input type="submit" name="numero" value="C">
        <input type="submit" name="operacao" value="/"><br>
      
           
           
           
           
   </form> 
<?php

   $pri = $_POST['num1'];
   $seg = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $resul = $pri + $seg;
      else if($op == '-')
         $resul = $pri - $seg;
      else if($op == '*')
         $resul = $pri*$seg;
      else
         $resul = $pri/$seg;

      echo "resultado é: $resul";
   }

?>       
</body>
</html>
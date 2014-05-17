<!DOCTYPE HTML>
<html> 
<head> 
 <title>Convert Temperature</title> 
 </head> 
 <body> 
 <center>
 <h2>Temperature Conversion</h2> 
 
 <form action = "conversion.php" method = "post"> 
 Degrees: 
 <input type = "text" name = "degree" size=4> 
 <select name="scale"> 
     <option name="celcius" value="celcius">Celsius</option>
     <option name="fahrenheit" value="fahrenheit">Fahrenheit</option> 
     <option  name="kelvin" value="kelvin">Kelvin</option> 
 </select> 
 <br/> 
 <br />
 <input type = "submit" name = "convert" value="Convert"/> 
 <br />
 </form> 
     
  <?php 
  if(isset($_POST['convert'])){
 
      if ($_POST['scale']=='celcius') 
 {
 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>".$_POST['degree'].  "</td><td>celsius</td></tr>"; 
 $c_2_f = ($_POST['degree']*(9/5))+32; 
 print "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>"; 
 $c_2_k = $_POST['degree']+273.15; 
 print "<tr><td>$c_2_k </td><td>kelvin</td></tr></table>";} 
  
  if ($_POST['scale']=="fahrenheit") 
 {print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>".$_POST['degree'].  "</td><td>farhenheit</td></tr>"; 
 $f_2_c = (($_POST['degree'] -32)*(5/9)); 
 print "<tr><td>$f_2_c</td><td>celsius</td></tr>"; 
 $f_2_k = ($_POST['degree']+459.6)/1.8; 
 print "<tr><td>$f_2_k </td><td>kelvin</td></tr></table>";} 
 
 if ($_POST['scale']=="kelvin") 
 {print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td> 
 ".$_POST['degree'].  "</td><td>kelvin</td></tr>"; 
 $k_2_f = ($_POST['degree'] * 1.8)- 459.67; 
 print "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>"; 
 $k_2_c = $_POST['degree']-273.15; 
 print "<tr><td>$k_2_c </td><td>celsius</td></tr></table>";} 
  }

 ?> 
 </center>
 </body> 
 </html> 
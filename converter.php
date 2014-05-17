 <head> 
 <title>Convert Temperature</title> 
 </head> 
 <body> 
 <center>
 <h2>Temperature Conversion</h2> 
 
 <form action = "converter.php" 
 method = "post"> 
 Degrees: 
 <input type = "text" name = "degree" value="<?php if(isset($_POST['degree'])) echo $_POST['degree'];?>" size=4> 

    <input type="submit" name="btn" value="celcius"> 
   <input type="submit" name="btn" value="farenhite"> 
   <input type="submit" name="btn" value="kelvin"> 
 <br/> 
 <br />
 <br />

     
  <?php 
  $conv='';
  if(isset($_POST['btn'])){
 if ($_POST['btn']=='celcius') 
 {
     $conv=$_POST['degree'];
} 
 
  else if ($_POST['btn']=='farenhite') 
 {
      $conv=($_POST['degree']*(9/5))+32;
} 
 
 else if ($_POST['btn']=='kelvin') 
 {
     $conv=$_POST['degree']+273.15;
    } 
  }

 ?> 
 <tr>
    <td>Result: </td> 
    <td>
        <input type="text" name="result" value="<?php echo $conv; ?>">
    </td>
 </tr>
  </form> 
 </center>
 </body> 
 </html> 
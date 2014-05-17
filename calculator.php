
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculator.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>First Number</td>
                <td>
                    <input type="text" name="first_number" value="<?php 
                                                                   if(isset($_POST['first_number']))                                                         
                                                                    echo $_POST['first_number'];?>"> 
                </td>
            </tr>
            
            <tr>
                <td>Second Number</td>
                <td>
                    <input type="text" name="second_number" value="<?php if(isset($_POST['second_number']))                                                         
                                                                    echo $_POST['second_number'];?>"> 
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" name="btn" value="+"> 
                    <input type="submit" name="btn" value="-"> 
                    <input type="submit" name="btn" value="*"> 
                    <input type="submit" name="btn" value="/"> 
                    <input type="submit" name="btn" value="%"> 
                </td>
            </tr>
            <?php
                echo '<pre>';
                //$convert='Div';
                $convert='';
                $result='';
                if(isset($_POST['btn']))
                {
                    if($_POST['btn']=='+')
                    {
                        $result=$_POST['first_number']+$_POST['second_number'];
                        $convert='Add';
                    }
                    if($_POST['btn']=='-')
                    {
                        $result=$_POST['first_number']-$_POST['second_number'];
                        $convert='Sub';
                    }
                    if($_POST['btn']=='*')
                    {
                        $result=$_POST['first_number']*$_POST['second_number'];
                        $convert='Mul';
                    }
                    if($_POST['btn']=='/')
                    {
                        if('second_number'==0){                            
                            $result= 'Undefined';
                            $convert='Div';
                            
                        }
                        else {
                        $result=$_POST['first_number']/$_POST['second_number'];
                        $convert='Div';
                    }
                    }
                    if($_POST['btn']=='%')
                    {
                        if('second_number'==0){                            
                            $result= 'Undefined';
                            $convert='Rem';
                            
                        }
                        else {                        
                        $result=$_POST['first_number']%$_POST['second_number'];
                        $convert='Rem';
                        }
                    }
                }
            ?>
            <tr>
                <td><?php echo $convert; ?></td>
                <td>
                    <input type="text" value="<?php echo $result;?>" > 
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
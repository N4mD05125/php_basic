<!DOCTYPE html>
<html>
    <h2>Phương Trình Bậc Nhất ax+b=0 <h2>
    <form method = "post">
        <input type = "text" name = "a" required>
        <label> x + </label>
        <input type = "text" name = "b" required>
        <label> = 0 </label><br><br>
        <input type = "submit" value = "Calculate"><br><br>
    </form>    

    <?php

        $a = $_POST['a'];
        $b = $_POST['b'];
        if(!(is_numeric($a) && is_numeric($b))){
            echo "Invalid input";
        }
        else{
            $a = (float)$a;
            $b = (float)$b;
            if($a == 0){
                if($b == 0){
                    echo "Phương trình vô số nghiệm";
                }
                else{
                    echo "Phương trình vô nghiệm";
                }
                
            }
            else{
                $c = -$b/$a;
                echo "Phương trình có nghiệm là x = ".$c;

            }
        }
    ?>
</html>
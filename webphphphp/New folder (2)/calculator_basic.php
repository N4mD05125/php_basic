<!DOCTYPE html>
<html>

    <h2>Calculate basic</h2>
    <form method="post">
        <label>a</label>
        <input type="text" name="a" required><br><br>
        
        <label>b</label>
        <input type="text" name="b" required><br><br>
        
        <input type="submit" value="Calculate"><br><br>
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
            echo "Addition: " . ($a + $b) . "<br/>";
            echo "Subtraction: " . ($a - $b) . "<br/>";
            echo "Multiplication: " . ($a * $b) . "<br/>";
            if ($b != 0) {
                echo "Division: " . ($a / $b) . "<br/>";
            } else {
                echo "Division: Cannot divide by zero<br/>";
            }
        }
    
    ?>

</html>

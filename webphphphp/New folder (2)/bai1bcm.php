<!DOCTYPE html>
<html>
    <form method="post">
        <input type="number" name="input" required>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $input = (int)$input;
        if ($input < 1 || $input > 9) {
            echo "Invalid input";
        } else {
            $output = "";
            for ($i = 1; $i <= $input; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    $output .= $i;
                }
                $output .= "<br>";
            }
            echo $output;
        }
    }
    ?>
</html>

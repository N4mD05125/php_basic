<?php

    $input = "fasfadfa";
    
    function check_input($input) {
        if (strlen($input) < 8) {
            throw new Exception("Độ dài input phải lớn hơn hoặc bằng 8");
        }
        
        // Kiểm tra các điều kiện của input
        if (!preg_match("/^[a-zA-Z0-9]*$/", $input)) {
            throw new Exception("Input không hợp lệ: chỉ được chứa chữ cái và số");
        }
        
        $chars = str_split($input);
        $up = 0;
        $low = 0;
        $digit = 0;
        $special = 0;
        
        foreach ($chars as $char) {
            if (ctype_upper($char)) {
                $up++;
            } elseif (ctype_lower($char)) {
                $low++;
            } elseif (ctype_digit($char)) {
                $digit++;
            } else {
                $special++;
            }
        }
        
        // Kiểm tra số lượng của từng loại ký tự
        if ($up == 0 || $low == 0 || $digit == 0 || $special == 0) {
            throw new Exception("Input không hợp lệ: phải có ít nhất một chữ cái in hoa, một chữ cái thường, một số và một ký tự đặc biệt");
        }
        
        return true;
    }
    
    try {
        check_input($input);
        echo "Input hợp lệ";
    } catch (Exception $error) {
        echo "Lỗi: " . $error->getMessage();
    }

?>

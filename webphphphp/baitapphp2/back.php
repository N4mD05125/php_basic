<?php
    function validate_input($input) {
        if (!is_string($input)) {
            throw new Exception("Đầu vào phải là một chuỗi.");
        }

        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^a-zA-Z\d\\\\\/\:\*\?\<\>\|]).{8,}$/';

        if (!preg_match($pattern, $input)) {
            throw new Exception("Chuỗi phải có độ dài lớn hơn hoặc bằng 8 và chứa ít nhất một chữ hoa, một chữ thường, một chữ số và một ký tự đặc biệt (ngoại trừ \\ / : * ? < > |).");
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $input = $_POST['input'];
            validate_input($input);
            echo "Input hợp lệ.";
        } catch (Exception $error) {
            echo "Lỗi: " . $error->getMessage();
        }
    }


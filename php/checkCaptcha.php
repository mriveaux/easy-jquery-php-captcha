    <?php
    session_start();
    parse_str($_POST['data'], $data);
    $result = ["success" => false];
    if(isset($data['code']))
    {
        $result = ["success" => strtolower($data['code']) == strtolower($_SESSION['captcha'])];
        echo json_encode($result);
    }
    else
    {
        echo json_encode($result);
    }
    ?>

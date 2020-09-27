<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>
    <form action="" method="get">
        <label for="number_a">Введите число</label>
        <input type="number" value="<?php echo $_GET['number_a'] ?? '' ?>" id="number_a" name="number_a">
        <input type="number" value="<?php echo $_GET['number_b'] ?? '' ?>" name="number_b">
        <input type="submit" value="+" name="operation">
        <input type="submit" value="-" name="operation">
        <input type="submit" value="/" name="operation">
        <input type="submit" value="*" name="operation">
    </form>
    <?php
        if($_GET)
        {
            $number_a = $_GET['number_a'];
            $number_b = $_GET['number_b'];
            $operation = $_GET['operation'];
            
            class Calc {
                
                public function operation($a, $b, $c)
                {
                    switch ($c)
                    {
                        case '+':
                            return $a+$b;
                            break;
                        
                        case '-':
                            return $a-$b;
                            break;
                    
                        case '/':
                            if($a == 0 || $b == 0)
                            {
                                return 'На ноль нельзя делить';
                            }
                            return $a/$b;
                            break;
                
                        case '*':
                            return $a*$b;
                            break;

                        default:
                            return 'Операция не поддерживается';
                    }
                }
            }

            $result = new Calc();

            $res = $result->operation($number_a, $number_b, $operation);

            if($res >= 0)
            {
                echo "<p style='color:blue;'>". $res ."</p>";
            }
            else
            {
                echo "<p style='color:red;'>". $res ."</p>";
            }
            

        }
    ?>
</body>
</html>
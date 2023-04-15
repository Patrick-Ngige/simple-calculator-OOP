
<?php

        class Calculator {
            private $num1;
            private $num2;
            private $operation;

            public function __construct($num1, $num2, $operation)
            {
                $this->num1 = $num1;
                $this->num2 = $num2;
                $this->operation = $operation;
            }

            public function calculate()
            {
                switch ($this->operation) {
                    case "add":
                        return $this->num1 + $this->num2;
                        break;
                    case "subtract":
                        return $this->num1 - $this->num2;
                        break;
                    case "multiply":
                        return $this->num1 * $this->num2;
                        break;
                    case "divide":
                        if ($this->num2 == 0) {
                            return "null";
                        } else {
                            return $this->num1 / $this->num2;
                        }
                        break;

                    default:
                        return "MATH ERROR";
                        break;
                }
            }
        }

        if (isset($_POST['operation'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            $calculator = new Calculator($num1, $num2, $operation);
            $result = $calculator->calculate();
        }

        ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator">
        <h2>Result</h2>  
        <div class="result">
                <input type="text" value="<?php echo $result?>"> <br>
                <button onclick="window.location.href='index.php'">Back</button>

        </div>
    </div>

</body>

</html>
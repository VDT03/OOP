<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        class People {
            public string $name;
            public int $age;
            public string $class;
            private float $defaultWallet = 0;

            function set_name($name){
                $this->name = $name;
            }

            function set_age($age){
                $this->age = $age;
            }

            function set_class($class){
                $this->class = $class;
            }

            function get_info_student(){
                echo "THÔNG TIN HỌC SINH<br>";
                echo "Họ và tên: " . $this->name . "<br>";
                echo "Tuổi: " . $this->age . "<br>";
                echo "Lớp: " . $this->class . "<br>";
            }

            function get_info_teacher(){
                echo "<br>THÔNG TIN GIẢNG VIÊN" . "<br>";
                echo "Họ và tên: " . $this->name . "<br>";
                echo "Tuổi: " . $this->age . "<br>";
                echo "Lớp: " . $this->class . "<br>";
                echo "Số tiền ví: " . $this->defaultWallet . " VND<br>";
            }
        }

        $student = new People();
        $student->set_name('Vũ Đức Tài');
        $student->set_age(22);
        $student->set_class('Công Nghệ Thông Tin');
        $student->get_info_student();

        $teacher = new People();
        $teacher->set_name('GIẢNG VIÊN A');
        $teacher->set_age(40);
        $teacher->set_class('Công Nghệ Thông Tin');
        $teacher->get_info_teacher();

    ?>

</body>

</html>
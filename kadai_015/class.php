<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>15章課題</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function  show_price() {
                echo $this->price . '<br>';
            }
        }
        
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            
            public function  show_height() {
                echo $this->height . '<br>';
            }
        }
        
        
        $tamanegi = new Food('玉ねぎ', 200);
        echo '<br>';
        $dog = new Animal('dog', 60, 5000);

        print_r($tamanegi);
        print_r($dog);

        $tamanegi->show_price();
        $dog->show_height();
        ?>
    </p>
</body>

</html>

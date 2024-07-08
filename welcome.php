<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        #RegularArray
        $regular_Array=array("Volvo","BMW","Toyota");
        echo "I like " . $regular_Array[0] . ", " . $regular_Array[1] . " and " . $regular_Array[2] . ".";

        $regular_Array_length=count($regular_Array);
        for($i=0;$i<$regular_Array_length;$i++){
            echo $regular_Array[$i]."<br>";
        }
        $regular_Array[]="Audi";

        $associative_Array=array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

        $associative_Array["color"]="red";

        echo "I like " . $associative_Array["brand"] . ", " . $associative_Array["model"] . " and " . $associative_Array["year"] . ".";

        $multiDimensional_Array=array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );  

        $multiDimensional_Array[4]=array("Audi", 15, 13);

        echo $multiDimensional_Array[4][0].": In stock: ".$multiDimensional_Array[4][1].", sold: ".$multiDimensional_Array[4][2].".<br>";
        
        ?>
</body>
</html>

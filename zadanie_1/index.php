<?php 

$your_number = filter_input(INPUT_POST, "your_number");
$your_name = filter_input(INPUT_POST, "your_name");

$phone_keyboard  = array (
                                "A" => "2",
                                "B" => "22",
                                "C" => "222",
                                "D" => "3",
                                "E" => "33",
                                "F" => "333",
                                "G" => "4",
                                "H" => "44",
                                "I" => "444",
                                "J" => "5",
                                "K" => "55",
                                "L" => "555",
                                "M" => "6",
                                "N" => "66",
                                "O" => "666",
                                "P" => "7",
                                "Q" => "77",
                                "R" => "777",
                                "S" => "7777",
                                "T" => "8",
                                "U" => "88",
                                "V" => "888",
                                "W" => "9",
                                "X" => "99",
                                "Y" => "999",
                                "Z" => "9999",
                                "a" => "2",
                                "b" => "22",
                                "c" => "222",
                                "d" => "3",
                                "e" => "33",
                                "f" => "333",
                                "g" => "4",
                                "h" => "44",
                                "i" => "444",
                                "j" => "5",
                                "k" => "55",
                                "l" => "555",
                                "m" => "6",
                                "n" => "66",
                                "o" => "666",
                                "p" => "7",
                                "q" => "77",
                                "r" => "777",
                                "s" => "7777",
                                "t" => "8",
                                "u" => "88",
                                "v" => "888",
                                "w" => "9",
                                "x" => "99",
                                "y" => "999",
                                "z" => "9999",



);


$phone_keyboard_num = array(

                             "2"  =>  "a",
                            "22" =>   "b",
                            "222"=>   "c",
                            "3"  =>   "d",
                            "33" =>   "e",
                            "333"=>   "f",
                            "4"  =>   "g",
                            "44" =>   "h",
                            "444" =>  "i",
                            "5"  =>   "j",
                            "55"  =>  "k",
                            "555" =>  "l",
                            "6"  =>   "m",
                            "66" =>   "n",
                            "666" =>  "o",
                            "7" =>    "p",
                            "77" =>   "q",
                            "777" =>  "r",
                            "7777" => "s",
                            "8" =>    "t",
                            "88" =>   "u",
                            "888" =>  "v",
                            "9" =>    "w",
                            "99" =>   "x",
                            "999" =>  "y",
                            "9999" => "z",

);


class PhoneKeyboardConverter {
    public function __construct(){

    }
    //method convert to numeric as 
    public function convertToNumeric($string_words){
        global $phone_keyboard;
        //najpierw trzeba dzielic nasz string 
        $split_string_into_array = str_split($string_words);
        //stworzenie loop 
        for($k = 0; $k < count($split_string_into_array); $k++) {
            //loop na glownie array 
            foreach($phone_keyboard as $index => $val) {
                if($split_string_into_array[$k] == $index){
                    print $val.",";
                }
            }
        } 

    }

    public function convertToString($numbers){
        global $phone_keyboard_num;
        $cut_string = str_ireplace(",", " ",$numbers);
        $arr_one = explode( " ", $cut_string);
        //stworzenie loop na pierwszy array jak 
        for($j =0; $j < count($arr_one); $j++){
            //Stworzenie drogi loop zeby ciagac value na pierwszy array z key na drogi array ;
            foreach($phone_keyboard_num as $keys => $values) {
                if($arr_one[$j] == $keys) {
                    print $values;
                }

            }
        }

    }
}



$numeric_name = new PhoneKeyboardConverter();

$check_name =  new PhoneKeyboardConverter();

//check


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie PHP</title>
    <!-- Font Awesome -->
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
        rel="stylesheet"
        />
</head>
<body>
        <div class="container mt-5">
            <div class="row gx-5">
                <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            zadanie PHP
                        </h1>
                        <div class="card-text">
                        <form action="./index.php" method="POST">
                        <!-- Product Description input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="form4Example1" class="form-control" name="your_number"/>
                          <label class="form-label" for="form4Example1">Enter Your Name:</label>
                        </div>
                      
                        <!-- list price input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="form4Example2" class="form-control" name="your_name"/>
                          <label class="form-label" for="form4Example2">Enter Your Numbers</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sprawdz</button>
                      </form>
                        </div>
                    </div>
                </div> 
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="./phone_keyboard.png" alt="">
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-lg-1">
                <div class="col">
                            <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Metoda</th>
                                        <th scope="col">Dane wejściowe</th>
                                        <th scope="col">Zwrócone przez metodę</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>convertToNumeric</td>
                                        <td><?php print htmlspecialchars($your_number);?></td>
                                        <td><?php print htmlspecialchars($numeric_name->convertToNumeric($your_number));?></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>convertToString</td>
                                        <td><?php print htmlspecialchars($your_name);?></td>
                                        <td>
                                            <?php print htmlspecialchars($check_name->convertToString($your_name));?>
                                        </td>
                                        </tr>
                                        
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
        ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array PHP</title>
</head>
<body>
    <h1>Berlatih Array PHP</h1>
    <?php   
        echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
    echo "Kids : " . $kids[0] . ", " . $kids[1] . ", " . $kids[2] . ", " . $kids[3] .  ", " . $kids[4] . ", " . $kids[5] . ".";
    echo "<br>";
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo "Adults : " . $adults[0] . ", " . $adults[1] . ", " . $adults[2] . ", " . $adults[3] . ", " . $adults[4] . "."  ;

    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>" ; 
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>" ;
    echo "<ol>" ;
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    echo "</ol>";

    echo "Total Adults: " . count($adults); 
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */
        echo "<h3> Soal 3</h3>";  
        $aktor = array(
        //data data untuk array    
			array( "Name"=>"Will Byers", 
					"Age"=>"12",
					"Aliases"=>"Will the Wise",
                    "Status"=>"Alive"),

			array( "Name"=>"Mike Wheeler", 
					"Age"=>"12",
					"Aliases"=>"Dugeon Master",
                    "Status"=>"Alive"),

			array( "Name"=>"Jim Hooper", 
					"Age"=>"43",
					"Aliases"=>"Chief Hopper",
                    "Status"=>"Deceased"),

			array( "Name"=>"Eleven", 
					"Age"=>"12",
					"Aliases"=>"El",
                    "Status"=>"Alive")

		);

/* tampilkan variabel array */
echo '<pre>'; print_r($aktor); echo '</pre>';


    ?>
</body>
</html>

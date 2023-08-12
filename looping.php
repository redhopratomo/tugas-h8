<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Looping</title>
    </head>
    <body>
        <h1>Berlatih Looping</h1>
        
        <?php
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /*
            Soal No 1
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat)
            dan Looping yang ke dua menurun (Descending). 
            
            Output: 
            LOOPING PERTAMA
            2 - I love coding
            4 - I love coding
            6 - I love coding
            8 - I love coding
            10 - I love coding
            12 - I love coding
            14 - I love coding
            16 - I love coding
            18 - I love coding
            20 - I love coding
            LOOPING KEDUA
            20 - I will become web developer
            18 - I will become web developer
            16 - I will become web developer
            14 - I will become web developer
            12 - I will become web developer
            10 - I will become web developer 
            8 - I will become web developer 
            6 - I will become web developer 
            4 - I will become web developer 
            2 - I will become web developer 
            */
            //Lakukan Looping Di Sini
            
            echo "LOOPING PERTAMA<br>";
            for ($i = 2; $i <= 20; $i += 2) {
                echo "$i - I love coding<br>";
            }

            echo "LOOPING KEDUA<br>";
            for ($i = 20; $i >= 2; $i -= 2) {
                echo "$i - I will become web developer<br>";
            }


            echo "<h3> Soal No 2 Looping Array Modulo </h3>";
            /*
                Soal No 2
                Looping Array Module 
                Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut. 
                Tampung ke dalam array baru bernama $rest
            */

            $numbers = [18, 45, 29, 61, 47, 34]; 
            echo "Array numbers: ";
            print_r($numbers);

            // Lakukan Looping di sini 
            $rest = [];
            foreach ($numbers as $number) {
                $rest[] = $number % 5;
            }

            echo "<br>"; 
            echo "Array sisa baginya adalah: "; 
            print_r($rest);
            echo "<br>"; 
            
            echo "<h3> Soal No 3 Looping Asociative Array </h3>";
            /*
                Soal No 3
                Loop Associative Array
                Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif.
                Setiap item memiliki key yaitu: id, name, price, description, source.

                Output:
                Array ([id] => 00 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpg)
                Array ([id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpg)
                Array ([id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pintar [source] => genius.jpg)
                Array ([id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpg)

                Jangan ubah variabel $items

            */
            $items = [
                ['00', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
                ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'], 
                ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'], 
                ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
            ];

            //OUTPUT:
            foreach ($items as $item) {
                $assocItem = [
                    'id' => $item[0],
                    'name' => $item[1],
                    'price' => $item[2],
                    'description' => $item[3],
                    'source' => $item[4]
                ];
                print_r($assocItem);
                echo "<br>";
            }

            echo "<h3> Soal No 4 Asterix </h3>";
            /*
                Soal No 4
                Asterix 5x5
                Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut Output:
                *
                * *
                * * *
                * * * *
                * * * * *
            */
            echo "Asterix";
            echo "<br>";

            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>

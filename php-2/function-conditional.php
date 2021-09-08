<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";
    /*
        Soal No 1
        Greetings
        Buatlah sebuah function greetings() yang menerima satu parameter berupa string.

        Contoh: greetings("abduh");
        Output: "Halo Abduh, Selamat Datang di Jabar Coding Camp!"
    */

    // Code function di sini
    function greetings($name)
    {
        echo "Halo $name, Selamat Datang di Jabar Coding Camp!<br>";
    }

    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Abdul");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    /*
        Soal No 2
        Reverse String
        Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping
        (for/while/do while). Function reverseString menerima satu parameter berupa string.

        Contoh: reverseString("abdul");
        Output: ludba

        NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!
    */

    // Code function di sini
    function reverse($string)
    {
        $result = "";
        $stringLength = strlen($string);
        for ($i = ($stringLength - 1); $i >= 0; $i--) {
            $result .= $string[$i];
        }
        return $result;
    }

    function reverseString($string2)
    {
        $reverse = reverse($string2);
        echo "$reverse<br>";
    }

    // Hapus komentar di bawah ini untuk jalankan Code
    reverseString("abduh");
    reverseString("Jabar Coding Camp");
    reverseString("We Are JCC Developers");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";
    /*
        Soal No 3
        Palindrome
        Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan.
        Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
        Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
        
        Contoh:
        palindrome("katak") => output : "true"
        palindrome("jambu") => output : "false"

        NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function
        reverseString dari jawaban no.2!
    */


    // Code function di sini
    function palindrome($string)
    {
        if (reverse($string) == $string) {
            echo "$string = A Palindrome<br>";
        } else {
            echo "$string = Not A Palindrome<br>";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true


    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*
        Soal 4
        Buatlah sebuah function bernama tentukan_nilai. Di dalam function tentukan_nilai yang menerima parameter berupa integer.
        Dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn
        String “Sangat Baik”. Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn
        string “Baik” selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string
        “Cukup” selain itu maka akan mereturn string “Kurang”.
    */

    // Code function di sini
    function tentukan_nilai($score)
    {
        if ($score >= 85 && $score <= 100) {
            echo "Nilai $score = Sangat Baik<br>";
        } elseif ($score >= 70 && $score <= 85) {
            echo "Nilai $score = Baik<br>";
        } elseif ($score >= 60 && $score <= 70) {
            echo "Nilai $score = Cukup<br>";
        } elseif ($score <= 60) {
            echo "Nilai $score = Kurang<br>";
        } else {
            echo "ERROR - PASTIKAN NILAI ADALAH ANGKA!";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
    echo tentukan_nilai("TEST");
    ?>

</body>

</html>
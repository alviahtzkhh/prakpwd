<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
        // mendefinisikan variabel dan memasukkannya kedalam nilai yang kosong
        $namaErr = $emailErr = $genderErr = $websiteErr = "";
        $nama = $email = $gender = $comment = $website = "";

        ////mengambil data dari form dengan metode post
        // membuat kondisi validasi input form
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            // jika nama tidak dimasukkan maka akan muncul pesan nama harus diisi
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            }
            //jika nama tidak kosong maka akan dimasukkan kedalam server
            else {
                $nama = test_input($_POST["nama"]);
            }
            // jika email kosong maka akan muncul pesan email harus diisi
            if (empty($_POST["email"])) {
                $emailErr = "Email harus diisi";
            }
            //jika email terisi maka akan masukkan kedalam server
            else {
                $email = test_input($_POST["email"]);
                // mengecek apakah email address yang dimasukkan sesuai dengan format email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Email tidak sesuai format"; // jika tidak maka akan muncul pesan email tidak sesuai format
                }
            }
            // jika website kosong maka akan tetap dimasukkan kedalam server dengan nilai yang kosong pula
            if (empty($_POST["website"])) {
                $website = "";
            }
            //jika website terisi maka akan di masukkan kedalam server
            else {
                $website = test_input($_POST["website"]);
            }
            // jika kolom komen kosong maka akan tetap dimasukkan kedalam server dengan nilai yang kosong pula
            if (empty($_POST["comment"])) {
                $comment = "";
            }
            //jika komen terisi maka akan dimasukkan kedalam server
            else {
                $comment = test_input($_POST["comment"]);
            }
            // gender tidak dipilih maka akan muncul pesan bahwa gender harus dipilih
            if (empty($_POST["gender"])) {
                $genderErr = "Gender harus dipilih";
            }
            //jika gender sudah dipilih maka akan dimasukkan kedalam server
            else {
                $gender = test_input($_POST["gender"]);
            }
        }

        //membuat fungsi untuk validasi input form
        function test_input($data) {
            $data = trim($data); //untuk menghapus karakter yang tidak diperlukan
            $data = stripslashes($data); //untuk membuang tanda backslash (/) dari input yang dimasukkan oleh user
            $data = htmlspecialchars($data); // untuk mengkonversi karakter khusus html agar tidak diproses oleh browser
            return $data; // mengembalikan nilai data
        }
        ?>

        <!--form input html -->
        <h2>Posting Komentar </h2>
        <p><span class = "error">* Harus Diisi.</span></p>
        <form method = "post" action = "
        <?php
        echo htmlspecialchars($_SERVER["PHP_SELF"]);//untuk melindungi variabel global $_SERVER[“PHP_SELF”] dari html injection
        ?>">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type = "text" name = "nama">
                <span class = "error">* <?php echo $namaErr;?></span>
                </td>
            </tr>
            <tr>    
                <td>E-mail: </td>
                <td><input type = "text" name = "email">
                <span class = "error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Website:</td>
                <td> <input type = "text" name = "website">
                <span class = "error"><?php echo $websiteErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Komentar:</td>
                <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                <input type = "radio" name = "gender" value = "L">Laki-Laki
                <input type = "radio" name = "gender" value = "P">Perempuan
                <span class = "error">* <?php echo $genderErr;?></span>
                </td>
            </tr>
            <td>
            <input type = "submit" name = "submit" value = "Submit">
            </td>
        </table>
    </form>

    <!--menampilkan hasil dari inputan form-->
    <h2> Data yang anda isi: </h2>
    	<table width='50%' border=1> <!--membuat table dengan tebal bordernya 1-->
		    <tr>
                <!--membuat header dari tabel-->
			    <th>Nama</th> <th>Email</th> <th>Website</th> <th>Komentar</th><th>Gender</th>
		    </tr>
	
            <?php
            echo "<tr>";
            echo "<td>".$nama."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$website."</td>";
            echo "<td>".$comment."</td>";
            echo "<td>".$gender."</td>";
            ?>
        </table>
    </body> 
</html>
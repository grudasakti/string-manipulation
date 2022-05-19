<html>

<head>
    <title>Kuis 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card bg-light mt-5 w-50 mx-auto">
            <h5 class="card-header text-center">Aplikasi Manipulasi String PHP</h5>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row">
                        <label for="kalimat" class="col-sm-2 col-form-label">Kalimat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kalimat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" name="manipulasi" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['manipulasi'])) {
    $kalimat = isset($_POST['kalimat']) ? $_POST['kalimat'] : " ";

    echo '
        <div class="container mt-5">
            <table class="table table-bordered table-striped table-dark w-75 mx-auto">
                <tr>
                    <th colspan="2" class="text-center">Hasil Manipulasi String</th>
                </tr>
                <tr>
                    <td>Kalimat</td>
                    <td>' . $kalimat . '</td>
                </tr>
                <tr>
                    <td>Jumlah Kata</td>
                    <td>' . str_word_count($kalimat) . '</td>
                </tr>
                <tr>
                    <td>Balik Kalimat</td>
                    <td>' . strrev($kalimat) . '</td>
                </tr>
                <tr>
                    <td>Upper Case</td>
                    <td>' . strtoupper($kalimat) . '</td>
                </tr>
                <tr>
                    <td>Lower Case</td>
                    <td>' . strtolower($kalimat) . '</td>
                </tr>
            </table>
        </div>
    ';
}
?>
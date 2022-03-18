<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PDO_Sandbox</title>
</head><br>

<body>
    <main class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>Landenoverzicht</h1><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <!--Op dzez plek komt de tabel -->
                    <table class=" table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">naam</th>
                                <th scope="col">capitalCity</th>
                                <th scope="col">continent</th>
                                <th scope="col">population</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?=$data["countryData"];?>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="./js/app.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily News </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/news_logo.png">   

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />


</head>
<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./assets/img/news_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <span class="ml-3 text-bold">
                Daily News
            </span>
        </a>
    </nav>
    
    <?php  
    if ($_POST) {
        $cityName = $_POST['cityName'];
        $date = explode('/', $_POST['date']);
        $month = $date[0];
        $day   = $date[1];
        $year  = $date[2];
        $file_url = 'http://enewspapr.com/News/GUJARAT/'.$cityName.'/'.$year.'/'.$month.'/'.$day.'/'.$year.$month.$day.'_';

        switch ($cityName) {
            case 'AHM':
                $city_name = 'Ahmedabad';
                break;
            case 'SUR':
                $city_name = 'Surat';
                break;
            case 'MUM':
                $city_name = 'Mumbai';
                break;
            case 'BAR':
                $city_name = 'Baroda';
                break;
            case 'RAJ':
                $city_name = 'Rajkot';
                break;
            case 'BHA':
                $city_name = 'Bhavnagar';
                break;
            case 'BHU':
                $city_name = 'Bhuj';
                break;
            default:
                # code...
                break;
        }
        ?>

        <div class="container">
            <h2 class="font-weight-bold">Gujarat samachar</h2>
            <h4> <span class="font-weight-bold">City :</span> <?php echo $city_name  ?></h4>
            <h4> <span class="font-weight-bold">Date :</span> <?php echo $_POST['date']; ?></h4>
            <a href="./" class="btn btn-outline-dark mt-2">Back</a>
        </div>
        <hr>

    <?php  

        $filenames = [];
        $i = 1;
        $num_of_page = 0;
        while(true){
            // $file = 'http://enewspapr.com/News/GUJARAT/SUR/2020/03/28/20200328_'.$i.'.jpeg';
            $file = $file_url.$i.'.jpeg';
            $file_headers = @get_headers($file);
            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                break;
            }
            else {
                array_push($filenames,$file);
                $num_of_page = $i;
                $i++;
            }
        }

        if ($num_of_page != 0) {
            for ($j=0; $j < $num_of_page; $j++) { ?>
                <img src="<?= $filenames[$j] ?>" width="100%"/>
                <hr class="font-weight-bold">
        <?php
            }
        }else{ ?>

            <div class="container text-center">
                <h1 class="text-center" style="font-size: 150px;">404</h1>
                <h3 class="text-center text-uppercase mt-2">OOPS, Sorry we can't find that page</h3>
                <h5 class="text-center mt-2">Either somethig went wrong or the page dosen't exist anymore.</h5>

                <a href="./" class="btn btn-outline-dark mt-4">HOME PAGE</a>
            </div>
        <?php
        }
    }else{  ?>
        <div class="container text-center">
            <h1 class="text-center" style="font-size: 150px;">404</h1>
            <h3 class="text-center text-uppercase mt-2">OOPS, Sorry we can't find that page</h3>
            <h5 class="text-center mt-2">Either somethig went wrong or the page dosen't exist anymore.</h5>

            <a href="./" class="btn btn-outline-dark mt-4">HOME PAGE</a>
        </div>
    <?php } ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

</body>
</html>
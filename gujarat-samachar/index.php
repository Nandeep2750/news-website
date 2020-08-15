<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily News </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/news_logo.png">
    
    <!-- plugins css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.css" />

    <!-- page plugins css -->
    <!-- <link rel="stylesheet" href="assets/vendors/selectize/dist/css/selectize.default.css" /> -->
    <!-- <link rel="stylesheet" href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" /> -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
    <!-- <link rel="stylesheet" href="assets/vendors/summernote/dist/summernote.css" /> -->
    
    <!-- core css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

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

    <div class="container mt-5">
        <form method="post" action="paper.php" class="border border-dark p-4" autocomplete="off">
            <h3>Find news paper</h3>
            <hr>
            <div class="form-group">
                <label for="cityName">Select city</label>
                <select class="form-control" id="cityName" name="cityName">
                    <option value="AHM">Ahmedabad</option>
                    <option value="SUR">Surat</option>
                    <option value="MUM">Mumbai</option>
                    <option value="BAR">Baroda</option>
                    <option value="RAJ">Rajkot</option>
                    <option value="BHA">Bhavnagar</option>
                    <option value="BHU">Bhuj</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Select date</label>
                <div class="timepicker-input input-group">
                    <input type="text" name="date" id="date" class="form-control datepicker" placeholder="Pick your date" data-provide="datepicker">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     
    <!-- page plugins js -->
    <script src="assets/vendors/selectize/dist/js/standalone/selectize.min.js"></script>
    <!-- <script src="assets/vendors/moment/min/moment.min.js"></script> -->
    <!-- <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
    <script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <!-- <script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> -->

    <!-- page js -->
    <script src="assets/js/forms/form-elements.js"></script>

    <script>
        $(function(){
            $('.datepicker').datepicker({
                setDate: new Date(),
                defaultDate: new Date(),
                endDate: '+0d',
                autoclose: true
            }).datepicker("setDate", "0");
        });
    </script>

</body>

</html>
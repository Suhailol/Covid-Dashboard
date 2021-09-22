<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Covid Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button">
        <div class="container">
            <div><a class="navbar-brand" href="#"><span>Covid19 Dashboard India</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="index.php" style="color: #888888;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #888888;">Graphs</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: #888888;">World</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: #888888;">Dev Info</a></li>
                </ul>
            </div>
        </div>
    </nav><table id="example" class="table table-striped table-bordered" cellspacing="0" align="center" width="100%">
    <thead>
  <tr>
    <th>Last Updated Time</th>
    <th>State</th>
    <th>Confirmed</th>
    <th>Active</th>
    <th>Recovered</th>
    <th>Deaths</th>
  </tr>
    </thead>
  

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);



$i=1;
while($i < $statescount){
?>
<tbody>
<tr>
    <td>
    <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?>
    </td>
    <td>
    <?php echo $coranalive['statewise'][$i]['state'] ?>
    </td>
    <td>
    <?php echo $coranalive['statewise'][$i]['confirmed'] ?>
    </td>
    <td>
    <?php echo $coranalive['statewise'][$i]['active'] ?>
    </td>
    <td>
    <?php echo $coranalive['statewise'][$i]['recovered'] ?>
    </td>
    <td>
    <?php echo $coranalive['statewise'][$i]['deaths'] ?>
    </td>
</tr>
</tbody>
<?php
  $i++;
}
?>
</table>

<footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2021</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>

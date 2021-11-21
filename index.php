
<?php
include "logic.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- My jQuery -->
    <script src="main.js"></script>
 
<title>Traqueur Covid19</title>    
</head>
<body>

    <div class="header">
       <a href="#" class="logo">c<span class="fas fa-virus"></span>ovid-19</a>
 
         <nav class="navbar">
     <ul>
        
         <li><a href="#protect">protect</a></li>
         <li><a href="#symtoms">symtoms</a></li>
         <li><a href="#prevent">prevent</a></li>
         <li><a href="#handwash">handwash</a></li>
         <li><a href="#spread">spread</a></li>
     </ul>
       </nav>
 
    </div>

     <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">to keep track of all covid-19 cases around the world.</h5>

    </div>
    
    <section>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed ?>
            </div>
            <div class="col-4">
                <h5>Recovered</h5>
                <?php echo $total_recovered ?>
            </div>
            <div class="col-4">
                <h5>Deceased</h5>
                <?php echo $total_deaths ?>
            </div>
        </div>
    </div>
    </section>

    <section>
    <div class="container bg-light p-3 text-center">
        <h5 class="text-info">"prevention ins the cure."</h5>
        <p class="text-muted"> stay in dorrs stay safe.</p>
    </div>
    </section>



    <div class="container-fluid">
    <div class="table-responsive">
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Contries</th>
                    <th scope="col">confirmed</th>
                    <th scope="col">recovered</th>
                    <th scope="col">decased</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    foreach($dat as $key => $value){ 
                        $increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed']
               ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td>
                        <?php
                         echo $value[$days_count]['confirmed'];
                        ?>
                        <?php if ($increase != 0) {?>
                           <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small> 
                        <?php  } ?>
                    </td>
                    <td>
                        <?php
                         echo $value[$days_count]['recovered'];
                        ?>
                    </td>
                    <td>
                        <?php
                         echo $value[$days_count]['deaths'];
                        ?>
                    </td>
                </tr>
           
           
                    <?php   }?>
            </tbody>
        </table>
    </div>
    </div>
    
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center" >
            <span class="text-muted">Copyright &copy;2021</span>
        </div>
    </footer>
</body>
</html>




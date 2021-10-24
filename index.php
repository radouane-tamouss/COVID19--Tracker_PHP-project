<?php
    include "logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Tracker</title>
    <!-- for bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/792c251bad.js" crossorigin="anonymous"></script>
    <!-- css file -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An open source project to keep track of all covid-19 cases around the world.</h5>

    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>confirmed</h5>
            </div>
            <div class="col-4">
                <h5>recovered</h5>
            </div>
            <div class="col-4">
                <h5>confirmed</h5>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 text-center">
        <h5>"prevention ins the cure."</h5>
        <p class="text-muted"> stay in dorrs stay safe.</p>
    </div>

    <div class="container-fluid">
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
                    foreach($data as $key => $value)
                    {
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                ?>
                    <tr>
                        <th><?php echo $key;?></th>
                        <td>
                            <?php echo $value[$days_count]['confirmed'];?>
                            <?php if($increase != 0 ){ ?>
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;  ?>
                            <?php }?>
                        </td>
                        <td>
                            <?php echo $value[$days_count]['recovered'];?>
                        </td>
                        <td>
                            <?php echo $value[$days_count]['deaths'];?>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Copyright &copy;2020</span>
        </div>
    </footer>
</body>
</html>
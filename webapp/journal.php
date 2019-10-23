<?php
require_once "scripts/connectDatabase.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BHBR</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="styles/style.css" type="text/css" rel="stylesheet" />
    <!-- <link href="styles/jumbotron-narrow.css" rel="stylesheet"> -->
</head>

<body>

    <div id="container">

        <?php include "nav.php" ?>

        <div class="content">
            <h4><?php echo $_COOKIE["username"];?>'s Journal</h4>
            <hr>
            <div id="journal">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Week #</th>
                            <th scope="col">Picking nose</th>
                            <th scope="col">Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3</th>
                            <td>Did it again today!</td>
                            <td>yesterday</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>its been really hard today</td>
                            <td>15/9/19</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Went to the beach</td>
                            <td>14/9/19</td>
                            
                        </tr>


                        <tr>
                            <th scope="row">2</th>
                            <td>Did it again today!</td>
                            <td>yesterday</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>its been really hard today</td>
                            <td>15/9/19</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Went to the beach</td>
                            <td>14/9/19</td>
                            
                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Week #</th>
                            <th scope="col">calling Grandma</th>
                            <th scope="col">Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3</th>
                            <td>Did it again today!</td>
                            <td>yesterday</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>its been really hard today</td>
                            <td>15/9/19</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Went to the beach</td>
                            <td>14/9/19</td>
                            
                        </tr>


                        <tr>
                            <th scope="row">2</th>
                            <td>Did it again today!</td>
                            <td>yesterday</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>its been really hard today</td>
                            <td>15/9/19</td>
                            
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Went to the beach</td>
                            <td>14/9/19</td>
                            
                        </tr>

                    </tbody>
                </table>

                

            </div>

        </div>

        <?php include "footer.php" ?>
    </div>



</body>

</html>
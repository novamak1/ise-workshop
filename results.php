<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>WELCOME TO SALESMAN</h1>
    <tbody>
                <?php 
                    include './connect.php';
                    $query = "SELECT GRADE, COUNT (DISTINCT CUSTOMER_ID)
                    FROM CUSTOMER1
                    GROUP BY GRADE
                    HAVING GRADE > (SELECT AVG(GRADE)
                    FROM CUSTOMER1
                    WHERE CITY='BANGALORE'";
                    $queryExec = mysqli_query($connection, $query);
                    while($result = mysqli_fetch_array($queryExec, MYSQLI_ASSOC)){
                ?>
                  <tr>
                    <th scope="row">
                      <?php echo $result["grade"] ?>
                    </th>
                    <td>
                    <?php echo $result["title"] ?>
                    </td>
                    <td>
                    <?php echo $result["publisher_name"] ?>
                    </td>
                    <td>
                    <?php echo $result["book_author"] ?>
                    </td>
                    <td>
                    <?php echo $result["no_of_copies"] ?>
                    </td>
                    <td>
                    <?php echo $result["branch_id"] ?>
                    </td>
                  </tr>
                    <?php } ?>
                </tbody>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
  </body>
</html>
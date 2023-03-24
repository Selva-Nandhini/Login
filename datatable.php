<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <table id="myTable" class="table table-striped bg-info p-3 mb-2">
        <thead class="text-white">
            <th>SERAIL NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE NUMBER</th>
            <th>MESSAGE</th>
        </thead>
        <tbody class="text-white font-weight-bold"">
            <!-- connection to database -->
            <?php

                $conn = mysqli_connect("localhost", "root", "", "contactform") or die("Error in Correction");

                $query = mysqli_query($conn, "SELECT * FROM contact_list ORDER BY name");

                while ($result = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['message']."</td>
                    </tr>";
                }
                ?>
        </tbody>
    </table>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable();
            })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
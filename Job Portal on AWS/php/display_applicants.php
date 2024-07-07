<html>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Full_name</th>
            <th>email</th>
            <th>ph_name</th>
            <th>sc_name</th>
            <th>uni_name</th>
            <th>job_role</th>
        </tr>
        <?php
        $con=mysqli_connect
        ("database-1.cfoyt8ldwtuy.us-east-2.rds.amazonaws.com",
        "webserver",
        "Ang&9733",
        "my_awsproj");
        if($con->connect_error){
            die("Connection failed". $con->connect_error);
        }
        $sql = "SELECT id,Full_name,email,ph_num,sc_name,uni_name,job_role from applicants";
        $result=$con->query($sql);
        if($result-> num_rows > 0){
         while($row =$result->fetch_assoc()) {
             echo "<tr><td>". $row["id"] . 
             "</td><td>" .
              $row["Full_name"] . 
              "</td><td>" .
               $row["email"] . 
               "</td><td>" .
                $row["ph_num"] .
                 "</td><td>" .
                  $row["sc_name"] .
                   "</td><td>" .
                    $row["uni_name"] .
                     "</td><td>" . 
                     $row["job_role"] .
                      "</td></tr>";
         }
         echo "</table>";
        }
        else{
            echo " 0 resulti" ;
        }
        $con->close();
        ?>
    </table>

</html>
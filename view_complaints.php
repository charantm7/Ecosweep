<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c81e574e1d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .undl {
                text-decoration: none;
                    
            }
            
        .undl:hover {
             
            text-decoration: none;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
<div style="text-align:end; margin-right:30px; padding-top:50px"><button class="btn btn-primary text-white"><a class="text-white undl" href="login_form.php">logout</a></button></div>

<div class="container">
    <h2>Complaints List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Location</th>
                <th>Description</th>
                <th>Image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <h1>Complaints:</h1>
            <tr>
                <td>2024091901</td>
                <td>Lat: 12.9794048<br/> Long: 77.594624</td>
                <td>Please clean this dog.</td>
                <td style="text-align: center;">                    
                    <img  src="https://res.cloudinary.com/dfomcgwro/image/upload/v1726657290/garbage-2.jpg" alt="Complaint Image" style="max-width: 200px;"/>
                </td>
                <td>Processing..</td>
            </tr>
            <tr>
                <tr>
                    <td>2024091902</td>
                    <td>Lat: 12.97945688<br/> Long: 77.512624</td>
                    <td>clean the garbage.</td>
                    <td style="text-align: center;">                        
                        <img src="https://res.cloudinary.com/dfomcgwro/image/upload/v1726656344/garbage-1.jpg" alt="Complaint Image" style="max-width: 200px;"/>
                    </td>
                    <td>action taken</td>
                </tr>
            </tr>
                <td>2024091913</td>
                <td>Lat: 12.3654048<br/> Long: 77.345624</td>
                <td>clean this waste.</td>
                
                <td style="text-align: center;">                                        
                    <img src="https://res.cloudinary.com/dfomcgwro/image/upload/v1726657813/garbage-3.png" alt="Complaint Image" style="max-width: 200px;"/>
                </td>
                <td>in hold</td>
            </tr>
        </tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;">                                        
            <im src="" alt="Complaint Image" style="max-width: 200px;"/>
        </td>
        <td></td>
    </tr>
            
        </tbody>
    </table>
</div>

</body>
</html>

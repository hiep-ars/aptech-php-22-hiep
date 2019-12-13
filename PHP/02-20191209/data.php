<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>data</title>
<style>
td, th {
    border: 2px solid blue ;
}
</style>
</head>
<body>
<?php
$hiep = [
    [
    "name" => "hiep",
    "email" => "ltruonghiep37@gmail.com",
    "phone" => "0328606980",
    "dob" => "30/12/1997",
    "nationality" => "vietnam",
    "city" => "Da Nang"
    ],
    [
        "name" => "nam",
        "email" => "ltruonghiep37@gmail.com",
        "phone" => "0328606980",
        "dob" => "30/12/1997",
        "nationality" => "vietnam",
        "city" => "Da Nang"
        ],
        [
            "name" => "hoang",
            "email" => "ltruonghiep37@gmail.com",
            "phone" => "0328606980",
            "dob" => "30/12/1997",
            "nationality" => "vietnam",
            "city" => "Da Nang"
            ],   
            [
                "name" => "binh",
                "email" => "ltruonghiep37@gmail.com",
                "phone" => "0328606980",
                "dob" => "30/12/1997",
                "nationality" => "vietnam",
                "city" => "Da Nang"
                ],                              
            ];
?>
<table>
<thead>
<th>#</th>
<th>name</th>
<th>email</th>
</thead>
<tbody>
<?php
 for ($i = 0; $i < count($hiep); $i++) {
    ?>
  <tr>
    <td>
      <?php
          echo $i + 1;
          ?>
    </td>
    <td>
      <?php
          echo $hiep[$i]["name"];
          ?>
    </td>
    <td>
      <?php
          echo $hiep[$i]["email"];
          ?>
    </td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
</body>
</html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CanView</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Dashboard</h1>  
        <div class="classlist">
          <ul class="classes">
          <?php
            define("USERTOKEN", "8909~DyORirLbPlOMvbsGo93oOIMkTsD58A5wtlTPh6Ob0duGktqHfMHfiTmfi4fxqakO");

            $response = file_get_contents("https://lms.pps.net/api/v1/courses?access_token=" . USERTOKEN . "&enrollment_state=active");
            $courses = json_decode($response, false);
            for ($i = 0; $i < count($courses); $i++) {
              $coursename = $courses[$i]->name;
              echo "<li>$coursename</li>";
            }
          ?>
          </ul>
        </div>
    </main>
  </body>
</html>

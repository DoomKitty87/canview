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
        <h1>Dashboard test</h1>  
        <div class="classlist">
          <ul class="classes">
          <?php
            define("userToken", "8909~DyORirLbPlOMvbsGo93oOIMkTsD58A5wtlTPh6Ob0duGktqHfMHfiTmfi4fxqakO");
            
            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://api.github.com/user', [
                'auth' => ['user', 'pass']
            ]);

          ?>
          </ul>
        </div>
    </main>
  </body>
</html>

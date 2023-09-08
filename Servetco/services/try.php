<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Radio Buttons in PHP</title>
  <style>
    .container {
      max-width: 300px;
      margin: 50px auto;
      text-align: left;
      font-family: sans-serif;
    }
    select {
      width: 100%;
      min-height: 150px;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      display: block;
      margin: 20px auto;
    }
    label {
      display: block;
      position: relative;
      cursor: pointer;
      font-size: 18px;
      padding-left: 46px;
      margin-bottom: 15px;      
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    label input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }
    .select {
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      position: absolute;
      border-radius: 50%;
      background-color: #cccccc;
    }
    label:hover input~.select {
      background-color: #ccc;
    }
    label input:checked~.select {
      background-color: #1A33FF;
    }
    .select:after {
      content: "";
      position: absolute;
      display: none;
    }
    label input:checked~.select:after {
      display: block;
    }
    label .select:after {
      top: 9px;
      left: 9px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: white;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <label>
        <input type="radio" name="radio" value="Lock & Key">Lock & Key
        <span class="select"></span>
      </label>
      <label>
        <input type="radio" name="radio" value="Umbrella Academy">Umbrella Academy
        <span class="select"></span>
      </label>
      <label>
        <input type="radio" name="radio" value="Stranger Things">Stranger Things
        <span class="select"></span>
      </label>
      <label>
        <input type="radio" name="radio" value="Ozark">Ozark
        <span class="select"></span>
      </label>
      <input type="submit" name="submit" vlaue="Get Values">
    </form>
    <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['radio'])) {
          echo '  ' . $_POST['radio'];
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
  </div>
</body>
</html>
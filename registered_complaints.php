<!DOCTYPE html>
<?php include("conn.php") 
// error_reporting(0) ?>
<html>
  <head>
    <title>View Complaints</title>
    
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="reportcrime.html" />
    <link
      href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/602bbd89d0.js"></script>
  </head>
  <style>
    nav a {
      font-weight: 700;
      text-align: center;
      font-size: 40px;
      font-family: Hack, sans-serif;
      text-transform: uppercase;
      background: linear-gradient(
        90deg,
        rgb(207, 202, 202),
        #fff,
        rgb(221, 221, 221)
      );
      letter-spacing: 5px;
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      background-repeat: no-repeat;
      background-size: 80%;
      animation: shine 4s linear infinite;
      position: relative;
    }
    @keyframes shine {
      0% {
        background-position-x: -500%;
      }
      100% {
        background-position-x: 500%;
      }
    }
    body {
      background-color: #130f40;
      background-image: linear-gradient(300deg, #393660 0%, #000000 95%);
      background-repeat: no-repeat;
      background-size: 100%;
      height: 100%;
      background-position: center;
      color: aliceblue;
    }

    nav {
      height: 40px;
      padding-top: 15px;
      background-blend-mode: lighten;
    }

    nav a {
      margin: 10px;
      font-family: 'Source Serif 4', sans-serif;
      padding: 10px;
      text-decoration: none;
      color: rgb(17, 17, 17);
      font-size: 20px;

      border-radius: 4px;
      color: whitesmoke;
    }

    header {
      display: flex;
      font-size: larger;
      border: solid;
      height: 100px;
      font-size: 50px;
      align-items: center;
      padding-left: 15px;
      border-radius: 5px;
    }

    tr {
      font-size: larger;
    }

    table {
      text-align: center;
    }

    table thead {
      font-weight: bold;
    }
    h1 {
      font-weight: 700;
      text-align: center;
      font-size: 40px;
      font-family: Vidaloka;
      text-transform: uppercase;
      background: linear-gradient(90deg, #000, #fff, #000);
      letter-spacing: 5px;
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      background-repeat: no-repeat;
      background-size: 80%;
      animation: shine 8s linear infinite;
      position: relative;
    }
   .id{
    padding: 10px;
    
   }
   .logout{
    float: right;
   }
  </style>

  <body>
    <header>GATES OF GOTHAM</header>
    <nav>
      <a href="index1.html" class="title">Home</a>
      <a href="about.html">About</a>
      <a href="login.html" id="1">Login</a>
      <a href="faq.html">FAQ</a>
      <a class="logout" href="logout.php">Logout</a>
    </nav>
    <hr />
    <div class="main-div">
      <h1 align="center">Registered Complaints</h1>
      <div class="center-div">
        <div class="table-responsive">
          <table border="2" width="100%" cellspacing="0" bgcolor="">
          <?php
	
  $selectquery = "select * from reportcrime ";
  $query = mysqli_query($connection, $selectquery);
  $num = mysqli_num_rows($query);

  while($res = mysqli_fetch_array($query)){

?>
    
    <tr>
      <td class="id"><a href="<?php echo $res['hash']; ?>"><?php echo $res['hash']; ?></a></td>
      
    </tr>
<?php
  }

?>
          </table>
        </div>
      </div>
    </div>

    <br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
  </body>
</html>

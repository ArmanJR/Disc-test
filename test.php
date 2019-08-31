
<?php
include_once("dbconfig.php");
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>The DISC by JR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">The DISC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Test</a>
          </li>
        </ul>
      </div>
    </nav>

<main role="main" class="container">
<div class="row">
    <div class="col">
        <h1>دستورالعمل ها</h1>
        <p>
            <ol>
                <li>محلی را به دلخواه انتخاب کنید (محل کار یا خانه و...) و سوالات جدول زیر را متناسب با آن محیط پاسخ دهید.</li>
                <li>در هر خانه چهار عبارت آورده شده است که با دقت آنها را خوانده و حرف مقابل «بهترین توصیف» از شما را در ستون مربوط مشخص
                کنید. دقت کنید که این صفت با توجه به محل انتخاب شده در مرحله قبل است.</li>
                <li>همین کار را برای «بدترین توصیف» از شما نیزدر ستون مربوطه انجام دهید.</li>
                <li>در هر خانه فقط یک مورد برای «بهترین توصیف» و یک مورد برای «بدترین توصیف» انتخاب کنید.</li>
                <li>این پرسشنامه را در ظرف  10دقیقه کامل کنید. سریع باشید ولی عجله نکنید.</li>
                <li>معمولا اولین پاسخ درستترین پاسخ است. پاسخهایتان را اصلاح نکنید.</li>
            </ol>
        </p>
    </div>
</div>   
<form action="result.php" method="POST">
<div class="row">
    <?php
    $sql = "SELECT * FROM data WHERE section=";
    for($i=1;mysqli_num_rows($result=$conn->query($sql.strval($i)))>0;$i+=1){ 
        if($i%3==1) echo '</div><div class="row">'; ?>
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="width: 70%">&nbsp;</th>
                        <th scope="col" style="width: 15%">بهترین توصیف</th>
                        <th scope="col" style="width: 15%">بدترین توصیف</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=$result->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><div><?php echo $row["attr"];?></div></th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="#<?php echo $row["section"]; echo "_"; echo($row["id"]-1)%4+1;?>" id="blankRadio1" value="<?php echo $row["best"];?>B" <?php if((bool)random_int(0, 1)) echo 'checked';?>>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="#<?php echo $row["section"]; echo "_"; echo($row["id"]-1)%4+1;?>" id="blankRadio2" value="<?php echo $row["worst"];?>W" <?php if((bool)random_int(0, 1)) echo 'checked';?>>
                            </div>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <?php }?>
</div> 
<br><button type="submit" class="btn btn-primary btn-lg btn-block">پایان تست</button>
</form>
</main><!-- /.container -->

<br><br>

<footer class="footer mt-auto py-3" style="background-color: #f5f5f5;">
  <div class="container">
    <span class="text-muted">Copyright &copy; Junior</span>
  </div>
</footer>

<script src="js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
<script src="js/custom.js"></script>
</html>

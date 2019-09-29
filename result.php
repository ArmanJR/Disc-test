
<?php
include_once("dbconfig.php");
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dBest=$dWorst=$dDiff=
$iBest=$iWorst=$iDiff=
$sBest=$sWorst=$sDiff=
$cBest=$cWorst=$cDiff=
$nBest=$nWorst = 0;
$sql = "SELECT * FROM data";
$rowCount = mysqli_num_rows($result=$conn->query($sql));
for($i=1;$i<=$rowCount;$i+=1){ 
    while($row=$result->fetch_assoc()){
        $radio = '#'.strval($row['section']).'_'.strval(($row['id']-1)%4+1);
        //echo $radio."<br>";
        if (isset($_POST[$radio])){
            //echo $radio." => ".$_POST[$radio].'<br>';
            switch($_POST[$radio]){
                case "DB":
                    $dBest+=1;
                    break;
                case "DW":
                    $dWorst+=1;
                    break;    
                case "IB":
                    $iBest+=1;
                    break;
                case "IW":
                    $iWorst+=1;
                    break;
                case "SB":
                    $sBest+=1;
                    break;
                case "SW":
                    $sWorst+=1;
                    break;
                case "CB":
                    $cBest+=1;
                    break;
                case "CW":
                    $cWorst+=1;
                    break;
                case "NB":
                    $nBest+=1;
                    break;
                case "NW":
                    $nWorst+=1;
                    break;
                default:
                    echo 'Eeeeeeee!';
            }
        }
    }
}
$dDiff = $dBest - $dWorst;
$iDiff = $iBest - $iWorst;
$sDiff = $sBest - $sWorst;
$cDiff = $cBest - $cWorst;
$dDiffSigned = $dDiff > 0 ? '+'.strval($dDiff) : strval($dDiff);
$iDiffSigned = $iDiff > 0 ? '+'.strval($iDiff) : strval($iDiff);
$sDiffSigned = $sDiff > 0 ? '+'.strval($sDiff) : strval($sDiff);
$cDiffSigned = $cDiff > 0 ? '+'.strval($cDiff) : strval($cDiff);

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
            <a class="nav-link" href="test.php">Test</a>
          </li>
        </ul>
      </div>
    </nav>

<main role="main" class="container" style="direction:ltr !important; margin-top:30px;">
<table class="table table-bordered" style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">D</th>
      <th scope="col">I</th>
      <th scope="col">S</th>
      <th scope="col">C</th>
      <th scope="col">N</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Most</th>
      <td><?php echo $dBest;?></td>
      <td><?php echo $iBest;?></td>
      <td><?php echo $sBest;?></td>
      <td><?php echo $cBest;?></td>
      <td><?php echo $nBest;?></td>
    </tr>
    <tr>
      <th scope="row">Least</th>
      <td><?php echo $dWorst;?></td>
      <td><?php echo $iWorst;?></td>
      <td><?php echo $sWorst;?></td>
      <td><?php echo $cWorst;?></td>
      <td><?php echo $nWorst;?></td>
    </tr>
    <tr>
      <th scope="row">Difference</th>
      <td><?php echo $dDiff;?></td>
      <td><?php echo $iDiff;?></td>
      <td><?php echo $sDiff;?></td>
      <td><?php echo $cDiff;?></td>
      <td>N/A</td>
    </tr>
  </tbody>
</table>

<hr>

<table class="table table-bordered" style="text-align:center;" id="graph3">
  <thead>
    <tr>
      <th scope="col">G3</th>
      <th scope="col">D</th>
      <th scope="col">I</th>
      <th scope="col">S</th>
      <th scope="col">C</th>
      <th scope="col" rowspan="4">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>28</td>
        <td>+27</td>
        <td>+28</td>
        <td>+26</td>
        <td>+24</td>
        <td rowspan="4">7</td>
    </tr>
    <tr id="top-row">
        <td>27</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>26</td>
        <td>+9</td>
        <td>+9</td>
        <td>+13</td>
        <td>+7</td>
    </tr>
    <tr>
        <td>25</td>
        <td>+6</td>
        <td>+8</td>
        <td>+12</td>
        <td>+6</td>
    </tr>
    <tr>
        <td>24</td>
        <td>+5</td>
        <td>+7</td>
        <td>+11</td>
        <td>+5</td>
        <td rowspan="4">6</td>
    </tr>
    <tr>
        <td>23</td>
        <td>+3</td>
        <td>&nbsp;</td>
        <td>+10</td>
        <td>+4</td>
    </tr>
    <tr>
        <td>22</td>
        <td>+1</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>21</td>
        <td>0</td>
        <td>+6</td>
        <td>+9</td>
        <td>+3</td>
    </tr>
    <tr>
        <td>20</td>
        <td>-1</td>
        <td>+5</td>
        <td>+8</td>
        <td>+2</td>
        <td rowspan="4">5</td>
    </tr>
    <tr>
        <td>19</td>
        <td>-2</td>
        <td>+4</td>
        <td>+7</td>
        <td>+1</td>
    </tr>
    <tr>
        <td>18</td>
        <td>-3</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>0</td>
    </tr>
    <tr>
        <td>17</td>
        <td>-4</td>
        <td>+3</td>
        <td>+6</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>16</td>
        <td>-5</td>
        <td>+2</td>
        <td>&nbsp;</td>
        <td>-1</td>
        <td rowspan="4">4</td>
    </tr>
    <tr>
        <td>15</td>
        <td>-6</td>
        <td>+1</td>
        <td>+5</td>
        <td>-2</td>
    </tr>
    <tr>
        <td>14</td>
        <td>-7</td>
        <td>&nbsp;</td>
        <td>+4</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>13</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>+3</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>12</td>
        <td>-8</td>
        <td>0</td>
        <td>+2</td>
        <td>-3</td>
        <td rowspan="4">3</td>
    </tr>
    <tr>
        <td>11</td>
        <td>-9</td>
        <td>-1</td>
        <td>+1</td>
        <td>-4</td>
    </tr>
    <tr>
        <td>10</td>
        <td>-10</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>9</td>
        <td>-11</td>
        <td>-2</td>
        <td>0</td>
        <td>-5</td>
    </tr>
    <tr>
        <td>8</td>
        <td>-12</td>
        <td>-3</td>
        <td>-1</td>
        <td>-6</td>
        <td rowspan="4">2</td>
    </tr>
    <tr>
        <td>7</td>
        <td>-13</td>
        <td>-4</td>
        <td>-2</td>
        <td>-7</td>
    </tr>
    <tr>
        <td>6</td>
        <td>-14</td>
        <td>-5</td>
        <td>-3</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>5</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>-4</td>
        <td>-8</td>
    </tr>
    <tr>
        <td>4</td>
        <td>-15</td>
        <td>-6</td>
        <td>-5</td>
        <td>-9</td>
        <td rowspan="4">1</td>
    </tr>
    <tr>
        <td>3</td>
        <td>-16</td>
        <td>-7</td>
        <td>-7</td>
        <td>-10</td>
    </tr>
    <tr id="bottom-row">
        <td>2</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>1</td>
        <td>-27</td>
        <td>-26</td>
        <td>-27</td>
        <td>-26</td>
    </tr>
  </tbody>
</table>


</main><!-- /.container -->

<footer class="footer mt-auto py-3" style="background-color: #f5f5f5;">
  <div class="container">
    <span class="text-muted">Copyright &copy; Junior</span>
  </div>
</footer>

<script src="js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
<script>
var dDone, iDone, sDone, cDone = 0;
$("#graph3 td:nth-child(2)").filter(function(){
    if($(this).text() == '<?php echo $dDiffSigned;?>'){
        dDone = 1;
        //alert($(this).parent("td:nth-child(1)").text());
    }
    return $(this).text() == '<?php echo $dDiffSigned;?>';
}).css( "background-color", "yellow" );
$("#graph3 td:nth-child(3)").filter(function(){
    if($(this).text() == '<?php echo $iDiffSigned;?>')
        iDone = 1;
    return $(this).text() == '<?php echo $iDiffSigned;?>';
}).css( "background-color", "yellow" );
$("#graph3 td:nth-child(4)").filter(function(){
    if($(this).text() == '<?php echo $sDiffSigned;?>')
        sDone = 1;
    return $(this).text() == '<?php echo $sDiffSigned;?>';
}).css( "background-color", "yellow" );
$("#graph3 td:nth-child(5)").filter(function(){
    if($(this).text() == '<?php echo $cDiffSigned;?>')
        cDone = 1;
    return $(this).text() == '<?php echo $cDiffSigned;?>';
}).css( "background-color", "yellow" );
if(!dDone){
    <?php if($dDiff>0){ ?>
    $("#top-row td:nth-child(2)").css( "background-color", "yellow" );
    $("#top-row td:nth-child(2)").text('<?php echo $dDiffSigned;?>');
    <?php }else{ ?>
    $("#bottom-row td:nth-child(2)").css( "background-color", "yellow" );
    $("#bottom-row td:nth-child(2)").text('<?php echo $dDiffSigned;?>');
    <?php } ?>
}
if(!iDone){
    <?php if($iDiff>0){ ?>
    $("#top-row td:nth-child(3)").css( "background-color", "yellow" );
    $("#top-row td:nth-child(3)").text('<?php echo $iDiffSigned;?>');
    <?php }else{ ?>
    $("#bottom-row td:nth-child(3)").css( "background-color", "yellow" );
    $("#bottom-row td:nth-child(3)").text('<?php echo $iDiffSigned;?>');
    <?php } ?>
}
if(!sDone){
    <?php if($sDiff>0){ ?>
    $("#top-row td:nth-child(4)").css( "background-color", "yellow" );
    $("#top-row td:nth-child(4)").text('<?php echo $sDiffSigned;?>');
    <?php }else{ ?>
    $("#bottom-row td:nth-child(4)").css( "background-color", "yellow" );
    $("#bottom-row td:nth-child(4)").text('<?php echo $sDiffSigned;?>');
    <?php } ?>
}
if(!cDone){
    <?php if($cDiff>0){ ?>
    $("#top-row td:nth-child(5)").css( "background-color", "yellow" );
    $("#top-row td:nth-child(5)").text('<?php echo $cDiffSigned;?>');
    <?php }else{ ?>
    $("#bottom-row td:nth-child(5)").css( "background-color", "yellow" );
    $("#bottom-row td:nth-child(5)").text('<?php echo $cDiffSigned;?>');
    <?php } ?>
}

$('#graph3 td').filter(function() {
    return ( $(this).css('background-color') == 'yellow' );
}).each(function(){
    console.log("s");
});

</script>
</body>
</html>

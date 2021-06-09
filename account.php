<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <title>Online examiner</title>
  <link  rel="stylesheet" href="css/bootstrap.min.css"/>
  <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="css/main.css">
  <link  rel="stylesheet" href="css/font.css">
  <link  rel="stylesheet" href="css/style.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script>
  //function that display value
  function dis(val){
    document.getElementById("result").value+=val
  }
  //function that evaluates the digit and return result
  function solve(){
    let x = document.getElementById("result").value
    let y = eval(x)
    document.getElementById("result").value = y
  }
  //function that clear the display
  function clr(){
    document.getElementById("result").value = ""
  }
  function temp () {
    alert("clicked");
  }
  
  function headerchange() {
    console.log("clicked");
    var element = document.getElementById('top_header');
    element.innerHTML = "Agrivision4U Exam Portal";
    element.classList.add("header_style");
  }
  
  document.addEventListener("DOMContentLoaded", function() {
   if(screen.width > 900) openNav();
  });

  function openNav() {
      if(screen.width <400) document.getElementById("mySidebar").style.width = "80%";
      else document.getElementById("mySidebar").style.width = "400px";
      if(screen.width > 800)  document.getElementById("main").style.marginRight = "400px";
      document.getElementById('bar').style.display="none";
      document.getElementById('rbar').style.display="inline-block";
      document.getElementById('sidebarid').style.display="inline-block";
      
      }
  
  function closeNav() {
		  document.getElementById("mySidebar").style.width = "0";
		  document.getElementById("main").style.marginRight= "0";
      document.getElementById('rbar').style.display="none";
      document.getElementById('bar').style.display="inline-block";
      document.getElementById('sidebarid').style.display="none";
		}
  </script>
  

  <style>
    .title{
      margin-bottom: 40px;
      text-align:center;
      width: 210px;
      color:green;
      border: solid black 2px;
      }
    .bg {
      display: block;
      padding: 15px;
      float: left;
      width: 100%;
      /* width: calc(100% - 350px); */
    }
    .calc-button{
      margin-top: 9px;
      height:35px;
      width: 35px;
      display: none;
    }
  </style>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

  <!--alert message-->
  <?php if (@$_GET['w']) {echo '<script>alert("' . @$_GET['w'] . '");</script>';}
  ?>
  <!--alert message end-->

</head>

<?php
include_once 'dbConnection.php';
?>

<body>
<div class="header header_style" id="top_header">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
      <span class="logo">Agrivision4U</span>
    </div>
    <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-6">
      <?php
      include_once 'dbConnection.php';
      session_start();
      if (!(isset($_SESSION['userId']))) {
          header("location:index.php");

      } else {
          $name = $_SESSION['name'];
          $email=$_SESSION['email'];
          $uid = $_SESSION['userId'];
          include_once 'dbConnection.php';
          echo '<span class="pull-right top title1" ><span class="log1">&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a></span></span>';
      }?>
    </div>
  </div>
</div>


<div  class="text-center first_one">
  <div class="">
    
  <?php
  if (@$_GET['q'] != 'quiz' || @$_GET['step'] != 2)
  {
     echo  ' <ul class="nav nav-tabs card-header-tabs">
        <li ';
         if (@$_GET['q'] == 1) {
            echo 'class=" nav-item active"';
          }
echo '
 >

 <a class="nav-link active" href="account.php?q=1">Home</a></li>
        <li '; 
        if (@$_GET['q'] == 2) {
       echo 'class=" nav-item active"';
}
echo '>
<a class="nav-link active" href="account.php?q=2">History</a></li>

    <li ';
    if (@$_GET['q'] == 3) {
    echo 'class="nav-item active" ';
}
echo '> <a class="nav-link active" href="account.php?q=3">Rank</a></li>

  </ul>';
  }

?>

  </div>
  <div class="">
  
  
<div class=""><!--container start-->
<div class="row">
<div class="col-md-12">






<!--home start-->
<?php if (@$_GET['q'] == 1) {
    // $result = mysqli_query($con, "SELECT * FROM quiz WHERE  ORDER BY date DESC") or die('Connection Error');
 
  echo '<section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Welcome...<br> <span> ' .$name. '</span></h2>
          <div>
            <a href="#testss" class="btn-get-started scrollto">Explore Tests</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="./images/intro-img.svg" alt="Images" class="img-fluid">
        </div>
      </div>

    </div>
  </section>';



    $q = mysqli_query($con, "SELECT * FROM assigned  WHERE userId = $uid");
    if (!$q) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
    }
    //  or die('Connection Error');
    while($ci = mysqli_fetch_array($q))
    {
      $cid = $ci['courseId'];
      
      $q1 = mysqli_query($con, "SELECT courseName FROM  course WHERE courseId = '$cid'");
      while($cn = mysqli_fetch_array($q1))
    {
      $cname= $cn['courseName'];
    }
    $result = mysqli_query($con, "SELECT * FROM quiz WHERE courseId = '$cid' ORDER BY date DESC"); 
    // or die('Connection Error');
    if (!$result) {
      printf("Error: %s\n", mysqli_error($con));
      printf($cid);
      exit();
    }
    
    echo '
    


  <br/> <br/>
    <div id="testss" class="cards" style="padding:30px; margin-bottom:50px;">
    
    <h1>'.$cname.'</h1>
    ';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title = $row['title'];
        $total = $row['total'];
        $sahi = $row['correct'];
        $wrong = $row['wrong'];
        $time = $row['time'];
        $eid = $row['eid'];
        // $id = $row['id'];
        $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND userId='$uid'") or die('Error98');
        $rowcount = mysqli_num_rows($q12);
        if ($rowcount == 0) {
            echo '<details class="warning" style="text-align:left;margin:auto ;margin-bottom:20px;padding:30px ;border-left: 15px solid #4441F0;margin-left:40px; background-color: rgba(68, 65, 245, 0.09);">
            <summary style="font-size:30px;font-color:black; font-weight:600; ">' . $title . '</summary>
            <p style="color:black;font-size:20px;font-weight:600;">Total Questions ' . $total . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Total Marks ' . $sahi * $total . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Time Limit ' . $time . ' </p> 
            <p style="color:black;font-size:20px;font-weight:100;">For each correct answer there would be ' . $sahi . ' marks and -' . $wrong . ' for each wrong one </p> 
            <a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '&timer=1" style="font-size:10px;" class="btn-get-started scrollto">Start Test</a>
        
        </details>';
        } else {
            echo '<details class="warning" style="text-align:left;margin:auto ;margin-bottom:20px;padding:30px ;border-left: 15px solid #FFC48B;margin-left:40px; background-color: rgba(250, 85, 15, 0.09);">
            <summary style="font-size:30px;font-color:black; font-weight:600; ">' . $title . '</summary>
            <p style="color:black;font-size:20px;font-weight:600;">Total Questions ' . $total . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Total Marks ' . $sahi * $total . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Time Limit ' . $time . ' </p> 
            <p style="color:black;font-size:20px;font-weight:100;">For each correct answer there would be ' . $sahi . ' marks and -' . $wrong . ' for each wrong one </p> 
            <a href="account.php?q=result&step=3&eid=' . $eid . '&n=1&t=' . $total . '&timer=1"  style="font-size:10px;"class="btn-get-started scrollto">View submission</a>
        
        </details>';
        }
    }
    $c = 0;
    echo '</div>';
  }

}?>
<!----quiz reading portion starts--->

<?php if (@$_GET['fid']) {
    echo '<br />';
    $eid = @$_GET['fid'];
    $result = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error');
    while ($row = mysqli_fetch_array($result)) {
        // $name = $row['name'];
        $title = $row['title'];
        $date = $row['date'];
        $date = date("d-m-Y", strtotime($date));
        //$time = $row['time'];
        $intro = $row['intro'];

        echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $title . '</b></h1>';
        echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;"></span><br />' . $intro . '</div></div>';}
}?>


<!--home closed-->


          <!--quiz start-->
          <?php if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
          
          $eid = @$_GET['eid'];
          $sn = @$_GET['n'];
          $total = @$_GET['t'];
          $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid'") or die('Error6969');
          while($row = mysqli_fetch_array($q)) { $time = $row['time']; }
          if (@$_GET['timer'] == 1 && !isset($_SESSION['time']) ) { $_SESSION['time'] = time() + $time*60; } ?>
              
          <script>
            console.log(<?php echo $time; ?>);
            headerchange();
          </script>
          
          <?php $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' "); ?>
          <div class="panel" style="margin: 0px !important;">

            <?php 
            while ($row = mysqli_fetch_array($q)) {
            $qns = $row['qns'];
            $qid = $row['qid'];
            $type = $row['type'];
            $qns = str_replace("<","&lt",$qns);
            $qns = str_replace(">","&gt",$qns); ?>

            
            <div id="mySidebar" class ="sidebar">
                <a id="bar" href="javascript:void(0)" class="ocbuttons" onclick = "openNav()"> ||</a>
                <a id="rbar" href="javascript:void(0)" class="ocbuttons" style="display: none;" onclick="closeNav()"> ||</a>
              <div id = "sidebarid">
               
                <div class="" style="">
                  <div class="">
                    <h3 class="time"> Time left: <span class="timer"></span></h3>
                    <h3 class="">Questions</h3>
                    <ul class="pagination">
                      <?php $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' ORDER BY sn ASC");
                      $num = mysqli_num_rows($q);
                      while($row = mysqli_fetch_array($q)) { ?>
                      <li class="page-item">
                        <a class="page-link 
                        <?php if(isset($_COOKIE[$row['qid']])){
                          if($_COOKIE[$row['qid']]==='unset'){ echo 'unanswered'; }
                          else{ echo 'answered'; }
                        } ?>" 
                        href="account.php?q=quiz&step=2&eid=<?php echo $eid; ?>&n=<?php echo $row['sn']; ?>&t=<?php echo $total; ?>">
                          <?php echo $row['sn']; ?>
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                    <br>
                    <a href="update.php?q=quiz&step=2&eid=<?php echo $eid; ?>&t=<?php echo $total;?>" class="btn btn-danger  active submitbutton" role="button" aria-pressed="true"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit Quiz</a>
                  </div>
                </div>
              </div>
            </div>
                <div id="main" class="container-fluid">
                  
                  <div class="line1" >Question No. : <span><?php echo $sn; ?></span></div>
                  <div class="line3">
                    <div class="question"><span > <?php echo $qns; ?></span> </div><br/>
                    
                    <?php if($type === 'MCQ') {
                    $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
                    ?>
                    <form class="form-horizontal" style="text-align: left;" >
                      <br />
                      <?php while ($row = mysqli_fetch_array($q)) {
                      $option = $row['option'];
                      $option = str_replace("<","&lt",$option);
                      $option = str_replace(">","&gt",$option);
                      $optionid = $row['optionid']; ?>
                      <input type="radio" id="<?php echo $optionid; ?>" name="ans" value="<?php echo $optionid; ?>" onchange="handleClick(this);" class="radio-btn answer">
                      <label for="<?php echo $optionid; ?>" id="option1" class="label1" ><?php echo $option; ?></label><br>
                      <?php } ?>
                      <br />
                    </form>

                    <?php }
                    else if($type === 'NAT'){ ?>
                    <br>
                    <div id="pinpad" style="text-align: left;">
                      <form >
                        <input type="text" placeholder="Enter answer" name="ans" id="password" style="margin-left:20px; padding: 5px; "  onkeyup="keyUp(this)" 
                        value="<?php if(isset($_COOKIE[$qid])&&$_COOKIE[$qid]!=='unset') echo $_COOKIE[$qid]; ?>" step=".001" > <br />
                        <input type="button" value="1" id="1" class="pinButton calc"/>
                        <input type="button" value="2" id="2" class="pinButton calc"/>
                        <input type="button" value="3" id="3" class="pinButton calc"/><br>
                        <input type="button" value="4" id="4" class="pinButton calc"/>
                        <input type="button" value="5" id="5" class="pinButton calc"/>
                        <input type="button" value="6" id="6" class="pinButton calc"/><br>
                        <input type="button" value="7" id="7" class="pinButton calc"/>
                        <input type="button" value="8" id="8" class="pinButton calc"/>
                        <input type="button" value="9" id="9" class="pinButton calc"/><br>
                        <input type="button" value="clear" id="clear" class="pinButton clear"/>
                        <input type="button" value="0" id="0 " class="pinButton calc"/>
                        <input type="button" value="." id="." class="pinButton calc"/>
                      </form>
                    </div>
                    <br>
                    <?php } ?>
                    <div class="bton">
                      <button class="btn btn-primary"  id="clear-button" onclick="clearOption()">Clear Option</button>
                      <!-- <button class="btn btn-danger" id="review-button">Review & Next</button> -->
                      <?php if($sn!=1) { ?>
                      <button class="btn btn-warning" id="prev-question-button" onclick="previousQuestion();">Previous</button>
                      <?php } 
                      if($sn!=$total){ ?>
                      <button class="btn btn-info" id="next-question-button" onclick="nextQuestion();">Next</button>
                      <?php } ?>
                      <!-- <button class="btn btn-primary" id="save-button">Save & Next</button> -->
                  </div>
                  </div>


                </div> <!-- main closed -->
            
            <?php } ?>
          </div>

         
          
          <script>
          let btns = document.getElementsByClassName("radio-btn");
          let val = null;
          <?php
          if(isset($_COOKIE[$qid])&&$_COOKIE[$qid]!=='unset') 
          {
            echo 'val = "'.$_COOKIE[$qid].'";';
          }
          else
          {
            setcookie($qid, 'unset');
            
            echo 'document.cookie = `'.$qid.'= unset`;';
          } ?>
          
          Array.from(btns).forEach(btn=>{
            if(val === btn.value){
              btn.checked= "checked";
            }
          });
          function nextQuestion(){
            console.log("Working");
            window.location.href = "account.php?q=quiz&step=2&eid=<?php echo $eid; ?>&n=<?php echo ++$sn; ?>&t=<?php echo $total; ?>";
          }
          function previousQuestion(){
            console.log("Working");
            window.location.href = "account.php?q=quiz&step=2&eid=<?php echo $eid; ?>&n=<?php echo ($sn-=2); ?>&t=<?php echo $total; ?>";
          }

          <?php echo'
          function handleClick(myRadio) {
            console.log("Yesss");
            console.log(`'.$qid.'`);
            document.cookie = `'.$qid.'= ${myRadio.value}`;
            
          }
          function keyUp(e) {
            console.log("Yesss");
            if(e.value !== "")
            document.cookie = `'.$qid.'= ${e.value}`;
            else 
            document.cookie = `'.$qid.'= unset`;
          }
          function clearOption(){
            
            Array.from(btns).forEach(btn=>{
              // console.log(btn.checked);
            if(btn.checked === true){
              btn.checked= false;
              console.log(btn.checked);
            }
          });
            // document.querySelector("#'.$_COOKIE[$qid].'").checked = false;
            document.cookie = `'.$qid.'= unset`;
            
          } '
          ?>

          var time = time()+5;
          <?php if(isset($_SESSION['time'])) {
            echo 'time='.$_SESSION['time'].';';
          }?>
          var countDownDate = time* 1000;
          var now = <?php echo time(); ?> * 1000;
          var distance = countDownDate - now;
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          // Output the result in an element with id="demo"
          document.querySelector(".timer").innerHTML = hours + "h " +
          minutes + "m " + seconds + "s ";

          // Update the count down every 1 second
          var x = setInterval(function() {
            now = now + 1000;
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.querySelector(".timer").innerHTML = hours + "h " +
            minutes + "m " + seconds + "s ";
            // If the count down is over, write some text 
            if (distance < 0) {
            clearInterval(x);
            document.querySelector(".timer").innerHTML = "Timeout";
            window.location.href = "update.php?q=quiz&step=2&eid=<?php echo $eid; ?>&t=<?php echo $total; ?>";
            } 
          }, 1000);
          </script>

          <?php } ?>

          <?php 
          if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 3) {
          $eid = @$_GET['eid'];
          $sn = @$_GET['n'];
          $total = @$_GET['t'];
          $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid'");
          $num = mysqli_num_rows($q);
          // printf($num); ?>
          <script>
            console.log(<?php echo $num; ?>);
          </script>
          <?php $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' "); ?>
          <div class="panel" style="margin:5%">
            <?php 
            while ($row = mysqli_fetch_array($q)) {
            $qns = $row['qns'];
            $qid = $row['qid'];
            $type = $row['type'];
            $qns = str_replace("<","&lt",$qns);
            $qns = str_replace(">","&gt",$qns); ?>
            <b>Question &nbsp;<?php echo $sn; ?>&nbsp;::<br /><?php echo $qns; ?></b><br /><br />
            <?php } ?>

            <?php if($type === 'MCQ'){
              $q = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid' ");
              while ($row = mysqli_fetch_array($q)) {
                $ans = $row['ansid'];
                $exp_text = $row['exp_text'];
                $exp_img = base64_encode($row['exp_img']);
              } ?>
              <script>console.log("<?php echo $ans; ?>");</script>
              <?php $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' "); ?>
              <form class="form-horizontal">
                <br />
                <?php
                while ($row = mysqli_fetch_array($q)) {
                $option = $row['option'];
                $option = str_replace("<","&lt",$option);
                $option = str_replace(">","&gt",$option);
                $optionid = $row['optionid']; ?>
                <input type="radio" name="ans" value="<?php echo $optionid; ?>" class="radio-ans" disabled>
                <label <?php if($ans == $optionid) { ?>style="color:green;" <?php } ?> >
                  <strong><?php echo $option; ?></strong>
                </label>
                <br /><br />
                <script>console.log("<?php echo $optionid; ?>");</script>
                <?php } ?>
                <br />
              </form>

              <?php if($sn!=1){ ?>
              <button class="btn btn-primary mr-3" style="margin-right:10px;" onclick="previousAns();"><span aria-hidden="true">&laquo;</span>&nbsp;Previous</button>
              <?php } ?>
              <?php if($sn!=$total){ ?>
              <button class="btn btn-primary" onclick="nextAns();">&nbsp;Next <span  aria-hidden="true">&raquo;</span></button>
              <?php } ?>
              <br><br>
              <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Explanation</button>

              <div class="collapse" id="collapseExample">
                <div class="panel panel-body well" style="margin:10px">
                  <br>
                  <p style="margin-left:5%"><?php echo $exp_text; ?></p>
                  <br>
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo $exp_img; ?>" style="width:90%;display: block;margin-left: auto;margin-right: auto;"  > 
                </div>
              </div>
            <?php }
            else if($type ==='NAT'){
              $q = mysqli_query($con, "SELECT * FROM `range` WHERE qid='$qid' ");
              while ($row = mysqli_fetch_array($q)) {
                $from = $row['range_from'];
                $to = $row['range_to'];
                $exp_text = $row['exp_text'];
                $exp_img = base64_encode($row['exp_img']);
              } ?>
              <form class="form-horizontal">
                <br />
                <label for="ans">Answer range:</label>
                <input type="text" name="ans" id="password" style="margin-left:20px" onkeyup="keyUp(this)" value="<?php echo $from; ?> to <?php echo $to; ?>" step=".001" style="color:green;" disabled>
                <br />
              </form>
              <br><br>
              <?php if($sn!=1){ ?>
              <button class="btn btn-primary mr-3" style="margin-right:10px;" onclick="previousAns();"><span  aria-hidden="true">&laquo;</span>&nbsp;Previous</button>
              <?php } ?>
              <?php if($sn!=$total){ ?>
              <button class="btn btn-primary" onclick="nextAns();">&nbsp;Next <span  aria-hidden="true">&raquo;</span></button>
              <?php } ?>
              <br><br>
              <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Explanation</button>

              <div class="collapse" id="collapseExample">
                <div class="panel panel-body well" style="margin:10px">
                <br>
                  <p style="margin-left:5%"><?php echo $exp_text; ?></p>
                  <br>
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo $exp_img; ?>" style="width:90%;display: block;margin-left: auto;margin-right: auto;"  > 
                </div>
              </div>
            <?php } ?>
          </div>

          <div class="panel card" style="margin:5%;">
            <div class="card-body">
              <h3 class="card-title">Questions</h3>
              <ul class="pagination">
                <?php $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid'");
                $num = mysqli_num_rows($q);
                for($i=1;$i<=$num;$i++) { ?>
                <li class="page-item">
                  <a class="page-link" href="account.php?q=quiz&step=3&eid=<?php echo $eid; ?>&n=<?php echo $i; ?>&t=<?php echo $total; ?>"><?php echo $i; ?></a>
                </li>
                <?php } ?>
              </ul>
              <br>
            </div>
          </div>

          <script>
          let btns = document.getElementsByClassName("radio-btn");
          let val = null;
          <?php if(isset($_COOKIE[$qid])) { ?> val = "<?php echo $_COOKIE[$qid]; ?>"; <?php } ?>
          Array.from(btns).forEach(btn=>{
            if(val === btn.value){
            btn.checked= "checked";
            }
          });
          function nextAns(){
            console.log("Working");
            window.location.href = "account.php?q=quiz&step=3&eid=<?php echo $eid; ?>&n=<?php echo ++$sn; ?>&t=<?php echo $total; ?>";
          }
          function previousAns(){
            console.log("Working");
            window.location.href = "account.php?q=quiz&step=3&eid=<?php echo $eid; ?>&n=<?php echo ($sn-=2); ?>&t=<?php echo $total; ?>";
          }
          
          <?php echo '
          function handleClick(myRadio) {
            console.log("Yesss");
            document.cookie = `'.$qid.'= ${myRadio.value}`;
            
          } '
          ?>
          </script>
          <?php } ?>

          <?php if (@$_GET['q'] == 'result' && @$_GET['eid']) {
          $eid = @$_GET['eid'];
          $qa = @$_GET['t'];
          $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND userId='$uid' ") or die('Error157'); ?>
   <!-- Result table starts here -->
          

          <div class="container tab" >
            <div class="col-sm-6 col-sm-offset-3 allwords " >
              <?php while ($row = mysqli_fetch_array($q)) {
                $s = $row['score'];
                $w = $row['wrong'];
                $r = $row['correct'];
                $u = $row['unattempted']; ?>
              <div class= "row tabletitle">RESULT</div>  

                
               <div class="tablebody">
                <div class="row tabelrows">
                  <div class="col-xs-8">Total Questions</div>
                  <div class="col-xs-4"><?php echo $qa; ?></div>     
                </div>
                <div class="row tabelrows">
                  <div class="col-xs-8 text-success">Correct Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></div>
                  <div class="col-xs-4"><?php echo $r; ?></div>
                  
                </div>
                <div class="row tabelrows text-danger">
                  <div class="col-xs-8 ">Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> </div>
                  <div class="col-xs-4"><?php echo $w; ?></div>
                  
                </div>
                <div class="row tabelrows text-warning ">
                  <div class="col-xs-8 ">Unattempted&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></div>
                  <div class="col-xs-4"><?php echo $u; ?></div>
                </div>
                <div class="row tabelrows">
                  <div class="col-xs-8 text-primary" >Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
                  <div class="col-xs-4"><?php echo $s; ?></div>
                </div>
              </div>
              <div class="clearfix"></div>
            <?php } ?>
                <?php
                // $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$email' ") or die('Error157');
                // while ($row = mysqli_fetch_array($q)) {
                  // $s = $row['score']; ?>
                <!-- <tr style="color:#990000">
                  <td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td>
                  <td><?php // echo $s; ?></td>
                </tr> -->
                <?php // } ?>
                 <a href="account.php?q=quiz&step=3&eid=<?php echo $eid; ?>&n=1&t=<?php echo $qa; ?>" class="btn sub1 pull-left" role="button" aria-pressed="true" style="background:#99cc32;width:160px;">
                  <span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp;<span class="title1"><b>View Solution</b></span>
                </a>
                <?php } ?>
            </div>
            
          </div>
     <!-- table ends here -->
          
         

          <!--quiz end-->



          <?php
//history start
if (@$_GET['q'] == 2) {
    $q = mysqli_query($con, "SELECT * FROM history WHERE userId='$uid' ORDER BY date DESC ") or die('Error197');
    echo '<div class="cards" style="padding:30px;margin-top:40px; margin-bottom:50px;" >
    <h1> Quiz History </h1>
';
    $c = 0;
    while ($row = mysqli_fetch_array($q)) {
        $eid = $row['eid'];
        $s = $row['score'];
        $w = $row['wrong'];
        $t = $row['total'];
        $r = $row['correct'];
        $u = $row['unattempted'];
        
        $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
        while ($row = mysqli_fetch_array($q23)) {
            $title = $row['title'];
        }
        $c++;
        echo '
        <details class="warning" style="text-align:left;margin:auto ;margin-bottom:20px; padding:30px ;border-left: 15px solid #FC8163;margin-left:40px; background-color: rgba(252, 129, 99, 0.12);">
            <summary style="font-size:30px;font-color:black; font-weight:600; ">' . $title . '</summary>
            <p style="color:black;font-size:20px;font-weight:600;">Total Questions ' . $t . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Correct  ' . $r . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Incorrect  ' . $w . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Unattempted ' . $u . ' </p> 
            <p style="color:black;font-size:20px;font-weight:600;">Score ' . $s . ' </p>         
        </details>';
    }
    echo '</div>';
}

//ranking start
if (@$_GET['q'] == 3) {
    $q = mysqli_query($con, "SELECT * FROM `rank`  ORDER BY score DESC ");
// or die('Error223');
    echo '<div class="cards" style="padding:30px;margin-top:40px; margin-bottom:50px;">
    <h1>Ranking</h1>
    <h4><b>Your Rank: <span id="rank"></span></b></h4>
    <br>
<table class="table table-striped title1" >
<tr style="color:black"><td><b>Rank</b></td><td><b>Name</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
    $c = 0;
    $rank = "";
    while ($row = mysqli_fetch_array($q)) {
        $u = $row['userId'];
        $s = $row['score'];
        $q12 = mysqli_query($con, "SELECT * FROM user WHERE userId='$u' ") or die('Error231');
        while ($row = mysqli_fetch_array($q12)) {
            $name = $row['name'];
            
            $college = $row['college'];
        }
        $c++;
        echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $college . '</td><td>' . $s . '</td><td>';
        if($uid == $u)
        {
          $rank = $c;
        }
    }
    echo '</table></div>
    <script>
    document.querySelector("#rank").textContent = '.$rank.';
    </script
    
    
    ';}
?>

</div></div></div>


</div>







  <?php if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
  $eid = @$_GET['eid'];
  $q = mysqli_query($con,"SELECT calculator FROM quiz WHERE eid='$eid' ");
  // echo($q);
  $calc;
  while ($row = mysqli_fetch_array($q)) { $calc = $row['calculator']; }
  if($calc == 1) { ?>
    <style>
      .calc-button{
        display: block;
      }
    </style>
    <script>
      function toggleSidebar(){
        myWindow = window.open("https://www.tcsion.com/OnlineAssessment/ScientificCalculator/Calculator.html#nogo", "Calculator", "width=480, height=350");    // Opens a new window
        // myWindow.document.write("<p>This is myWindow</p>");       
      }
    </script>
  <?php } ?>
  
  <script>
  $(document).ready(function () {
    const input_value = $("#password");
    //disable input from typing
    //add password
    $(".calc").click(function () {
      let value = $(this).val();
      field(value);
    });
    
    <?php echo '
    function field(value) {
      // input_value.val(input_value.val() + value);
      document.querySelector("#password").value= input_value.val() + value;
      document.cookie = `'.$qid.'= ${input_value.val()}`;
    }
    $("#clear").click(function () {
      input_value.val("");
      document.cookie = `'.$qid.'= unset`;
    });
    ' ?>

  });
  </script>
  <?php } ?>

</body>
</html>
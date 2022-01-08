



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecontact.css">
    <title>Contact Me!!! </title>
</head>
<body>
    <div class="topnav">
        <a class="" href="index.html">Home</a>
       <!--  <a href="#Post">News</a> -->
        <a href="about.html">About Me!</a>
        <a href="projects.html">Projects</a>
        <a href="#Contact" class="active">Contact Me!</a>
    </div>
    <div class="image">
    <hr class="style-ranibow"> 
    <form class="content-form" action="contact.php" method="post" name="form">
    <div class="background">
        <class class="container">
          <div class="screen">
            <div class="screen-header">
              <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
              </div>
              <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
              </div>
            </div>
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                  <span>CONTACT</span>
                  <span>Me</span>
                </div>
                <div class="app-contact">CONTACT INFO : +64 021 08300 397</div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                  <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">

                  </div>
                  <div class="app-form-group">
                  <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                  </div>
                  <div class="app-form-group">
                  <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                  </div>
                  <div class="app-form-group message">
                  <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button"> CANCEL</button>
                    <button class="btn btn-success" name="btn-send"> Send </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </class>
        </div>
        </form>
  <hr class="style-ranibow">
            
              <!-- <svg class="dribbble" viewBox="0 0 200 200">
                <g stroke="#ffffff" fill="none"> -->
                  <!-- <circle cx="100" cy="100" r="90" stroke-width="20"></circle> -->
                  <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
                  <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
                  <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
                </g>
           
            </a>
          </div>
        </div>
      </div>
      
      
</body>
</html>
?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "tayotej233@wusehe.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>

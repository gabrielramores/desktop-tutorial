<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="home.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style type="text/css">
    *{
      border: solid black 0px;
    }
    .nav-tab{
      margin-right: 10px;  
    }
    .nav-tab:hover{
      color: blue!important;   
    }
    .nav-item .active,
    .nav-item:active,
    .nav-item:focus{
      color: #F7CD2E!important;
      background-color: white!important;
    }

    .dropdown-item:active,
    .dropdown-item:hover{
      color: blue!important;
      background-color: white!important;
    }

    @media only screen and (max-width: 770px){
      .dropdown-item{
        text-indent: 30px;
      }
      .nav-tab{
        margin-left: 16px;
      }
      .drpdwn{
        margin-bottom: 16px;
      }

    }
    #sign-out:hover{
      color: red!important;
    }
  </style>
</head>
<body>
<!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:300px">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalCenterTitle">
           <!--    -->
          </h2>
          <button type="button" class="close btn-danger m-0 " data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">&times;</span>
          </button>
        </div>
        <div class="modal-body navbar-brand">
        <center>Are you sure?</center>
        </div>
        
        <div class="modal-footer">
          
          <button type="button" class="btn btn-warning text-white mx-auto" 
          data-bs-dismiss="modal" >
            <b>Cancel</b>
          </button>
          <button type="button" class="btn btn-primary text-white mx-auto">
            <b>Log-out</b>
          </button>
          
        </div>

      </div>
    </div>
  </div>
  <div class="wrapper">
<!-- THE PAGE HEADER -->
    <header id="header" class="container-fluid m-0 p-0"> <!-- /header -->    
<!-- FIRST NAVIGATION TAB-->
      <nav  class='navbar navbar-expand-md text-light bg-primary'>
        <h2 class='navbar-brand company-name text-light p-3 m-0'>
            CANORECO
            <br/> MOTORPOOL
        </h2>

<!-- THE BURGER BUTTON   -->
        <button
        class="navbar-toggler ms-auto shadow-none navbar-dark text-light" 
        data-bs-toggle = "collapse";
        data-bs-target = "#toggleMenu"
        aria-controls = "toggleMenu"
        aria-expanded = false
        aria-label = "false">
          <span class ="navbar-toggler-icon"></span>
        </button>
      </nav>

<!--FIRST NAVIGATION      -->
      <div class="navbar navbar-expand-md p-0 mx-auto navbar-light top-nav">
        <div class="collapse navbar-collapse " id="toggleMenu">
          <ul class="nav navbar-nav" id="myTab" role="tablist">
            
<!--HOME TAB-->
            <li class="nav-item" role="presentation">
              <a class="nav-link active nav-tab navbar-brand" 
              id="home-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#home" 
              type="button" role="tab"
              aria-controls="home"
              aria-selected="true">
                <span class="bx bx-home"></span><h6 style="display: inline-block"> HOME</h6>
              </a>
            </li>

<!--MS RECORDS DROPDOWN TAB-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-tab navbar-brand "
              id="" 
              data-bs-toggle="dropdown"
              href="#"
              aria-expanded="false"
              aria-selected="false">
                <span class="bx bx-category-alt"></span>
                <h6 style="display: inline-block"> FILL-UP FORMS</h6>
              </a>
              <ul class="dropdown-menu fade mx-3 border-none">

<!--MAINTENANCE DROPDOWN TAB-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link dropdown-item "
                  id="maintenance-tab" 
                  data-bs-toggle="tab" 
                  data-bs-target="#maintenance" 
                  type="button" role="tab" 
                  aria-controls="maintenance" 
                  aria-selected="false"
                  onclick="changeStyle();">
                    <h6><span class="bx bx-file-blank"></span>
                     Vehicle Preventive Maintenance</h6>
                  </a>
                </li>

<!--REPAIR DROPDOWN TAB-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link dropdown-item " 
                  id="repair-tab"
                  data-bs-toggle="tab" 
                  data-bs-target="#repair"
                  type="button" role="tab" 
                  aria-controls="repair" 
                  aria-selected="false">
                    <h6> <span class="bx bx-file-blank"></span>
                     Vehicle Repair</h6>
                 </a>
                </li>

<!--REGISTRATION DROPDOWN TAB-->
                <li class="nav-item" role="presentation">
                  <a class="nav-link dropdown-item " 
                  id="registration-tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#registration" 
                  type="button" role="tab" 
                  aria-controls="registration" 
                  aria-selected="false">
                    <h6> <span class="bx bx-calendar"></span>
                     LTO & Insurance Registration</h6>
                  </a>
                </li>
              </ul>
            </li>

<!--SCHEDULE TAB-->
            <li class="nav-item" role="presentation">
              <a class="nav-link nav-tab" 
              id="schedule-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#schedule" 
              type="button" role="tab" 
              aria-controls="schedule" 
              aria-selected="false">
                <span class="bx bx-calendar"></span>
                <h6 style="display:inline-block"> SCHEDULE</h6>

<!-- NOTIFICATION BADGE-->
                <span class="noti-icon-badge"> <!--<sup></sup>--></span>
              </a>
            </li>

<!--LOGS TAB-->
            <li class="nav-item" role="presentation">
              <a class="nav-link  nav-tab" 
              id="history-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#history" 
              type="button" role="tab" 
              aria-controls="history" 
              aria-selected="false">
                <span class="bx bx-history"></span>
                <h6 style="display:inline-block"> LOGS</h6>
              </a>
            </li>
          
<!--MENU     -->
            <li class="nav-item dropdown drpdwn ">
              <a class="nav-link dropdown-toggle nav-tab navbar-brand"
              id="" 
              data-bs-toggle="dropdown"
              href="#"
              aria-expanded="false"
              aria-selected="false">
                <span class="bx bx-user"></span>
                <h6 style="display: inline-block"> MENU</h6>
              </a>
              <ul class="dropdown-menu fade mx-3" style="right: 0; left: auto;">

<!--ACCOUNT SETTINGS -->
                <li class="nav-item" role="presentation">
                  <a class="nav-link dropdown-item"  
                  type="button"
                  data-bs-toggle="tab" 
                  type="button" role="tab"
                  aria-selected="false">
                    <h6> <span class="bx bx-cog"></span>
                     Account Settings</h6>
                  </a>
                </li>

<!--SIGN OUT DROPDOWN --> 
  <!-- Button trigger modal -->
                <li class="nav-item" role="presentation">
                  <a class="nav-link dropdown-item"  
                  type="button"
                  id="sign-out"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModalCenter"
                  data-bs-toggle="tab" 
                  type="button" role="tab" 
                  aria-selected="false">
                    <h6> <span class="bx bx-log-out"></span>
                     Sign-Out</h6>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </header>
    
<!-- THE PAGE CONTENT OR THE MAIN CONTENT -->
    <main class="border-top"> 
      
    </main>

  </div>
  <script type="text/javascript" src="home.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script></body>
</html>
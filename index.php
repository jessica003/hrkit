<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
    <style>
        body{
            overflow-x: hidden;font-family: Roboto;
        }
        .topYellowBtn
        {
            background-color:rgba(243, 255, 104, 0.4);border: none;font-size:14px;border-radius: 4px;
        }
        .searchBtn{
            background: rgba(255, 0, 0, 0.78);
        }
        input::placeholder {
            padding-left: 4%;
        }
        input[type="text"] {
            width: 100%;
        }
        input[type="submit"] {
            margin-left: -71px;height: 33px;width: 70px;background: blue;color: white;border: 0;background-color: #17a2b8;
        }
        .br-5{
            border-radius: 5px;
        }
        .fs-14{
           font-size: 14px; 
        }
        .fr{
            float: right;
        }
        .btnGrp{
            position: absolute;top: 0;right: 4%;
        }
        .star-color{
            color: #DF0000;
        }
        .orange-border{
            border: 0.5px solid rgba(255, 0, 0, 0.78);
        }
        .nav-item{
            width: 9rem; text-align: center; font-size: 12px;
        }
        .nav-line{
            margin-top: 8px;
        }
        .personImg{
            width: 100%;margin-top: -58%;max-height: 34rem;
        }
        .waveImg{
             width: 100%;max-height: 31rem;margin-top: -6%;
        }
        .solutions{
            letter-spacing: 5px;margin-left: 0.5%;
        }
        ul li a{
            color: #000;
        }
        ul .active  a{
            color: rgba(255, 0, 0, 0.78);
        }
        footer{
            height: 10%;background: linear-gradient(180deg, rgba(255, 255, 255, 0.42) 0%, rgba(248, 255, 170, 0.42) 48.96%, rgba(0, 178, 189, 0.42) 100%);padding: 2%;
        }
        @media only screen and (max-width: 991px) {
          .nav-line, .topsub {
            display: none;
          }
          #navbarNav{
            background: whitesmoke; margin-top: 1%;
          }
          .nav-item{
            text-align: justify; padding-left: 10%; width: 100%;
          }
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="btnGrp">
            <a class="searchBtn topYellowBtn btn btn-sm"><i class="fa fa-search text-white"></i></a>
            <a class="btn topYellowBtn text-dark" href="">Partner With Us</a>
            <a class="btn topYellowBtn text-dark" href="">Get Media Kit</a>
            <a class="btn topYellowBtn text-dark" href="">Contact Us</a>
        </div>
        <div class="row mt-5">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 mainlogo">
              <a href="">
                <img class="img-fluid" src="images/HrKitLogo.png" width="120" alt="">
                <p class="solutions text-dark fs-14 font-weight-bold">SOLUTIONS</p>
              </a>              
            </div>
            <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
                <div class="row fs-14 topsub">
                    <div class="col-lg-7 col-md-7">
                        <label for="subscriber" style="color: grey">Be the Smartest Person in the Room. Subscribe to our Newsletter for the Latest News about HR kit and Work</label>
                    </div>
                    <div class="col-lg- 4 col-md-4">                        
                        <input type="text" class="subscriber m-0 p-1 br-5" size="40" placeholder="Your Email Address" /><input type="submit" value="Subscribe" class="br-5">
                    </div>
                </div>
                <div class="row">
                    <nav class="navbar navbar-expand-lg pt-2" style="z-index: 1">
                      <button class="navbar-toggler bg-dark text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav fs-14 font-weight-bold">
                          <!--<li class="nav-item active">-->
                          <!--  <a class="nav-link" href="#">HOME</a>-->
                          <!--</li>-->
                          <!--<div class="nav-line">|</div>-->
                          <li class="nav-item">
                            <a class="nav-link" href="#">EMPLOYEE DOCS</a>
                          </li>
                          <div class="nav-line">|</div>
                          <li class="nav-item">
                            <a class="nav-link" href="#">POLICY FORMATS</a>
                          </li>
                          <div class="nav-line">|</div>
                          <li class="nav-item">
                            <a class="nav-link" href="#">NOTICE RESPONSES</a>
                          </li>
                          <div class="nav-line">|</div>
                          <li class="nav-item">
                            <a class="nav-link" href="#">OTHER DOCS</a>
                          </li>
                          <div class="nav-line">|</div>
                          <li class="nav-item">
                            <a class="nav-link" href="#">ABSTRACTS</a>
                          </li>
                          <div class="nav-line">|</div>
                          <li class="nav-item">
                            <a class="nav-link" href="#">PRICING</a>
                          </li>
                        </ul>
                      </div>
                    </nav>    
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <img class="waveImg img-fluid" src="images/image1.png" alt="">
        <div class="row">
            <div class="offset-md-1 offset-lg- col-md-6 col-sm-12 col-xs-12 col-lg-6" style="margin-top: -10%;z-index: 1">
                <h4>All HR Related Formats</h4>
                <h6>Including Offer Letters, Policy Formats, Response Letters To Notices, Abstracts</h6>
                <h6 class="fr" style="margin-right: 14%">-All Compiled In One Cloud Platform</h6>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
                <img class="img-fluid personImg" src="images/image2.png" alt="">
            </div>
        </div>
    </div>
    <footer>
        <div class="row mt-4">
            <div class="col-md-3 mb-3 text-center">
                <p class="fs-14 font-weight-bold">ABOUT</p>
                <a href=""><img class="img-fluid" src="images/HrKitLogo.png" width="90" alt=""></a> 
            </div>
            <div class="col-md-3 mb-3">
                <p class="fs-14 font-weight-bold">QUICK LINKS</p>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Employee Docs</a><br>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Policy Formats</a><br>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Notices Responses</a><br>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Other Documentation</a><br>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Abstracts</a><br>
                <a href="" class="text-dark fs-14"><i class="fa fa-star star-color"></i> Pricing</a>
            </div>
            <div class="col-md-3 mb-3">
                <p class="fs-14 font-weight-bold">SERVICES</p>
            </div>
            <div class="col-md-3 mb-3">
                <p class="fs-14 font-weight-bold">NEWSLETTER SIGNUP</p>
                <input type="text" class="subscriber m-0 p-1 br-5 orange-border mb-2" size="40" placeholder="Your Email Address" />
                <button type="submit" class="br-5 bg-white btn btn-sm orange-border fr">Subscribe</button>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
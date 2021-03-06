<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SNT Blood Donation</title>
    <style>
        .footer {
            position: absolute;
          }
    </style>
</head>
<body>

        <div class="container">
            <div class="logo">
                <h2><a href="#"><img src="{{ asset('css/img/sntBD.jpg') }}" alt=""></a></h2>
            </div>

            <div class="nav">
                <ul class="menu">
                    <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="/login"><i class="fa fa-user-circle" aria-hidden="true"></i>Staff</a></li>
                    <li><a >Donate <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="/form/create">Blood</a></li>
                            <li><a href="/food/create">Food</a></li>
                        </ul>
                    </li>
                    <li><a >Covid-19 <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="/item/create">Donate</a></li>
                            <li><a href="/volunteer/create">Volunteer</a></li>
                        </ul>
                    </li>
                    <li><a href="/feedback/create"><i class="fa fa-paper-plane" aria-hidden="true"></i></i>Feedback</a></li>
                    <li><a href="/about"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
                </ul>
            </div>
        </div>
        <div class="color">
            <div class="mbox">
                <h2>Register Successfully!</h2>
            </div>
        </div>
        
        <!-- Foooter  -->
      <div class="footer">
                  <div class="copyright">
                    <i class="fa fa-code" aria-hidden="true"> </i><strong><span> by Sai Nawarat Tun</span></strong>
                  </div>
          </div><!-- End Footer -->
    
</body>
</html>
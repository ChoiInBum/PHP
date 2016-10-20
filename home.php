<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Navbar</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/navbar.css">
  </head>
  <style>
    h2 {
      padding-top: 20px;
      padding-left: 40px;
    }
    h3 {
      padding-left: 40px;
    }
  </style>
  <body>
    <section class="container">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="./homepage.php"></i>
              프로그램(드라마) 소개</a></li>
            <li role="presentation"><a href="./sample-component(hw)/dropdown.php"></i>
              등장인물</a></li>
            <li role="presentation"><a href="./btngroup.php"></i>
              캐릭터 소개</a></li>
            <li role="presentation"><a href="./btndropdown.php"></i>
              촬영 장소</a></li>
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                JavaScript <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <a href="modal.php">
                  Modal
                </a>
                <br>
                <a href="dropdown.php">
                  Drop Down
                </a>
                <br>
                <a href="scrollspy.php">
                  Scroll Spy
                </a>
                <br>
                <a href="tabnav.php">
                  Tab
                </a>
                <br>
                <a href="tooltip2.php">
                  Tooltip
                </a>
                <br>
                <a href="popover.php">
                  Popover
                </a>
                <br>
                <a href="loading.php">
                  Loading
                </a>
                <br>
                <a href="collapse.php">
                  Collapse
                </a>
                <br>
                <a href="carousel.php">
                  Carousel
                </a>
                <br>
                <a href="affix.php">
                  Affix
                </a>
                <br>             　
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-sm-9">
          <div class="dropdown">
            <h2>환영합니다! </h2>
            <h3>Bootstrap의 세계에 오신걸 환영합니다. </h3>
          </div>
        </div>
      </div>
    </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>

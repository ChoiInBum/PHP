<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Button Group</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/btngroup.css">
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
            <li role="presentation"><a href="../home.php"></i>
              프로그램(드라마) 소개</a></li>
            <li role="presentation" class="active"><a href="./character.php"></i>
              등장인물</a></li>
            <li role="presentation"><a href="./sample-component(hw)/btngroup.php"></i>
              캐릭터 소개</a></li>
            <li role="presentation"><a href="./btndropdown.php"></i>
              촬영 장소</a></li>
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="C:\wamp64\www2\sample-javascript(hw)\modal.php" role="button" aria-expanded="false">
                JavaScript <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <a href="./sample-component(hw)/modal.php">
                  Modal
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\dropdown.php">
                  Drop Down
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\scrollspy.php">
                  Scroll Spy
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\tabnav.php">
                  Tab
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\tooltip2.php">
                  Tooltip
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\popover.php">
                  Popover
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\loading.php">
                  Loading
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\collapse.php">
                  Collapse
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\carousel.php">
                  Carousel
                </a>
                <br>
                <a href="C:\wamp64\www2\sample-javascript(hw)\affix.php">
                  Affix
                </a>                                　
              </ul>
            </li>
          </ul>
        </div>

        <div class="col-sm-9">
          <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary">Left</button>
            </div>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-warning">Middle</button>
            </div>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-success">Right</button>
            </div>
          </div>
          <button type="button" class="btn btn-info btn-block">Success</button>

          <div class="btn-group-vertical" role="group" aria-label="..." style="margin-top: 50px;">
            <button type="button" class="btn btn-default">1</button>
            <button type="button" class="btn btn-default">2</button>

            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Dropdown
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuDivider">
                <li role="presentation" class="dropdown-header">Welcome!</li>
                <li><a href="#">Dropdown link1</a></li>
                <li role="presentation" class="divider"></li>
                <li><a href="#">Dropdown link2</a></li>
                <li><a href="#">Dropdown link3</a></li>
                <li><a href="#">Dropdown link4</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>

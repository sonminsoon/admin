<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2017-01-20
 * Time: 오후 3:21
 */
?>

<!DOCTYPE html>
<html>
<head>
  <title>AMDIN REGISTER</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="/static/lib/flatadmin/assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
        <div class="app-right-section">
          <div class="app-brand"><span class="highlight">CROSSM</span> Admin</div>
          <div class="app-info">

<!--            <ul class="list">-->
<!--              <li>-->
<!--                <div class="icon">-->
<!--                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>-->
<!--                </div>-->
<!--                <div class="title">Increase <b>Productivity</b></div>-->
<!--              </li>-->
<!--              <li>-->
<!--                <div class="icon">-->
<!--                  <i class="fa fa-cubes" aria-hidden="true"></i>-->
<!--                </div>-->
<!--                <div class="title">Lot of <b>Components</b></div>-->
<!--              </li>-->
<!--              <li>-->
<!--                <div class="icon">-->
<!--                  <i class="fa fa-usd" aria-hidden="true"></i>-->
<!--                </div>-->
<!--                <div class="title">Forever <b>Free</b></div>-->
<!--              </li>-->
<!--            </ul>-->
          </div>
        </div>
        <div class="app-form">
          <div class="form-suggestion">
                관리자등록
          </div>
            <?php echo form_open('/auth/register'); ?>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="name" placeholder="이름" value="<?php echo set_value('name'); ?>" aria-describedby="basic-addon1">
              </div>
            <?php echo form_error('name'); ?>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="id" placeholder="아이디" value="<?php echo set_value('id'); ?>" aria-describedby="basic-addon2">
              </div>
            <?php echo form_error('id'); ?>
            <?php echo form_error('id_chk'); ?>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon5">
                  <i class="fa fa-mobile-phone (alias)" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="mobilephone" placeholder="핸드폰번호" aria-describedby="basic-addon5">
            </div>
            <?php echo form_error('mobilephone'); ?>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" placeholder="비밀번호" value="<?php echo set_value('password'); ?>" aria-describedby="basic-addon3">
              </div>
            <?php echo form_error('password'); ?>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password_conf" placeholder="비밀번호확인" value="<?php echo set_value('password_conf'); ?>" aria-describedby="basic-addon4">
              </div>
            <?php echo form_error('password_conf'); ?>
              <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="등록">
              </div>
          </form>
          <div class="form-line">
            <div class="title">OR</div>
          </div>
          <div class="form-footer">
            <button type="button" class="btn btn-default btn-sm btn-social __twitter" onclick="login()">
              <div class="info">
                <i class="icon fa fa-user" aria-hidden="true"></i>
                <span class="title">로그인</span>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>

<!--  <script type="text/javascript" src="/static/lib/flatadmin/assets/js/vendor.js"></script>-->
<!--  <script type="text/javascript" src="/static/lib/flatadmin/assets/js/app.js"></script>-->
    <script>
        function login() {
            location.href = "/auth/login"
        }
    </script>
</body>
</html>
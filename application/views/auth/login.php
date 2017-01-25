<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>

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
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand"><span class="highlight"></span> ADMIN</div>
        </div>


          <?php echo form_open('/auth/login'); ?>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" name="id" class="form-control" value="<?php echo set_value('id'); ?>" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        <?php echo form_error('id'); ?>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Password" aria-describedby="basic-addon2">
            </div>
        <?php echo form_error('password'); ?>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="로그인">
            </div>

        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          <button type="button" class="btn btn-default btn-sm btn-social __twitter" onclick="register()">
            <div class="info">
              <i class="icon fa fa-edit (alias)" aria-hidden="true"></i>
              <span class="title">관리자등록</span>
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
    function register() {
      location.href = "/auth/register"
    }
</script>

</body>
</html>
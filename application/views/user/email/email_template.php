<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Online Enrollment USJR Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>

    body {padding: 0;margin: 0;}
    .container { width: 100%;max-width: 100%;padding: 0;margin: 0 auto;}
    .inline-block {display: inline-block;}
    a {text-decoration: none;}
    header {background: rgba(0,0,0,0.099);width: 100%;height: 130px;border-radius: 30px 30px 3px 3px;}
    .headerwrapper {background: #085C2E;border-radius: 30px 30px 3px 3px;padding: 2px 10px 0 10px;}
    .logo {text-align: center;}
    .btn {display: inline-block; padding: 6px 12px; margin-bottom: 0; font-size: 14px; font-weight: 400; line-height: 1.42857143; text-align: center; white-space: nowrap;
      vertical-align: middle; -ms-touch-action: manipulation; touch-action: manipulation; cursor: pointer; -webkit-user-select: none; -moz-user-select: none;
      -ms-user-select: none; user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px;}
    .btn-primary { color: #fff; background-color: #337ab7; border-color: #2e6da4;}
    h1 {font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; box-sizing: border-box; -webkit-margin-before: 0.67em; -webkit-margin-after: 0.67em;
      -webkit-margin-start: 0px; -webkit-margin-end: 0px;}
</style>
</head>

<body>
<div>
  <div class="headerwrapper">
  <!-- HEADER DIV -->
  <header>
    <div class="container">
        <div class="logo">
          <img src="http://usjr.edu.ph/wp-content/uploads/cropped-header_logo-text-v2121.png" alt="logo">
        </div>
    </div>
  </header>
  </div>
  <div class="body-email">
    <h1 style="Margin-left: 20px;">USJ-R Online Enrollment</h1>
    <p style="Margin-top: 30px; Margin-left: 30px; color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hey <?php echo $userName;?>,</p>
    <p style="Margin-top: 0; Margin-left: 50px; color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> Please click button bellow to verify your Email Address.</p>
    <form action="<?php echo base_url("/User/confirm_email/") . $verificationText ?>">
      <button class="btn btn-primary" style="margin-left: 50px; margin-bottom: 30px;">CLICK HERE TO VERIFY!</button>
    </form>
    <p style="Margin-top: 0; Margin-left: 50px; color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px"> Or Please click the link bellow if the button will not work to verify your Email Address.</p>
    <a  style="Margin-left: 50px;" href="<?php echo base_url("/User/confirm_email/") . $verificationText ?>"><?php echo base_url("/User/confirm_email/") . $verificationText ?></a>
    <p style="Margin-top: 50px;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 0; text-align: right; Margin-right: 30%;">Truly Yours,</p>
    <p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px; text-align: right; Margin-right: 30%;">Online Enrollment USJR Admin</p>
    </div>
  </div>
>
</body>
</html>

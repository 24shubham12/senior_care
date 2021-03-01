<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/users/asset/css/login.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <header>Patient Login</header>
            <?php echo form_open('Users/login'); ?>
            <div class="input-field">
                <div  style="text-align:left;width: 100%;font-weight: bold;">E-mail</div>
                <input type="email" id="email" name='email' placeholder="Ex : abc@gmail.com">
            </div>
            <div class="err_box">
                <span id="err_email" style="text-align: left;"></span>
            </div>
            <div class="input-field">
                <div  style="text-align:left;width: 100%;font-weight: bold;">Password</div>
                <input class="pswrd" type="password" name="pass" id="pass" placeholder="******">
            </div>
            <div class="err_box">
                <span id="err_pass" style="text-align: left;"></span>
            </div>

            <div class="button">
                <div class="inner"></div>
                <button type="submit" id="submitdata" onclick="return validateLoginInfo();">LOGIN</button>
            </div>
            <?php echo form_close(); ?>

            <div class="signup">
                Not yet registered? <b><a href="<?php echo base_url(); ?>Users/registration" style="text-decoration: none;"> Signup here</a></b>
            </div>
        </div>
        <script>
            function validateLoginInfo() {

                var email_id = document.getElementById("email");
                var passwrd = document.getElementById("pass");

                return (emptyValidation(email_id, 'err_email') ?
                        CheckTags(email_id, 'err_email') ?
                        emptyValidation(passwrd, 'err_pass') ?
                        CheckTags(passwrd, 'err_pass') ?
                        true : false : false : false : false);
            }


            function emptyValidation(control, msgBox) {

                var control_len = control.value.length;
                if (control_len === 0) {
                    document.getElementById(msgBox).innerHTML = '<b style="color:#f70d1a;font-size:13px;">This field is required..!</b>';
                    control.focus();
                    return false;
                }
                document.getElementById(msgBox).innerHTML = '';
                return true;
            }

            function CheckTags(txtfld, msgBox) {

                var reg = /<(.|\n)*?>/g;
                var value = txtfld.value;
                if (reg.test(value) == false) {
                    document.getElementById(msgBox).innerHTML = '';
                    return true;
                }
                document.getElementById(msgBox).innerHTML = '<b style="color:#f70d1a;font-size:13px;">Tags are not allowed</b>';
                txtfld.focus();
                return false;

            }
        </script>

    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= base_url(); ?>application/views/admin/asset/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="title-text">
                <div class="title login">
                    Doctor's Login</div>
            </div>
            <div class="form-container">
                <div class="form-inner">
                   <?php echo form_open('Admin/login'); ?>
                        <div class="field">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" name="pass" placeholder="Password" required>
                        </div>
                        <br>
                        <div class="field btn">
                            <div class="btn-layer">
                            </div>
                            <input type="submit" value="Login">
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

    </body>
</html>

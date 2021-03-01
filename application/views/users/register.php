<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/users/asset/css/regform.css" type="text/css" />
    </head>
    <body>
        <div class="container form_content">
            <div class="row">
                <div class="col-md-12 text-center p-0">
                    <h3>Patient's Registration</h3>
                    <hr></hr>
                </div>

                <div class="col-md-6">
                    <?php echo form_open_multipart('Users/insert_patient'); ?>
                    <div class="form-group mb-0">
                        <label for="Fname" class="mb-0">Firstname :</label>
                        <input type="text" class="form-control" name="f_name" placeholder="Ex: Jatin" id="fname">
                        <span id="errFname"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="lname" class="mb-0">Contact :</label>
                        <input type="number" class="form-control" name="contact" placeholder="+918893838383" id="contct" min="-1" onkeypress="if (this.value.length === 10) return false;">
                        <span id="errContct"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="dob" class="mb-0">Date Of Birth :</label>
                        <input type="date" class="form-control" name="dob" placeholder="dd-mm-yyyy" id="dob" onchange="ageCount()">
                        <span id="errdob"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="height" class="mb-0">Height (in cm) :</label>
                        <input type="number" class="form-control" name="height" placeholder="160cm" id="height" onkeypress="if (this.value.length === 3) return false;">
                        <span id="errhght"></span>
                    </div>

                    <div class="form-group mb-1">
                        <label for="email" class="mb-0">E-mail :</label>
                        <input type="email" class="form-control" name="email" placeholder="Ex: jatinmishra@gmail.com" id="email_id">
                        <span id="errmail"></span>
                    </div>

                    <div class="form-group">
                        <label for="txtarea" class="mb-0">Mention your medical condition :</label>
                        <textarea class="form-control" cols="40" rows="4" name="txtArea" placeholder="Mention your health problem here..." id="txtarea" style="resize: none;"></textarea>
                        <span id="errTxtarea"></span>
                    </div>

                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-group mb-0">
                        <label for="lname" class="mb-0">Lastname :</label>
                        <input type="text" class="form-control" name="l_name" placeholder="Ex: Mishra" id="lname">
                        <span id="errLname"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="email" class="mb-0">Date Of Appointment :</label>
                        <input type="date" class="form-control" name="appt_date" placeholder="dd-mm-yyyy" id="txtdateAppoint">
                        <span id="errapt"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="age" class="mb-0">Age :</label>
                        <input type="text" class="form-control" name="age" placeholder="65" id="age" readonly="">
                        <span id="errage"></span>
                    </div>

                    <div class="form-group mb-0">
                        <label for="weight" class="mb-0">Weight (in Kg) :</label>
                        <input type="number" class="form-control" name="weight" placeholder="80kg" id="weight">
                        <span id="errwght"></span>
                    </div>

                    <div class="form-group mb-1">
                        <label for="pass" class="mb-0">Password :</label>
                        <input type="password" class="form-control" name="pass" placeholder="******" id="pass">
                        <span id="errpass"></span>
                    </div>

                    <div class="form-group mb-1">
                        <label for="fileInp" class="mb-0">Upload Medical test report:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="rpt_pic1" id="fileInp">
                            <label class="custom-file-label" for="customFile">Choose file..</label>
                        </div>
                        <span id="errFileinp"></span>
                    </div>

                    <div class="form-group">
                        <label for="fileInp2" class="mb-0">Upload Medical test report:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="rpt_pic2" id="fileInp2" onchange="$('#upload-file-info').text(this.files[0].name)">
                            <label class="custom-file-label cust_file_lbl" for="customFile" id="upload-file-info">Choose file..</label>
                        </div>
                        <span id="errFileinp2"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn px-3" style="background: #d33f8d;color: #fff;" id="send_data" onclick="return validateInfo();">Submit Details</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
                        $(".custom-file-input").on("change", function () {
                            var fileName = $(this).val().split("\\").pop();
                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });

                        function validateInfo() {
                            var f_name = document.getElementById("fname");
                            var l_name = document.getElementById("lname");
                            var contct = document.getElementById("contct");
                            var apppointmnt_date = document.getElementById("txtdateAppoint");
                            var birthdate = document.getElementById("dob");
                            var height = document.getElementById("height");
                            var weight = document.getElementById("weight");
                            var email_id = document.getElementById("email_id");
                            var passwrd = document.getElementById("pass");
                            var txtArea = document.getElementById("txtarea");
                            var birthdate = document.getElementById("dob");
                            var fileInp = document.getElementById("fileInp");
                            var fileInp2 = document.getElementById("fileInp2");

                            return (emptyValidation(f_name, 'errFname') ?
                                    CheckTags(f_name, 'errFname') ?
                                    allLetter(f_name, 'errFname') ?
                                    emptyValidation(l_name, 'errLname') ?
                                    CheckTags(l_name, 'errLname') ?
                                    allLetter(l_name, 'errLname') ?
                                    emptyValidation(contct, 'errContct') ?
                                    emptyValidation(apppointmnt_date, 'errapt') ?
                                    emptyValidation(birthdate, 'errdob') ?
                                    emptyValidation(height, 'errhght') ?
                                    emptyValidation(weight, 'errwght') ?
                                    emptyValidation(email_id, 'errmail') ?
                                    emptyValidation(passwrd, 'errpass') ?
                                    emptyValidation(txtArea, 'errTxtarea') ?
                                    CheckTags(txtArea, 'errTxtarea') ?
                                    emptyValidation(birthdate, 'errdob') ?
                                    emptyValidation(fileInp, 'errFileinp') ?
                                    emptyValidation(fileInp2, 'errFileinp2') ?
                                    true : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false);
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
                            document.getElementById(msgBox).innerHTML = '<b>Tags are not allowed</b>';
                            txtfld.focus();
                            return false;

                        }

                        function allLetter(txtfld, msgBox) {
                            var letters = /^[A-Za-z ]+$/;
                            if (txtfld.value.match(letters)) {
                                document.getElementById(msgBox).innerHTML = '';
                                return true;
                            } else {
                                document.getElementById(msgBox).innerHTML = 'Must have alphabet characters only';
                                txtfld.focus();
                                return false;
                            }
                        }


                        function ageCount() {
                            var now = new Date();
                            var currentY = now.getFullYear();
                            var currentM = now.getMonth();

                            var dobget = document.getElementById("dob").value;
                            var dob = new Date(dobget);
                            var prevY = dob.getFullYear();
                            var prevM = dob.getMonth();

                            var ageY = currentY - prevY;
                            var ageM = Math.abs(currentM - prevM);

                            document.getElementById('age').value = ageY + ' years ';

                            if (ageY < 65) {
                                alert("Sorry this platform is only for senior citizens above 65 years of age..!\nYou are not a senior citizen.");
                                document.getElementById('send_data').setAttribute("disabled", "disabled");
                            } else {
                                document.getElementById('send_data').removeAttribute("disabled");
                            }
                        }
        </script>
    </body>
</html>
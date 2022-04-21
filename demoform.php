<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi-page form</title>
    <link rel="stylesheet" href="demo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="form-container">

        <div class="progress-bar" id="progressBar">
            <p class="progress-bar-text" id="progressText">Personal Informations</p>
        </div>

        <div class="alumni-detail-form">

            <form action="#" method="post">

                <div class="first-form" id="first-form">
                    <h3>Enter your personal informations</h3>
                    <div class="form-control">
                        <label class="star" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <span class="name-error" id="nameError" style="color: red"></span>
                    </div>
                    <div class="form-control">
                        <label class="star" for="name">College Name</label>
                        <input type="text" name="name" id="clgname" placeholder="Your College Name" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="name">Gender</label>
                        <select name="gender" id="gender" required>
                            <option>--SELECT--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="star" for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" placeholder="dd-mm-yyyy" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="designation">Present Occupation/Position/Designation</label>
                        <input type="text" name="occupation" id="occupation" placeholder="Present Occupation/Position/Designation" required>
                    </div>
                    <div class="submit-buttons">
                        <a href="#" id="next-1">Next</a>
                        <button type="submit" name="save-page-1" class="submit-btn">Save</button>
                    </div>
                </div>

                <div class="second-form" id="second-form">
                    <h3>Enter your secondary informations</h3>
                    <div class="form-control">
                        <label class="star" for="cname">Company Name/ Organization Name</label>
                        <input type="text" name="compname" id="compname" placeholder="Company Name/ Organization Name" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="oaddress">Office/Present Address</label>
                        <textarea name="oaddress" id="oaddress" rows="4" cols="50" placeholder="Enter Your Office Address">
                        </textarea>
                    </div>
                    <div class="form-control">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" placeholder="State" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="pin">Pincode</label>
                        <input type="text" name="pin" id="pin" placeholder="Pincode" required>
                    </div>
                    <div class="submit-buttons">
                        <a href="#" id="previous-1">Previous</a>
                        <a href="#" id="next-2">Next</a>
                        <button type="submit" name="save-page-2" class="submit-btn">Save</button>
                    </div>
                </div>

                <div class="third-form" id="third-form">
                <h3>Enter your third informations</h3>
                    <div class="form-control">
                        <label class="star" for="country">Country</label>
                        <input type="text" name="country" id="country" placeholder="Your Country" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="paddress">Permanent Address <span>(Same as present address tick here)</span>
                            <input type="checkbox" id="checkbox" onclick="copyPaste()"></label><textarea name="paddress" id="paddress" rows="4" cols="50" placeholder="Enter Your Permanent Address">
                        </textarea>
                    </div>
                    <div class="form-control">
                        <label class="star" for="pstate">State</label><input type="text" name="pstate" placeholder="Your State" id="pstate" required>
                    </div>
                    <div class="form-control">
                        <label class="star" for="pmpincode">Pincode</label><input type="text" id="ppincode" name="ppincode" placeholder="Pincode" required>
                    </div>
                    <div class="submit-buttons">
                        <a href="#" id="previous-2">Previous</a>
                        <button type="submit" name="submit" class="submit-btn">Submit</button>
                    </div>
                </div>

            </form>
        </div>

    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" ></script> -->

    <script type="text/javascript" defer>
        $(document).ready(function(){

            $("#next-1").click(function(e){
                e.preventDefault();
                if($('#name').val() == ""){
                    $('#nameError').html('*Name is required')
                    return false;
                }
                else if($('#name').val().length < 3) {
                    $('#nameError').html('*Name is too small')
                    return false;
                }
                // else if(isNaN($('#name').val()) != true){
                //     $('#nameError').html('*Numbers are not allowed')
                //     return false;
                // }
                else{
                    $('#second-form').show();
                    $('#first-form').hide();
                    $('#progressBar').css('width', '60%')
                    $('#progressText').html('2nd informations')
                }
            });

            $('#next-2').click(function(){
                $('#third-form').show()
                $('#second-form').hide()
                $('#progressBar').css('width', '100%')
                $('#progressText').html('3rd informations')
            })

            $('#previous-1').click(function(){
                $('#second-form').hide()
                $('#first-form').show()
                $('#progressBar').css('width', '30%')
                $('#progressText').html('Personal Informations')
            })

            $('#previous-2').click(function(){
                $('#third-form').hide()
                $('#second-form').show()
                $('#progressBar').css('width', '60%')
                $('#progressText').html('2nd informations')
            })

        });
    </script>


</body>

</html>
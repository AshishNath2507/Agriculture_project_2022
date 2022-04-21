

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add alumni</title>
    <link rel="stylesheet" href="demo.css">
    <script src="demo.js"></script>
    <style>
        .main-container {
            display: flex;
            flex-direction: column;
        }

        .star:after {
            content: "*";
            color: red;
        }
    </style>

</head>

<body>

    <?php include('nav.php'); ?>

    <div class="alumnibody"></div>
        <div class="alumniheader">
            <h2>Add Alumni Information</h2>
        </div>

        <div class="alumnicontainer">
            <form action="alumniform1.php" method="post" enctype="multipart/form-data">
                <label class="star" for="name">Name</label>
                <input type="text" name="name" placeholder="Your Name here" required>

                <label class="star" for="name">College Name</label>
                <input class="star" type="text" name="clgname" placeholder="Your College Name">

                <label class="star" for="name">Gender</label>
                <select name="gender" required>
                    <option>--SELECT--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>

                <label class="star" for="dob">Date of Birth</label>
                <input type="date" name="dob" placeholder="dd-mm-yyyy" required>

                <label class="star" for="designation">Present Occupation/Position/Designation</label>
                <input type="text" name="occupation" placeholder="Present Occupation/Position/Designation" required>

                <label class="star" for="cname">Company Name/ Organization Name</label>
                <input type="text" name="compname" placeholder="Company Name/ Organization Name" required>

                <label class="star" for="oaddress">Office/Present Address</label>
                <textarea name="oaddress" rows="4" cols="50" placeholder="Enter Your Office Address">
                </textarea>

                <label for="state">State</label>
                <input type="text" name="state" placeholder="State" required>

                <label class="star" for="pin">Pincode</label>
                <input type="text" name="pin" placeholder="Pincode" required>

                <label class="star" for="country">Country</label>
                <input type="text" name="country" placeholder="Your Country" required>

                <label class="star" for="paddress">Permanent Address <span>(Same as present address tick here)</span>
                    <input type="checkbox" id="checkbox" onclick="copyPaste()"></label><textarea name="paddress" rows="4" cols="50" placeholder="Enter Your Permanent Address">
                </textarea>

                <label class="star" for="pstate">State</label><input type="text" name="pstate" placeholder="Your State" required>

                <label class="star" for="pmpincode">Pincode</label><input type="text" name="ppincode" placeholder="Pincode" required>

                <label class="star" for="pmcountry">Country</label><input type="text" name="pcountry" placeholder="Country" required>

                <label class="star" for="nationality">Nationality</label><input type="text" name="nationality" placeholder="Nationality" required>

                <label class="star" for="bloodgroup">Blood Group</label>
                <select name="bloodgroup" required>
                    <option>--SELECT--</option>
                    <option value="A+">A-positive (A+)</option>
                    <option value="A-">A-negative (A-)</option>
                    <option value="B+">B-positive (B+)</option>
                    <option value="B-">B-negative (B-)</option>
                    <option value="AB+">AB-positive (AB+)</option>
                    <option value="AB-">AB-negative (AB-)</option>
                    <option value="O+">O-positive (O+)</option>
                    <option value="O-">O-negative (O-)</option>
                </select>

                <label class="star" for="email">Email ID</label><input type="text" name="email" placeholder="Email ID" required>

                <label class="star" for="phone">Mobile Number</label><input type="text" name="phone" placeholder="Mobile Number" required>

                <div class="middle-container">
                    <h3>Select Your Degree</h3>
                    <hr>
                </div>

                <label class="star" for="grad">Graduation</label><input type="text" name="graduation" placeholder="Graduation" required>

                <label class="star" for="gradyear">Year of Admission</label>
                <select id="gradyear" name="gradyear" onclick="listOfYears()" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="passout">Year of Degree Awarded</label>
                <select id="gpassout" name="gpassout" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="master">Masters</label><input type="text" name="masters" placeholder="Masters Degree" required>

                <label class="star" for="myear">Year of Admission</label>
                <select id="myear" name="myear" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="mpassout">Year of Degree Awarded</label>
                <select id="mpassout" name="mpassout" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="discipline">Master's Discipline</label><input type="text" name="mdiscipline" placeholder="Master's Discipline" required>

                <label class="star" for="doc">Doctoral</label><input type="text" name="doctoral" placeholder="Your Doctorate's Degree" required>

                <label class="star" for="dyear">Year of Admission</label>
                <select id="dyear" name="dyear" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="dpassout">Year of Degree Awarded</label>
                <select id="dpassout" name="dpassout" required>
                    <option>--Select Year--</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

                <label class="star" for="ddisc">Doctoral's Discipline</label><input type="text" name="ddisc" placeholder="Doctoral's Discipline" required>

                <input type="file" name="photo" required> 

                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
    <script src="demo.js"></script>
</body>

</html>
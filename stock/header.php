<!-- ----Header---- -->
<nav class="navbarHeader">

    <div class="header-image">
        <img src="../images/logo.png" alt="agri-img" srcset="">
    </div>

    <a href="#" class="navbarToggleButton">
        <span class="bars"></span>
        <span class="bars"></span>
        <span class="bars"></span>
    </a>
    <div class="navbarItems">
        <a class="navLink" href="../index.php">Home</a>
        <div class="navDropdown" data-dropdown>
            <button class="navLink academics-dd" data-dropdown-button>Academics<sup>+</sup></span></button>
            <div class="dropdown-menu ">
                <div>
                    <div class="dropdown-heading">Informations</div>
                    <div class="dropdown-links">
                        <a href="../viewstd.php" class="navLink">Students</a>
                        <a href="../viewfac.php" class="navLink">Faculty</a>
                        <a href="../viewalumni.php" class="navLink">Alumni</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="navLink" href="./stockmain.php">Stock</a>
        <a class="navLink" href="../c.php">Contact Us</a>
        <a class="navLink" href="#">About Us</a>

        <div class="navDropdown" data-dropdown>
            <button class="navLink account-dd" data-dropdown-button>Account<sup>+</sup></span></button>
            <div class="dropdown-menu information-grid">
                <!-- <div>
                    <div class="dropdown-heading">Admin</div>
                    <div class="dropdown-links">

                    </div>
                </div> -->
                <div>
                    <div class="dropdown-heading">Alumni</div>
                    <div class="dropdown-links">
                        <a href="../alumnireg.php" class="navLink">Register</a>
                        <a href="../alumnilogin.php" class="navLink">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navDropdown" data-dropdown>
            <button class="navLink" data-dropdown-button>Admin Login<sup>+</sup></span></button>
            <div class="dropdown-menu admin-login">
                <form action="../adminlogin1.php" method="POST" class="login-form">
                    <label for="username">Username:</label>
                    <input type="text" name="uname" id="name" required>
                    <label for="password">Password:</label>
                    <input type="password" name="pswd" id="pswd" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
 </nav>

<script src="demo.js" defer type="text/javascript"></script>
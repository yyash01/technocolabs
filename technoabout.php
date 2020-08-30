<h1><?php
session_start();
if(isset($_SESSION['user_name'])){
  echo "Hello ,  " .$_SESSION['user_name'];
    echo ' <form align="right" action="technologout.php"><input type="submit" value="Logout" ></form>';
  
}

?>
</h1>

<html>
    <head>
        <title>About us</title>
        <link rel="stylesheet" type="text/css" href="technoabout.css"/>
    </head>
    <body>
        <div class="container">
        <div class="company">
            <h1 align="center">Technocolabs</h1>
          <div class="card1"> <p class="p1">At Techno Colabs we offer quality services that go a long way to ensuring that your requirements are well met.
          </br> We have experienced and trained professionals who have the relevant technical knowledge on the subject matter. 
        </br>   Our customer service goes above and beyond - and our reviews show that you can trust us. 
    </br>   Feel free to get in touch anytime to discuss further.</p></div>
        </div>
        <div class="team">
            <h1 align="center">Our Team</h1>
            <div class="row">
                <div class="cols">
                    <div class="card">
                        <img src="./jeet.jpg" alt="Jeet Patel" width="100%">
                        <div class="box">
                            <h3>Jeet Patel</h3>
                            <ul>
                                <li><b>Education</b> : CSE, IIIT</li>
                                <li><b>Role</b> : Back-end</li>
                                <li><b>Contact</b> : 9624166334</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cols">
                    <div class="card">
                        <img src="./3.jpg" alt="Gaurav Pandey" width="100%">
                        <div class="box">
                            <h3>Gaurav Pandey</h3>
                            <ul>
                                <li><b>Education</b> : EXTC,PCE</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 8291092267</li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="cols">
                    <div class="card">
                        <img src="./4.jpg" alt="Suraj Singh" width="100%">
                        <div class="box">
                            <h3>Suraj M.Singh</h3>
                            <ul>
                                <li><b>Education</b> : EXTC,PCE</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 9819683627</li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="cols">
                    <div class="card">
                        <img src="./harsh.jpg" alt="Harshvardhan Goel" width="100%">
                        <div class="box">
                            <h3>Harshvardhan Goel</h3>
                            <ul>
                                <li><b>Education</b> : CSE, SKIT</li>
                                <li><b>Role</b> : Front-End</li>
                                <li><b>Contact</b> : 8302298456</li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="cols">
                    <div class="card">
                        <img src="./yashpic.png" alt="Yash Jain" width="100%">
                        <div class="box">
                            <h3>Yash Jain</h3>
                            <ul>
                                <li><b>Education</b>:CSE,LNMIIT</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 7424907515</li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="cols">
                    <div class="card">
                        <img src="./vandit.jpeg" alt="Vandit Jain" width="100%">
                        <div class="box">
                            <h3>Vandit Jain</h3>
                            <ul>
                                <li><b>Education</b> : CSE, VIT</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 9998983733</li>
                            </ul>
                        </div>
                    </div>
                </div>    

                <div class="cols">
                    <div class="card">
                        <img src="./adarsh.jpeg" alt="Adarsh Shrivastav" width="100%">
                        <div class="box">
                            <h3>Adarsh Srivastava</h3>
                            <ul>
                                <li><b>Education</b> : MCA, IMS</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 9599746922</li>
                            </ul>
                        </div>
                    </div>
                </div>  
                
                <div class="cols">
                    <div class="card">
                        <img src="./manish.JPG" alt="Manish Kumar" width="100%">
                        <div class="box">
                            <h3>Manish Kumar</h3>
                            <ul>
                                <li><b>Education</b>:CSE,HNBGU</li>
                                <li><b>Role</b> : Front-End </li>
                                <li><b>Contact</b> : 9928041361</li>
                            </ul>
                        </div>
                    </div>
                </div>
             </div>         
        </div>
        </div>
    </body>
    </body>
</html>
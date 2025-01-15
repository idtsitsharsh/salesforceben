<?php 
    try {
        $conn = mysqli_connect("localhost", "root", "Harsh2005@", "salesForce");
        $result = mysqli_query($conn,"SELECT (content) FROM trending"); 
        $events = mysqli_query($conn,"SELECT title, date, location, type FROM events"); 
    } catch (mysqli_sql_exception $e) {
        echo "Connection failed: " . $e;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesforce Ben | Salesforce News, Features & Certifications</title>
    <!-- <link rel="icon" href="https://www.salesforceben.com/wp-content/uploads/2023/10/cropped-new-favicon-192x192.png"> -->
    <link rel="stylesheet" href="style-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <img class="nav-banner" src="./Assets/nav_banner.jpeg" alt="Can't load image">
    </div>
    <div class="content">
        <div class="navbar-1">
            <div class="menu-bar"><div></div><div></div><div></div></div>
            <img src="./Assets/logo.svg" alt="Can't load image" class="logo">
            <div class="search-box">
                <p>Search</p>
                <i class="fa-solid fa-magnifying-glass"></i> 
            </div>
            <div class="takeaway-box"><p>Newsletters</p></div>
            <div class="courses-login">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-caret-up"></i>
            </div>
        </div>
    </div>
    <div class="navbar-2">
        <div class="content-2">
            <div>Events</div>
            <div>Career</div>
            <div>AppAssessor</div>
            <div>Saleforce News</div>
            <div>Artices by Role</div>
        </div>
    </div>
    <div class="content-3">
        <div class="left-panel">
            <div><button class="takeaway-box latest">Latest</button><button class="takeaway-box rest">Most Popular</button><button class=" rest takeaway-box">Editor's Picks</button></div>
            <div class="flex">
                <div class="left">
                    <p class="title-left">Master Apex Replay Debugger: How to Streamline Debugging in Salesforce</p>
                    <p class="author-left">By Tom Bassett</p>
                    <p class="date-left">January 15, 2025</p>
                </div>
                <div class="right">
                    <img src="./Assets/Master-Apex-Replay-Debugger-How-to-Streamline-Debugging-in-Salesforce-1024x576.webp" alt="Can't load image">
                </div>
            </div>
            <div class="flex">
                <div class="">
                    <div class="right">
                        <img src="./Assets/How-Does-Salesforce-Support-Their-Partners-1024x576.webp" alt="Can't load image">
                    </div>
                    <div class="left">
                        <p class="title-left">Master Apex Replay Debugger: How to Streamline Debugging in Salesforce</p>
                        <p class="author-left">By Tom Bassett</p>
                        <p class="date-left">January 15, 2025</p>
                    </div>
                    
                </div>
                <div class="">
                    <div class="right">
                        <img src="./Assets/Ensure-Your-Marketing-Cloud-IP-Warming-Results-in-Success-1-1024x576.webp" alt="Can't load image">
                    </div>
                    <div class="left">
                        <p class="title-left">Master Apex Replay Debugger: How to Streamline Debugging in Salesforce</p>
                        <p class="author-left">By Tom Bassett</p>
                        <p class="date-left">January 15, 2025</p>
                    </div>
                    
                </div>
            </div>
            <div style="background-color: rgb(208, 208, 208); padding:3vw">
                <div class="rb-header">
                    <hr style="border-color: black">
                    <p class="content-heading">POPULAR VIDEOS</p>
                    <hr style="border-color: black">
                </div>
                <br><br>
                <div class="videos">
                    <div class="video1">
                        <div class="right"> 
                            <img src="./Assets/Are-Salesforce-Still-Relevant-Top-Voices-Join-the-Great-Cert-Debate-1024x576.webp" alt="Can't load image">
                        </div>
                        <div class="left">
                            <p class="title-left" style="font-size: 1.2vw;">Are Salesforce Certifications Still Relevant? Top Voices Join the Great Cert Debate</p>
                            <p class="author-left">By Henry Martin</p>
                            <p class="date-left" style="color: black">January 10, 2025</p>
                        </div>
                    </div>
                    <div class="video2">
                        <div class="right">
                            <img src="./Assets/The-Salesforce-Economy-Layoffs-DevOps-and-AI-Looking-Back-at-Past-Predictions-1024x576.webp" alt="Can't load image">
                        </div>
                        <div class="left">
                            <p class="title-left" style="font-size: 1.2vw;">The Salesforce Economy, Layoffs, DevOps, and AI: Looking Back at Past Predictions</p>
                            <p class="author-left">By Ben McCarthy</p>
                            <p class="date-left" style="color: black">December 11, 2024</p>
                        </div>
                    </div>
                    <div class="video3">
                        <div class="right">
                            <img src="./Assets/The-Great-Salesforce-Reset-1024x576.webp" alt="Can't load image">
                        </div>
                        <div class="left">
                            <p class="title-left" style="font-size: 1.2vw;">The Great Salesforce Job Market Reset</p>
                            <p class="author-left">By Sasha Semjonova</p>
                            <p class="date-left" style="color: black">Decmeber 09, 2024</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="right-panel">
            <img src="./Assets/f7277e6f-79f7-4d77-8f49-f89aedf447a6.png" alt="Can't load image" class="right-panel-banner">
            <div class="rb-header">
                <hr>
                <p class="content-heading">WHAT'S TRENDING</p>
                <hr>
            </div>
            <div class="w-trending">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='w-trending-content'>
                            <i class='fa-solid fa-arrow-right purple'></i>
                            <p class='content-text'>".$row['content']."</p>
                            </div>";
                    }
                ?>
            </div>
            <img src="./Assets/2a02c92d-07de-41a8-941e-4807247e99e9.jpg" alt="Can't load image" class="right-panel-banner">
            <img src="./Assets/9246ba6b-d033-4de8-8724-48e49b82363d.png" alt="Can't load image" class="right-panel-banner">
            <div class="rb-header">
                <hr>
                <p class="content-heading">UPCOMING EVENTS</p>
                <hr>
            </div>
            <div class="w-trending">
                <?php 
                    while ($eventRow = mysqli_fetch_assoc($events)) {
                        $date = new DateTime($eventRow['date']);
                        echo '<div class="events">
                                <div class="event-date">
                                    <p class="date">'.$date->format('d').'</p>
                                    <p class="month">'.$date->format('M').'</p>
                                </div>
                                <div class="event-content">
                                    <p class="venue">'.$eventRow['location'].'</p>
                                    <p class="type">'.$eventRow['type'].'</p>
                                </div>
                              </div>';
                    }
                ?> 
            </div>
            <img src="./Assets/2e082a52-ecee-4f54-a46f-586f66dc0aab.png" alt="Can't load image" class="right-panel-banner">
            <img src="./Assets/b15eaa22-540d-4611-90d6-a34400afbbdf.png" alt="Can't load image" class="right-panel-banner">
        </div>
    </div>
    <div class="navbar-2" >
        <div class="content-2 font" id="navbar-bottom">
            <div>
                <p class="inline">Newsletter :</p>
                <input type="text" placeholder="Enter you email" class='email-input font inline'>
                <button class="subscribe-button font inline">Subscribe</button>
            </div>
            <div>
                <p class="inline">Find us on: </p>
                <div class="inline "><i class="fa-brands fa-instagram icons"></i></div>
                <div class="inline "><i class="fa-brands fa-linkedin icons"></i></div>
                <div class="inline "><i class="fa-brands fa-youtube icons"></i></div>
            </div> 
        </div>
    </div>
    <footer>
        <div class='content footer-main'>
        <div>
            <img src="./Assets/logo.svg" alt="Can't load image" class="logo">
        </div>
        <div class='flex'>
        <div>
            <p>
                Salesforce Ben<br>
                Third Floor Library Building<br>
                Sun Street<br>
                Tewkesbury<br>
                Gloucestershire<br>
                United Kingdom<br>
                GL20 5NX
            </p>
        </div>
        <div>
            <ul>
                <li>Where to Start</li>
                <li>Salesforce Certification List</li>
                <li>How to Get Certified</li>
                <li>
                    Free Salesforce Practice Exams
                    <ul>
                        <li>Admin Practice Exam</li>
                        <li>Platform App Builder Practice Exam</li>
                        <li>Platform Developer 1 Practice Exam</li>
                    </ul>
                </li>
                <li>How to Get a Job in Salesforce</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Events</li>
                <li>Career</li>
                <li>AppAssessor</li>
                <li>Salesforce News</li>
                <li>Articles by Role</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Admins</li>
                <li>DevOps</li>
                <li>Developers</li>
                <li>Marketers</li>
                <li>Consultants</li>
                <li>Architects</li>
                <li>Business Analysts</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Write For Us</li>
                <li>Influencer Program</li>
                <li>Advertise With Us</li>
                <li>Pledge 1%</li>
                <li>Privacy Policy</li>
                <li>Log in to Courses</li>
            </ul>
        </div>
        </div>
        <div class="copyright">
            <p>Made with &hearts; by Harsh Gupta</p>
        </div>
        </div>
    </footer>


<script src="app-index.js"></script>
</body>
</html>




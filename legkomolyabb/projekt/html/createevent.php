<?php
session_start();
if(!isset($_SESSION["started"])){
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
        <title>Create Event</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Event advertising website. Create your own events, or attend other people's events">
        <meta name="author" content="Gergo Toth, Robert Nagy">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="notranslate">
        <meta name="language" content="english">
      
        <meta property="og:title" content="Events">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../images/brandimage.png">
        <meta property="og:url" content="createevent.php">
        <!--EXTRA OG TAGS-->
        <meta property="og:description" content="Create your own events, or attend other people's events">
        <meta property="og:locale" content="en_US">
        <meta property="og:site_name" content="Events">
       
      
        <link rel="stylesheet" href="../css/navbarstyle.css">
        <link rel="stylesheet" href="../css/footerstyle.css">
        <link rel="stylesheet" href="../css/createevent.css">
    </head>
    <body id="createEvent">
        <header>
            <nav>
                <ul class="nav-container">
                    <li data-page="homepage"><a href="../../index.php">Home</a></li>
                    <li data-page="upcomingEvents"><a href="upcomingevent.php">Upcoming Events</a></li>
                    <li data-page="createEvent"><a href="createevent.php">Create Event</a></li>
                    <li class="search-bar-li">
                            
                        <a class="search-anchor" href="../../index.php">Search for an Event</a>
                       
                        <div class="search-bar-container">
                            <div class="search-bar">   
                                <div class="search-icon"></div>
                                <form action="../php/search.php" method="post" class="search-form">
                                    <input class="search-box" type="search" name="search" placeholder="Search for an event...">
                                    <button  class="search-button" type="submit" value="Search">Search</button> 
    
                                </form>
                            
                            </div>
                        </div>
                    </li>


                    <?php

                    if(isset($_SESSION["started"])&&$_SESSION["started"]===true){
                        echo '<li class="loginLi"><a href="logout.php">Log out</a></li>';
                    }
                    ?>
                    <?php
                    if(isset($_SESSION["started"])&&$_SESSION["started"]===true){
                        echo '<li class="registerLi"><a href="profile.php">Profile</a></li>';
                    }
                    ?>
                    <?php
                    if(!isset($_SESSION["started"])){
                        echo '<li class="loginLi"><a href="login.php">Log In</a></li>';
                    }
                    ?>
                    <?php
                    if(!isset($_SESSION["started"])){
                        echo '<li class="registerLi"><a href="register.php">Register</a></li>';
                    }
                    ?>
    
                    <li class="dropdown-li">
                        <div class="dropdown-menu" id="dropdownHamburger">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="dropdown-panel" id="dropdownPanelId">
                            <ul class="dropdown-panel-list" id="dropdownPanelList">
                                
                                <li class="mobile-search-li">
                                    <div class="search-bar-container" id="panelSearchBar">
                                        <div class="search-bar">   
                                            <!--<div class="search-icon"></div>-->
                                            <form action="../php/search.php" method="post" class="search-form">
                                                <input class="search-box" type="search" name="search" placeholder="Search for an event...">
                                                <button  class="search-button" type="submit" value="Search"></button> 
                    
                                            </form>
                                        
                                        </div>
                                    </div>
                                </li>
                                <li>  <a class="search-anchor" href="../../index.php">Search for an Event</a>
                                </li>
                                <li data-page="upcomingEvents"><a href="upcomingevent.php">Upcoming Events</a></li>
                                <li data-page="createEvent"><a href="createevent.php">Create Event</a></li>



                                <?php

                                if(isset($_SESSION["started"])&&$_SESSION["started"]===true){
                                    echo '<li class="loginLi"><a href="logout.php">Log out</a></li>';
                                }
                                ?>
                                <?php
                                if(!isset($_SESSION["started"])){
                                    echo '<li class="loginLi"><a href="login.php">Log In</a></li>';
                                }
                                ?>
                                <?php
                                if(!isset($_SESSION["started"])){
                                    echo '<li class="registerLi"><a href="register.php">Register</a></li>';
                                }
                                ?>
    
                            
                            </ul>
                        
                        </div>
                    </li>
                </ul>
    
            </nav>
            </header>
        <main>
             
             <section id="event-creation-hero-section">
                <h2>Welcome to the Event Creation page!</h2>
                <article class="event-creation-article">
                    <h2>Create your event!</h2>
                    <div class="event-creation-form-container">
                        <form action="../php/createevent.php" method="POST" id="eventCreationForm" enctype="multipart/form-data">
                            
                            <label for="eventTitle">Event Title:</label>
                            <input type="text" name="eventTitle" id="eventTitle" maxlength="64" required placeholder="Example: George's birthday party">
                            
                            <label for="eventDetails">Event Details:</label>
                            <textarea form="eventCreationForm" maxlength="2048" name="eventDetails" id="eventDetails" cols="50" rows="7" required placeholder="Example: A great party at the local leisure facility to celebrate my brother's 45th birthday."></textarea>
                            
                            <label for="eventDate">Date:</label>
                            <input type="date" name="eventDate" id="eventDate" required>
                            
                            <div class="starting-time">
                                <h4>Starting Time:</h4>
                                <label for="selectHour">Hour:</label>
                                <select size="24"  name="selectHour" id="selectHour" form="eventCreationForm">
                                    <option value="00" selected="selected">0</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                                <label for="selectMinute">Minutes:</label>
                                <select name="selectMinute" id="selectMinute" size="60">
                                    <option value="00" selected="selected">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                            </div>
                            <div class="time-selection-div-for-mobile">
                                <label for="mobileUserEventTime">Starting Time:</label>
                                <input type="time" id="mobileUserEventTime" name="mobileUserEventTime" >
                            </div>
                            
                            <h4>Event Thumbnail (accepted formats: .jpg, .png, .webp, .jpeg)</h4>
                          
                            <span id="file-span">
                                <label for="eventThumbnail" id="fileInputLabel">Browse...</label>
                                
                                
                                <input type="file" accept=".png, .jpeg, .webp, .jpg" name="eventThumbnail" id="eventThumbnail" required>
                                <label for="eventThumbnail" id="fileLabel">Choose a file...</label>

                            </span>
                           
                            <label for="eventLocation">Event Location:</label>
                            <input type="text" required name="eventLocation" id="eventLocation" maxlength="128" placeholder="Example: London, Abbey Road 12">
                       
                            <input type="submit" value="Create Event" name="submitBT" id="submitBT">
                        </form>
                        
                    </div>
                  
                </article>

             </section>
             <script>
    // JavaScript to update label text when file is selected
    const fileInput = document.getElementById('eventThumbnail');
    const fileLabel = document.getElementById('fileLabel');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Choose a file...';
        fileLabel.textContent = fileName;
    });
</script>
             <script src="../js/paneldisplay.js"></script>
        </main>
    <!--footer starts here-->
    <footer>
        <div class="footer-container">
            <div class="footer-brand-image-div">
                <img src="../images/brandimage.png" alt="Brand logo">
                <p>Copyright &COPY; 2024</p>
            </div>
            <div class="horizontal-divide"></div>
            <div class="footer-links-div">
                <h2>Useful Links</h2>
                <ul>
                    <li data-page="homepage"><a href="../../index.php">Home</a></li>
                    <li data-page="upcomingEvents"><a href="upcomingevent.php">Upcoming Events</a></li>
                    <li data-page="contact"><a href="contact.php">Contact Us</a></li>

                </ul>
            </div>
            <div class="horizontal-divide"></div>
            <div class="footer-address-div">
                <h2>Address</h2>
                <address>
                    <div>
                        <img src="../images/mappin.png" alt="Location pin">
                        <p>Szeged, Hungary, 6724 Sample Street 24.</p>
                    </div>
                    <div>
                        <img src="../images/emailicon.png" alt="Email icon">
                        <p>sample@sample.com</p>
                    </div>
                    <div>
                        <img src="../images/phoneicon.png" alt="Phone icon">
                        <p>+36 12 345 6789</p>
                    </div>
                </address>
            </div>
        </div>
        
        </footer>
        <!--footer ends here-->
    </body>
</html>


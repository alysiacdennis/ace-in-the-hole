<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="CHANGE-ME">


    <title>Registration</title>

    <link href="style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/esi3xon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




</head>


<?php include 'header.php';?>

<main>

           <section id="contact-page">
        
            <section class="row">
            
                <article class="col-12">
                
                
                
                </article>
            </section>
        
        
        </section>
    
    
    <section class="container">

        <section class="row">

            <article class="col-12">

                <h1>Registration</h1>

            </article>

            <section class="row">

                <article class="col-md-6">

                    <h2>Registration Fees</h2>
                    <ul>
                        <li>Long Course $250</li>
                        <li>Olympic $110</li>
                        <li>10K $50</li>
                        <li>Half Marathon $75</li>
                        <li>Sprint $90</li>
                        <li>Try-a-Tri $65</li>

                    </ul>

                    <h2>Cost Includes</h2>
                    <ul>
                        <li>Food and Beer</li>
                        <li>Access to the weekend's live entertainment and Fitness Expo</li>
                        <li>Commemorative Finisher Medal</li>
                        <li>Accurate Chip Timing for Competitive Races</li>
                        <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                        <li>Post-event Party and Entertainment</li>

                    </ul>

                    <h2>Packet Pick Up</h2>
                    <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
                    
                    <a href="faq.php"><button>Frequently Asked Questions</button></a>


                </article>


                <article class="col-md-6">

                    <h2>Register for an Event</h2>

                    <form id="#registrationForm" action="form.php" method="post">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name">
                        <label for="age">Your Age</label>
                        <input type="text" id="age" name="age">

                        <label for="roletype">Are you an athlete or a volunteer?</label>
                        <select id="roletype" name="roletype">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>

                        <label for="phone">Your Phone Number</label>
                        <input type="tel" name="phone" id="phone">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email">

                        <label for="emergencycontactname">Emergency Contact Name</label>
                        <input type="text" name="emergencycontactname" id="emergencycontactname">

                        <label for="emergencycontactphone">Emergency Contact Number</label>
                        <input type="tel" name="emergencycontactnumber" id="emergencycontactnumber">

                        <label for="gender">Gender Identification</label>
                        <select id="gender" name="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Non-binary/Other</option>
                    </select>

                        <label for="size">What is your T-shirt size?</label>
                    <select id="size" name="size">
                        <option value="x-small">X-Small</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="x-large">X-Large</option>
                    </select>

                        <label for="saturdayevents">Which Saturday Events are you Registering For?</label>
                        <br><br>
                        <label for="longcourse">Long Course Triathlon</label><br><input type="checkbox" id="longcourse" name="saturday[]" value="Long Course Triathlon">
                        <label for="olympic">Olympic Triathlon</label><br><input type="checkbox" id="olympic" name="saturday[]" value="Olympic Triathlon">
                        <label for="10">10K</label><br><input type="checkbox" id="10" name="saturday[]" value="10K">
                        <label for="half">Half Marathon</label><br><input type="checkbox" id="half" name="saturday[]" value="Half Marathon">
                       
                        <br><br>


                        <label for="sundayevents">Which Sunday Events are you Registering For?</label><br><br>
                        
                        <label for="sprint">Sprint Triathlon</label><br><input type="checkbox" id="sprint" name="sunday[]"
                        value="Sprint Triathlon"><br>
                        <label for="tryatri">Try-A-Tri</label><br><input type="checkbox" id="tryatri" name="sunday[]"
                        value="Try A Tri"><br>
                        <label for="splashndash">Splash n Dash</label><br><input type="checkbox" id="splashndash" name="sunday[]"
                        value="Splash n Dash"><br>
                        
                    

                        <label for="specialrequests">Are there any special accomodations that you will require?</label>
                        <textarea id="specialrequests" name="specialrequests"></textarea>

                        <button type="submit" id="form-submit">Submit</button>
                        <button type="reset">Reset</button>


                    </form>


                </article>
            </section>


        </section>



    </section>



    <section class="container">

        <section class="row">
            <article class="col-12">


            </article>

        </section>

    </section>



</main>

<?php include 'footer.php'; ?>


</html>

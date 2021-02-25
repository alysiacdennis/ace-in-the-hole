<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="CHANGE-ME">


    <title>Registration</title>

    <link href="style/main.less" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


<?php include 'header.php';?>

<main>
    <section class="container">
        <article class="item">
            <h1>Register for an Event</h1>

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
                <input type="text" id="size" name="size">

                <label for="saturdayevents">Which Saturday Events are you Registering For?</label>
                <br>
                <p class="description">Please choose from the following: Long Course Triathlon, Olympic Triathlon, 10K, Half Marathon.</p>
                <textarea id="saturdayevents" name="saturdayevents"></textarea>

               

                <label for="sundayevents">Which Sunday Events are you Registering For?</label><br>
                <p class="description">Please choose from the following: Sprint Triathlon, Try-A-Tri, Splash n Dash.</p>
                <textarea id="sundayevents" name="sundayevents"></textarea>
               

                <label for="specialrequests">Are there any special accomodations that you will require?</label>
                <textarea id="specialrequests" name="specialrequests"></textarea>

                <button type="submit" id="form-submit">Submit</button>
                <button type="reset">Reset</button>


            </form>

        </article>

    </section>



</main>

<?php include 'footer.php'; ?>


</html>

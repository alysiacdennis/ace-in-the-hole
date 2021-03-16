<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="CHANGE-ME">


    <title>Events</title>
    <link href="style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/esi3xon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>


<?php include 'header.php';?>

<main>
    <section id="event-header" class="container">
        
        <section class="row">

            <article class="col-md-6">

                <div class="container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="img/ace1.jpg" style="width:100%" alt="Swimmers Entering Water">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="img/ace2.jpg" style="width:100%" alt="Athletes Completing A Run">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="img/ace4.jpg" style="width:100%" alt="Swimmers Entering Ocean">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="img/ace7.jpg" style="width:100%" alt="Runner Finishing Race">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <img src="img/ace8.jpg" style="width:100%" alt="Runners on dirt road">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <img src="img/ace9.jpg" style="width:100%" alt="Athletes in Wheelchairs">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>


                </div>



                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        var captionText = document.getElementById("caption");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        captionText.innerHTML = dots[slideIndex - 1].alt;
                    }

                </script>


            </article>

            <article class="col-md-6">
                <h1>Event Schedule</h1>
                <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.</p>

                <section class="row">

                    <article class="col-6">

                        <h2>Saturday</h2>
                        <ul>
                            <li>Long Course Triathlon at 7:00 AM</li>
                            <li>Olympic Triathlon at 7:30 AM</li>
                            <li>10K at 7:15 AM</li>
                            <li>Half Marathon at 7:15 AM</li>

                        </ul>

                    </article>

                    <article class="col-6">

                        <h2>Sunday</h2>
                        <ul>
                            <li>Sprint Triathlon at 8:00 AM</li>
                            <li>Try-a-Tri at 8:20 AM</li>
                            <li>Splash n Dash at 12:00 PM</li>

                        </ul>

                    </article>

                  
                </section>
                
                  <center><a href="registration.php"><button>Register for an Event</button></a></center>


            </article>

        </section>



    </section>


    <section id="event-details">
        
        <section class="row">
            
            <section class="col-12">
            
                <h2>Event Details</h2>
            
            </section>
        
        
        </section>
    
        <section class="row">
        
            <section class="col-md-6">
            
                <p>Long Course SWIM - 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
                <p>Long Course BIKE - 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
                <p>Long Course RUN - 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
            <p>OLYMPIC SWIM - 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
            <p>OLYMPIC BIKE - 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>
                <p>OLYMPIC RUN - 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
            </section>
            
             <section class="col-md-6">
            
                <p>Sprint: Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
                 <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
                 <p>Half Marathon COURSE: Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>
                 <p>10k COURSE: The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
                 <p>Splash n' Dash: Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>
            
            
            </section>
        
        
        </section>
    
    
    </section>

    <section class="container">

        <section class="row">

            <article class="col-12">


                <h2>What to Bring</h2>
                
                <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>




            </article>

        </section>

        <section class="row">

            <article class="col-md-4">

                <h3>Swim</h3>
                <p>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>


            </article>

            <article class="col-md-4">


                <h3>Bike</h3>
                <p>A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>


            </article>

            <article class="col-md-4">

                <h3>Run</h3>

                <p>ou must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>


            </article>



        </section>

        <section class="row">

            <section class="col-12">

                <p>Watch the weather closely. The show goes on no matter what the weather is doing. Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>

                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Arial" data-textcolor="#444" data-mooncolor="#cc0000">PORTLAND WEATHER</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');

                </script>

            </section>


        </section>

    </section>




    <section id="social" class="container">
        <section class="row">

            <article class="col-md-6">
                
                <h2>Find Us on Facebook</h2>
                <center><iframe style="border: none; overflow: hidden;" allow="encrypted-media" xml="lang" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617&amp;tabs=timeline%2C%20events%2C%20messages&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="640" height="500" frameborder="0" scrolling="no"></iframe></center>               



            </article>
            
            <article class="col-md-6">
            
                <h2>Find Us on Twitter</h2>
                <a class="twitter-timeline" data-height="300" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            
            
            </article>


        </section>

    </section>

    <section class="container">

        <article class="item">

        </article>

    </section>



</main>

<?php include 'footer.php'; ?>


</html>

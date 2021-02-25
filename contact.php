<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        <meta name="description" content="CHANGE-ME">
        
                
        <title>Contact Us</title>
        <link href="style/main.less" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        
    </head>
    
        
    <?php include 'header.php';?>

    <main>    
        <section class="container">
            <article class="item">
                <h1>Contact Us</h1>
                
                <form id="#contactForm" action="mail-to.php" method="post">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email">
                    <label for="message">Question or Comment</label>
                    <textarea id="message" name="message"></textarea>
                    <label for="inquiry-type">Are you an athlete, volunteer, or interested party?</label>
                    <select id="inquiry-type" name="inquiry-type">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="interested-party">Interested Party</option>
                    </select>
                    <button type="submit" id="form-submit">Submit</button>
                    <button type="reset">Reset</button>
                
                
                </form>
                
            </article>
        
        </section>
        
        
        
    </main>
    
    <?php include 'footer.php'; ?>
  
    
</html>
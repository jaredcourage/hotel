
 <?php
  include('header.php'); 
  ?>

<style>
    /* Floating WhatsApp button style */
    #whatsapp-chat {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
      background-color: #25D366;
      border-radius: 50%;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      width: 60px;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    /* Hover effect to scale up the button */
    #whatsapp-chat:hover {
      transform: scale(1.1);
    }

    #whatsapp-chat img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
    }

    /* Optional text on hover */
    #whatsapp-chat-text {
      position: absolute;
      bottom: 80px;
      right: 20px;
      background-color: #25D366;
      color: white;
      font-size: 14px;
      padding: 5px 10px;
      border-radius: 5px;
      display: none;
    }

    /* Display text when the button is hovered */
    #whatsapp-chat:hover #whatsapp-chat-text {
      display: block;
    }
  </style>

<main>

  <!--- the image head-->
 
     <section id="hero">
  
      <img src="https://talentmingleagency.com/wp-content/uploads/2025/01/hotel-building.jpg">
         <div class="all">
         <div class="up-link">
             <a class="up-link" href="index.php">Home <i class="fa-solid fa-chevron-right"> </i></a>
             <a class="up-link" href="wellness.php">Wellness<i class="fa-solid fa-chevron-right"> </i></a>
             <a class="up-link" href="gym-swim.php">Gym-Swim</a>
         </div>
           
           
     
             <h1>About</h1>
        
         <p>
          The  Hotel commanding an unrivalled position and superb views since 1865.
        </p>
         
         </div>
         </section>  
        </main>
















<!--the below here for the check in -->

           <!-- the form booking checking details -->

    

 <main class="main-fr">

  <section class="check-slide-section">
  
    <div class="contianer-slide">
      <form action="/" class="slide">


      
       

       <div class="label-head">
        <label>ARRIVAL</label>
        <input type="date" for="date">
       </div>

      
  
     

       <div class="label-head">
        <label>DEPARTURE</label>
        <input type="date" for="date">
       </div>

      


      <div class="form-group">

       <div class="label-number">
        <label>ADULT</label>
        <input type="number" for="number" placeholder="0">
       </div>

      </div>


      <div class="form-group">

       <div class="label-number">
        <label>CHILDREN</label>
        <input type="number" for="number" placeholder="0">
       </div>

      </div>

       <div class="but-div">
         <button 
    onclick="location.href='https://regalhorizonshotel.com/Booking-account/login-hotel-rooms.php';" 
    type="button">
    Search
</button>
       </div>




      </form>
    </div>
   


  </section>
 </main>














<!--  new section review  -->


<!--  the ist  reviews block   -->


<section class="room-suits">
    <div class="suits-text-content">
      <p>Grande Dame of Regal Horizons</p>
      <h1>Steeped in history</h1>
      <p>
        Known as the ‘Grande Dame of Falmouth’, The Falmouth Hotel ﬁrst opened in 
        1865 as Isambard Kingdom Brunel expanded the Great Western Railway into 
        Cornwall. Its castle-like Victorian architecture, spacious interiors,
         fantastic seafront location, and award-winning
         food have ensured its place as one of Cornwall’s best-known hotels.
      </p>
      
    </div>

    <div class="suits-image-content">
      <img src="https://falmouthhotel.co.uk/content/uploads/2024/05/Falmouth-hotel-coastline.jpg"
      width="230px" height="auto" alt="Room Image">
    </div>
</section> 



<!--  second review section -->
<section class="room-suits">
    <div class="suits-text-content">
      <p>A Pivotal Role</p>
      <h1>Moments in history</h1>
      <p> 

        The Regal Horizons Hotel has played a pivotal part in the dramatic growth since the mid-19th century of the town after which it is named. In the process, it has “seen it all.”
        
        To re-phrase an old newspaper slogan, all human life is and has been here. Behind its imposing facade, The Falmouth Hotel has played host to royalty, military supremos, famous authors, film and pop stars, sporting icons plus a Prime Minister or two.
        
      </p>
      
    </div>

    <div class="suits-image-content">
      <img src="https://falmouthhotel.co.uk/content/uploads/2024/05/Falmouth-hotel-front-history.jpg"
      width="230px" height="auto" alt="Room Image">
    </div>


</section> 


<!--  third review section -->
<section class="room-suits">
    <div class="suits-text-content">
      <p>Stays to remember</p>
      <h1>Famous Faces</h1>
      <p>Royalty, singers, film stars, authors, political figures and sporting icons,
         The Regal Horizons Hotel has played host to a list of famous names. One of the most fascinating of all the hotel’s links with fame came about in its earlier years –
         with the first known picture letter by Beatrix Potter being written here.
      </p>
      
    </div>

    <div class="suits-image-content">
      <img src="https://www.nichiha.com/uploads/blog/commercial-building-exterior-design-ideas/Nichiha-Commercial-DesignerSeries-Illumination-Horizontal_3.jpg?t=1668183136"
      width="230px" height="auto" alt="Room Image">
    </div>


</section> 




<!--  fourth review section -->
<section class="room-suits">
    <div class="suits-text-content">
      <p>Present Day</p>
      <h1>Cornwall Hotel Collection</h1>
      <p>The Falmouth was bought by the Cornwall Hotel Collection in 2024 with
         plans to lovingly restore it to its former glory. With a narrative 
        steeped in history, our commitment is to honour our heritage.
         As you explore, expect to encounter an array of artifacts,
         vintage photographs, and intriguing details at every turn.

        Indulge in our sun-kissed restaurant, lush private gardens, and serene bar and terrace, complemented by 71 distinctive and fully furnished rooms. We are steadfast in advancing and enriching the legacy left by those before us.
      </p>
      
    </div>

    <div class="suits-image-content">
      <img src="https://www.cvent.com/sites/default/files/styles/column_content_width/public/image/2021-01/Picture4_0.jpg?itok=EI9-n5nj"
      width="230px" height="auto" alt="Room Image">
    </div>


</section> 


<!-- end of the review section -->




<!-- the ist feature list of the gym-swim page -->


<section class="splash">
  <div class="full-block">
    <img src="https://images.pexels.com/photos/4839732/pexels-photo-4839732.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Swimming Pool">
    <div class="content">
      <p class="splash-heading">MAKE A SPLASH</p>
      <h1>Swimming Pool</h1>
      <p class="splash-description">
        Indoor, heated, and 12 metres in length, head downstairs to our very own blue lagoon. If you don't fancy braving the Cornish waters just outside, our swimming pool is the perfect place to come for your dose of H2O therapy. Whether you're training for a race, having a post-workout cool down, or simply want to float around and hangout poolside with friends, our pool is open daily from 7am-9pm.
      </p>
      <p class="splash-description">
        Children are welcome from 9am-6pm. Adults-only swim sessions are from 7am-9am and 6pm-9pm.
      </p>
      <p class="splash-pricing">
        <strong>Non-resident prices:</strong><br>
        Two-hour adult swim pass £7 (age 18+)<br>
        Two-hour child pass £4.50 (age 4-17)<br>
        Two-hour parent and child swim pass £11.50<br>
        Children 3 and under go free.<br>
        <em>Please note: our pool does not have a lifeguard on duty, and adult supervision is mandatory at all times.</em>
      </p>
      <button>BOOK YOUR SWIM SESSION</button>
    </div>
  </div>
</section>






<!-- the second feature list of the gym-swim page -->


<section class="splash">
  <div class="full-block">
    <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="gym">
    <div class="content">
      <p class="splash-heading">SWEAT IT OUT</p>
      <h1>The Gym</h1>
      <p class="splash-description">
          Energise your body, strengthen muscles, and achieve your fitness goals. Our friendly and inclusive gym area is a space for all abilities, whether you're a seasoned pro or just at the start of your fitness journey. 
      </p>
      <p class="splash-description">
          Boost your endorphins and get your heart racing with our range of cardio machines and strength training equipment. The perfect start to your gym and swim in Horizons.
      </p>
      <p class="splash-pricing">
        <strong>Opening times:</strong><br>
        Gym from 7am-9pm<br>
        <strong>Non resident prices:</strong><br>
        Adult day pass £7 (18+)<br>
      
      </p>
      <button>BOOK YOUR GYM PASS</button>
    </div>
  </div>
</section>












<!--  the weeding table for laptop   -->


<!--  the weeding table for laptop   -->




      

  
  </div>
</section>

  
<!-- the end of weeding table -->  



 

<!-- the sides menu-->




<section class="slider-container">
  <h1>Food Menu</h1>
  <div class="slider-wrapper">
    <div class="slider">
      <img src="https://images.pexels.com/photos/845811/pexels-photo-845811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Pizza">
      <img src="https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Burger">
      <img src="https://images.pexels.com/photos/1437267/pexels-photo-1437267.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Pasta">
      <img src="https://images.pexels.com/photos/29616971/pexels-photo-29616971/free-photo-of-gourmet-breakfast-with-croissant-and-kiwi.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Croissant">
      <img src="https://images.pexels.com/photos/29569373/pexels-photo-29569373/free-photo-of-delicious-stack-of-blueberry-waffles-on-plate.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Waffles">
    </div>

    <!-- Navigation buttons (optional) -->
    <button class="nav-btn prev-btn">&#10094;</button>
    <button class="nav-btn next-btn">&#10095;</button>
  </div>
</section>





 




<!--the-FAQS-->



<div class="faq-container">
    <h1>Frequently Asked Questions</h1>
    <!-- FAQ Item 1 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>What room types are available at Regal Horizons Hotel?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>Best Regal Horizons Hotel features a range of room types, including Twin, Double, Triple, and Quad rooms, each equipped with modern amenities to ensure a comfortable stay.</p>
        </div>
    </div>

    <!-- FAQ Item 2 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>What facilities does Regal Horizons Hotel offer?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>Guests at Regal Horizons Hotel can enjoy facilities including WiFi, a peaceful bar, a restaurant, and bike rental services.</p>
        </div>
    </div>

    <!-- FAQ Item 3 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>Are you hiring Foreign Workers?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>Yes, we are hiring foreign workers for different positions. Send your application to info@regalhorizonshotel.com.</p>
        </div>
    </div>

    <!-- FAQ Item 4 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>Does Regal Horizons Hotel offer breakfast, lunch, and dinner?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>Yes, we serve a continental breakfast buffet, snacks, pizzas, and dinner at our restaurant with an à la carte menu.</p>
        </div>
    </div>

    <!-- FAQ Item 5 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>How close is Regal Horizons Hotel?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>We are near major venues like the World Fashion Centre and easily accessible to the airport.</p>
        </div>
    </div>

    <!-- FAQ Item 6 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>How do I change or cancel a reservation?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>You can change or cancel your reservation via our website (for flexible rates) or directly through the company you booked with.</p>
        </div>
    </div>

    <!-- FAQ Item 7 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>How can I change my reservation?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>If you made your reservation through our website, you can contact us or manage it directly online.</p>
        </div>
    </div>

    <!-- FAQ Item 8 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>What is the policy regarding children?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>Children up to 3 years old stay free. Maximum of two children per room with two paying adults. Children aged 4+ need their own bed.</p>
        </div>
    </div>

    <!-- FAQ Item 9 -->
    <div class="faq-item">
        <div class="faq-question">
            <h3>Can I make reservations for a group?</h3>
            <button class="toggle-btn">+</button>
        </div>
        <div class="faq-answer">
            <p>We apply our group conditions from 5 rooms. Please contact us directly for more options.</p>
        </div>
    </div>
</div>





  <!--  section for the form -->

<section class="sign-up-form">

    <div class="sign">
     <h1>Sign up to the Regal hotel </h1>  
     <p>hoice of stunning sea view rooms and suites with a welcoming,
        comfortable, and traditional feel. A space to completely relax  
        and make the most of our stay, with a range of family and dogfriendly rooms.Rest and unwind in a stay on us!
      </p> 
    </div>
    </section>













 

  




<!--  section for the form -->

<section class="sign-up-form">

    <div class="sign">
     <h1>Sign up to the Regal hotel </h1>  
     <p>hoice of stunning sea view rooms and suites with a welcoming,
        comfortable, and traditional feel. A space to completely relax  
        and make the most of our stay, with a range of family and dogfriendly rooms.Rest and unwind in a stay on us!
      </p> 
    </div>
    </section>



    <!-- for the div form -->



<section class="form-section">
    <div class="box-container">
      <form class="form-1" action="sendEmail.php" method="POST">
        <h1>Registration Form</h1>
        
        <div class="form-group">
          
          <label for="firstname">First Name <span>*</span></label>
          <input type="text" id="firstname" placeholder="Fullname" required>
        </div>
  
        <div class="form-group">
          <label for="lastname">Last Name <span>*</span></label>
          <input type="text" id="lastname" placeholder="Lastname" required>
        </div>
  
        <div class="form-group">
         
          <label for="city">City <span>*</span></label>
          <input type="text" id="city" placeholder="Enter your city" required>
        </div>
  
        <div class="form-group">
          <label for="postcode">Post Code <span>*</span></label>
          <input type="text" id="postcode" placeholder="Enter your post code" required>
        </div>
  
        <div class="form-group">
         
          <label for="email">Email <span>*</span></label>
          <input type="email" id="email" placeholder="Enter your email" required>
        </div>
  
        <div class="form-group">
          
          <label for="date">Date <span>*</span></label>
          <input type="date" id="date" required>
        </div>
  
        <div class="form-group">
          <label for="month">Month <span>*</span></label>
          <input type="month" id="month" required>
        </div>
  
        <div class="form-group">
          <label for="year">Year <span>*</span></label>
          <input type="number" id="year" placeholder="Year" required>
        </div>
  
        <div class="form-group">
          <label for="message">Message <span>*</span></label>
          <textarea id="message" placeholder="Write your message..." required></textarea>
        </div>
  
        <button type="submit" id="submit">Send Message</button>
      </form>
    </div>
  </section>





  <!-- end of the section -->


  


 
  













<?php
include('footer.php'); 
?>
</body>
</html>





<script>
    document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector('.slider');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  
  let currentIndex = 0;

  // Get all the images in the slider
  const images = slider.querySelectorAll('img');
  const totalImages = images.length;

  // Function to move to the next image
  function moveToNextImage() {
    if (currentIndex < totalImages - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Loop back to the first image
    }
    updateSliderPosition();
  }

  // Function to move to the previous image
  function moveToPrevImage() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalImages - 1; // Loop back to the last image
    }
    updateSliderPosition();
  }

  // Update the slider position based on the current index
  function updateSliderPosition() {
    const offset = -currentIndex * 100;
    slider.style.transform = `translateX(${offset}%)`;
  }

  // Event listeners for the navigation buttons
  nextBtn.addEventListener('click', moveToNextImage);
  prevBtn.addEventListener('click', moveToPrevImage);

  // Optional: Auto-slide every 3 seconds
  setInterval(moveToNextImage, 3000);
});



//



    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.toggle-btn');
        const faqAnswers = document.querySelectorAll('.faq-answer');

        toggleButtons.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                // Toggle the visibility of the answer
                const answer = faqAnswers[index];
                
                // Toggle the "+" and "-" sign in the button
                if (answer.style.display === "block") {
                    answer.style.display = "none";
                    btn.textContent = "+";
                    btn.classList.remove('rotate');
                } else {
                    answer.style.display = "block";
                    btn.textContent = "-";
                    btn.classList.add('rotate');
                }
            });
        });
    });
    





</script>

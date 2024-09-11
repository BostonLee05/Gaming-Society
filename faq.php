<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frequently Asked Questions</title>
    <link rel="stylesheet" href="faq.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <a href="event.php" class="back-home-button">
        <i class="fas fa-home"></i> BACK
    </a>

    <div class="wrapper">
      <p>The Begninning of a New Asset class</p>
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
            What is the Gaming Society all about?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            The Gaming Society is a community dedicated to bringing together gamers of all kinds to celebrate their passion for gaming, share experiences, and connect with like-minded individuals.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            Who can join the Gaming Society?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Only the student study at our school with an interest in gaming is welcome to join our society. Whether you're a casual player, competitive gamer, developer, or enthusiast, there's a place for you here.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            What activities does the Gaming Society organize?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            We organize a variety of activities, including gaming tournaments, LAN parties, gaming nights, workshops, discussions, and social events. Our goal is to provide diverse opportunities for gaming-related fun and interaction..
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            Is there a membership fee?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Yes, the membership fee is RM20 per person. This fee helps support the organization of events, venue rentals, equipment, and other operational costs.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            How can I get involved in organizing events or contributing to the society?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            We welcome members who are interested in volunteering, organizing events, or contributing ideas. Simply reach out to our team, and we'll be happy to discuss opportunities for involvement.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
            Do I need to pay for individual events as well?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            While some events may have additional fees to cover specific costs, your membership fee grants you access to many events at no extra charge.
          </p>
        </div>
      </div>
    </div>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>
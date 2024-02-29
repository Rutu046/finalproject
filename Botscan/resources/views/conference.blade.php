<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conference Proceedings</title>
  <link rel="stylesheet" href="css/conference.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body> 

  @extends('layout.header')
  @section('webcontent')

  <section>
    <body class="sectionabc">
      <section>
        <div class="exploreoffering">
          <h3><strong>Explore Our Offerings</strong></h3>

          <div class="container-card1" id="containerCard1">
            <!-- Conference Proceedings Card -->
            <div class="card1">
              <div class="card-body1">
                <h5>Conference Proceedings</h5>
                <p>BotScan offers conference proceedings in various fields. Explore our collection of
                  valuable research papers presented at conferences.</p>
              </div>
            </div>

            <!-- ISSN and Copyright Card -->
            <div class="card1">
              <div class="card-body1">
                <h5>ISSN and Copyright</h5>
                <p>International Standard Serial Number (ISSN) is assigned to text-based monographic
                  publications. Ensure copyright protection for your articles.</p>
              </div>
            </div>

            <!-- Buy Journals Online Card -->
            <div class="card1">
              <div class="card-body1">
                <h5>Buy Journals Online</h5>
                <p>Explore our online store for journal subscriptions. Choose from academic
                  subscriptions, individual subscriptions, or library subscriptions.</p>
              </div>
            </div>

            <!-- Journal Subscription Card -->
            <div class="card1">
              <div class="card-body1">
                <h5>Journal Subscription</h5>
                <p>Academic Subscription, Library Subscriptions, and more. Subscribe to BotScan and
                  stay updated with the latest research.</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="btn-group1">
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Journal Subscription</button>
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Academic Subscription</button>
                <button class="btn-primary1" onclick="showSubscriptionButtons()">Journal Subscriptions for the Library</button>
              </div>
      </section>

      <script src="js/conference.js"></script>.

      @endsection
    </body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="{{Asset("css/termsandcond.css")}}">
</head>

<body>

    @extends('layout.header')
    @section('webcontent')

    <div class="container">
        <h1>Terms and Conditions</h1>
        
        
            <p><strong>Paper Review Policy:</strong> All submitted process will be reviewed by Full Double Blind Review Process which may take maximum 02 weeks after paper submission. Once paper is accepted, It cannot be withdrawn at any condition. We are advising to all the authors, do not submit same article to multiple journals at same time. You may wait for review report.</p>
            <p><strong>Refund Policy:</strong> Wrongly deposit money / extra deposit money or in case if author is not satisfied with our service, will return back payment within 30 days, if respective candidate inform us.</p>
            <p><strong>Delivery Policy:</strong> Delivery will usually take place 7 to 10 working days after acceptance of an order, International Orders can take up to 30 days especially at busy periods e.g Festivals. If any products lost during shipment will be re-dispatched without any additional cost. We are not liable for any loss arising from delays in delivery or failure to deliver. We send products through Indian Postal Department's Register Parsel Service.</p>
            <p><strong>Paper Withdrawn/ Cancellation Policy:</strong> Authors note that paper cannot be withdrawn at any condition once it is accepted.</p>
            <p><strong>Copyright Policy:</strong>Authors must agree that once their submission is accepted, it cannot be withdrawn. Prior permission is required from the publisher to publish contributions elsewhere, unless significant changes are made. Authors affirm that their contribution is original, devoid of adverse interpretations, and does not infringe copyright or trademark rights. Permission is granted to use the article, with appropriate acknowledgment, but not for sale. Plagiarism is strictly prohibited, and all submissions undergo thorough checks. Plagiarism in published articles requires an apology letter to the original author and a one-year ban from publication. Disputes are resolved in Aurangabad, Maharashtra, India.<p>
            <p><strong>Jurisdiction:</strong> These Terms of Service are governed by and constructed in accordance with the laws of India, without reference to conflict of laws principles and you irrevocably and unconditionally submit to the non-exclusive jurisdiction of the courts of Aurangabad, India.</p>
        </div>
    </div>

    <script>
        document.getElementById("toggleBtn").addEventListener("click", function() {
            var termsDiv = document.getElementById("terms");
            termsDiv.classList.toggle("hidden");
            if (termsDiv.classList.contains("hidden")) {
                document.getElementById("toggleBtn").textContent = "Show Terms";
            } else {
                document.getElementById("toggleBtn").textContent = "Hide Terms";
            }
        });
    </script>
    @endsection
</body>
</html>
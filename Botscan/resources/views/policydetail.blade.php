<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Details</title>
    <link rel="stylesheet" href="{{Asset("css/policydetails.css")}}">
</head>

<body>

    @extends('layout.header')
    @section('webcontent')

    <section id="peer-review-process animated-content">
    <h2>Policy Details </h2>
    
    <h3>Peer Review Process</h3>
   <p>
    <strong>Receive Paper:</strong> Record the date and assign a unique code number.
    <br>
    <strong>Send for Review:</strong> Send the paper to referees within two weeks.
    <br>
    <strong>Review:</strong> Should be completed within two months. Follow up if delayed.
    <br>
    <strong>Editor Review:</strong> Review results, return paper with comments to author.
    <br>
    <strong>Author Revision:</strong> Request changes within two weeks. English review follows.
    <br>
    <strong>Final Corrections:</strong> Convert to PDF after Associate Editors' check.
  </p>
</section>

<section id="publication-frequency animated-content">
  <h3>Publication Frequency</h3>
  <p>BotScan is published monthly, covering all areas of science and technology.</p>
</section>

<section id="open-access-policy animated-content">
  <h3>Open Access Policy</h3>
  <p>
    This journal provides immediate open access to its content to support global knowledge exchange.
  </p>
</section>

<section id="benefits-features animated-content">
  <h3>Benefits & Features</h3>
  <h4>Benefits:</h4>
  <ul>
    <li>First response within 2 months.</li>
    <li>Full access to contents and abstracts online.</li>
    <li>Timely release of issues and PDF reprints via email.</li>
    <li>Open access publication model.</li>
    <li>Resource for researchers and students worldwide.</li>
    <li>Speedy online manuscript submission.</li>
  </ul>
  <h4>Features:</h4>
  <ul>
    <li>Substantive reviews, full papers, focus articles, and reports.</li>
    <li>Reports on original work in Science and Technology.</li>
    <li>Latest developments in various sciences.</li>
    <li>Articles peer-reviewed by international referees.</li>
  </ul>
</section>

<section id="publication-ethics animated-content">
  <h3>Publication Ethics</h3>
  <p>
    The editor is responsible for publication decisions based on intellectual content without bias.
  </p>
  <p>
    Fair play is maintained regardless of race, gender, sexual orientation, religion, etc.
  </p>
</section>

@endsection
</body>
</html>
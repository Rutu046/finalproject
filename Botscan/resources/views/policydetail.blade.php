<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy_Details</title>
    <link rel="stylesheet" href="{{Asset("css/policydetails.css")}}">
</head>

<body>

    @extends('layout.header')
    @section('webcontent')

    <section id="peer-review-process">
  <h2>Peer Review Process</h2>
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

<section id="publication-frequency">
  <h2>Publication Frequency</h2>
  <p>BotScan is published monthly, covering all areas of science and technology.</p>
</section>

<section id="open-access-policy">
  <h2>Open Access Policy</h2>
  <p>
    This journal provides immediate open access to its content to support global knowledge exchange.
  </p>
</section>

<section id="benefits-features">
  <h2>Benefits & Features</h2>
  <h3>Benefits:</h3>
  <ul>
    <li>First response within 2 months.</li>
    <li>Full access to contents and abstracts online.</li>
    <li>Timely release of issues and PDF reprints via email.</li>
    <li>Open access publication model.</li>
    <li>Resource for researchers and students worldwide.</li>
    <li>Speedy online manuscript submission.</li>
  </ul>
  <h3>Features:</h3>
  <ul>
    <li>Substantive reviews, full papers, focus articles, and reports.</li>
    <li>Reports on original work in Science and Technology.</li>
    <li>Latest developments in various sciences.</li>
    <li>Articles peer-reviewed by international referees.</li>
  </ul>
</section>

<section id="publication-ethics">
  <h2>Publication Ethics</h2>
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
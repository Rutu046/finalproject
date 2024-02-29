<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editorial guidelines</title>
  <link rel="stylesheet" href="{{Asset("css/ethicalguideline.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>

@extends('layout.header')
@section('webcontent')

<div class="container3">
  <div class="EP">
    <h1>Editorial Policies</h1>
</div>
    <div class="policy">
      <div class="policy-content animated-content">
        <h3>● BotScan expects the highest ethical standards</h3>
        <p>BotScan expects the highest ethical standards from their authors, reviewers, and editors when conducting research, submitting papers, and throughout the peer-review process.</p>
      </div>
      <img src="{{Asset("image/ethicalstd1.jpg")}}">
    </div>
    <div class="policy">
    <img src="{{Asset("image/peer1.jpg")}}">
      <div class="policy-content animated-content">
        <h3>● Peer Review</h3>
        <p> BotScan employs a double-blind review process, in which the author identities are concealed from the reviewers, and vice versa, throughout the review process.</p>
      </div>
      
    </div>
    <div class="policy">
      <div class="policy-content animated-content">
        <h3>● Retraction Policy</h3>
        <p>All Publications shall act in accordance with COPE Retraction Guidelines.</p>
      </div>
      <img src="{{Asset("image/retraction.jpg")}}">
    </div>
  </div>
  @endsection
</body>
</html>
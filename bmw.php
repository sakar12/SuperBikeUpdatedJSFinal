<!DOCTYPE html>
<html>
    <head>
    <title>BMW s1000RR</title>
    <?php include 'header.php';?>
    </head>
    <body>
    <br>
    <div class="wrapper">
     <div class="image-gallery">
    <aside class="thumbnails">
    <a href="#" class="selected thumbnail" data-big="/img/bmws1000rr.jpg">
        <div class="thumbnail-image" style="background-image: url(/img/bmws1000rr.jpg)"></div>
    </a>
    <a href="#" class="thumbnail" data-big="/img/bmws1000rr2.jpg">
      <div class="thumbnail-image" style="background-image: url(/img/bmws1000rr2.jpg)"></div>
    </a>
    <a href="#" class="thumbnail" data-big="/img/bmws1000rr3.jpg">
      <div class="thumbnail-image" style="background-image: url(/img/bmws1000rr3.jpg)"></div>
    </a>
  </aside>
 <main class="primary" style="background-image: url('/img/bmws1000rr.jpg');"></main>
</div>
</div>

<div class ="table1">
<table class="table" id="tablespecs">
  <thead>
    <tr>
      <th scope="col">Bike Specifications</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Price</td>
      <td>870,000฿</td>
    </tr>
    <tr>
      <td>Brand</td>
      <td>BMW</td>
    </tr>
    <tr>
      <td>Year</td>
      <td>2020</td>
    </tr>
    <tr>
      <td>Engine Type</td>
      <td>998cc Liquid Cooled</td>
    </tr>
    <tr>
      <td>Bore and Stroke</td>
      <td>76mm X 55mm</td>
    </tr>
    <tr>
      <td>Compression Ratio</td>
      <td>13:1</td>
    </tr>
    <tr>
      <td>Ignition</td>
      <td>Digital transistorized</td>
    </tr>
  </tbody>
</table>
</div>

<div class="container" id="cont3">
  <h1 id="producth1">BMW s1000RR</h1>
  <h2 id="producth1">870,000฿</h2>
  <p id="productp">Always pushing to the limit and in search of the ideal line, you've got 205 HP beneath you. Unbridled power pushes your RR to the max - with a maximum torque of 83 lb-ft at 11,000 rpm and a torque curve of at least 74 lb-ft over a range of 5,500 to 14,500 [rpm]. Ten years after the first generation of the RR first mesmerized the world of motorcycles, we're now entering the next level of performance. We have updated almost every component of the RR - from the front to the rear. The result: less weight and noticeably higher performance. Are you ready for the pole position and for victory? The RR awaits you. </p>
  <p id="productp">Anyone who looks at it immediately understands that this is a high performance motorcycle. Every part of the RR has been designed to get the most out of it. Take, for instance, the frame layout with its new suspension technology that makes the RR lighter and more precise. In addition, there is the ergonomically focused seating position, which is unrivaled thanks to the modified frame and fairing design. The standard LED headlights give the bike a dynamic and aggressive look. </p>
</div> 

<div class ="table2">
<table class="table" id="tablecalc">
  <thead>
    <tr>
      <th scope="col">Installment Calculator</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Price</td>
      <td id="priceofbike">870000฿</td>
    </tr>
    <tr>
      <td>Interest Rate:</td><div class="interest-rate-buttons">
      <td><button class="interest-rate-button interest-active" id="0">0%</button>&nbsp;&nbsp;<button class="interest-rate-button" id="4">4%</button>&nbsp;&nbsp;<button class="interest-rate-button" id="8">8%</button></td></div>
    </tr>
    <tr>
      <td>Installment Period</td><div class="month-buttons">
      <td><button class="month-button month-active" id="12">12</button>&nbsp;&nbsp;<button class="month-button" id="24">24</button>&nbsp;&nbsp;<button class="month-button" id="36">36</button>&nbsp;&nbsp;<button class="month-button" id="48">48</button>&nbsp;&nbsp;<button class="month-button" id="60">60</button>&nbsp;&nbsp;<button class="month-button" id="72">72</button></td></div>
    </tr>
    <tr>
      <td><button id="loanbtn" onclick="location.href='https://www.krungsrimarket.com/leasing/external_register?type=kaidee&title_name=&name=&lastname=&card_id&email=&mobile=&tel=&price=1250000&request_price=1125000&car_type_id=1&car_make_id=32&car_year=2011&utm_source=RodBaanAPI&utm_medium=Apply&utm_campaign=RodBaanAPI'">Loan with Krungsri</button></td>
      <td><button id="loanbtn" onclick="location.href='https://www.kasikornbank.com/en/personal/Loan/Car-Loan/Pages/hire-purchase.aspx'">Loan with KBank</button></td>
    </tr>
    
    <div class = "information">
    <tr>
      <td>Period in months</td>
      <td id="period-in-months"></td>
    </tr>
    <tr>
      <td>Interest per year</td>
      <td id="interest-per-year"></td>
    </tr>
    <tr>
      <td>Interest per month</td>
      <td id="interest-per-month"></td>
    </tr>
    <tr>
      <td>Total interest during mortgage</td>
      <td id="total-interest"></td>
    </tr>
    <tr>
      <td>Total payment</td>
      <td id="total-payment"></td>
    </tr>
    <tr>
      <td>Total payment per month</td>
      <td id="total-payment-per-month"></td>
    </tr>
    </div>

  </tbody>
</table>
</div>
<br>
<?php include 'footer.php';?>    
<script src="/scripts/script.js"></script> 
</body>
</html>
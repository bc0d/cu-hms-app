<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>attendance calendar</title>
    <link href="{{ asset('users/assets/css/calendar.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="{{ asset('users/assets/js/calendar.js') }}" defer></script>
  </head>
  <body>
    <div class="wrapper">
        <h2 class="center-text">Attendance Tracker</h2>
        
        <ul class="square-bullet text-container">
            <li class="messin green">mess in</li>
            <li class="messout red">mess out</li>
        </ul><hr>
    
      <header>
        
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar"><hr>
        <ul class="weeks">
          <li>S</li>
          <li>M</li>
          <li>T</li>
          <li>W</li>
          <li>T</li>
          <li>F</li>
          <li>S</li>
        </ul><hr>
        <ul class="days"></ul>
      </div>
    </div>
    
  </body>
</html>
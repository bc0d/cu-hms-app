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

    <script src="{{ asset('users/assets/js/attendance.js') }}" defer></script>
    <style>
  /*attendance*/
/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  display: flex;
  align-items: center;
  padding: 0 10px;
  justify-content: center;
  min-height: 100vh;
  background: #420000;;
}
.wrapper{
  width: 450px;
  background: #fff;
  border-radius: 10px;
  border: 3px solid #ffffff;
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}
.wrapper header{
  display: flex;
  align-items: center;
 /* padding: 25px 30px 10px;*/
  padding: 10px 30px 2px;
  justify-content: space-between;
}
header .icons{
  display: flex;
}
header .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
header .icons span:hover{
  background: #f2f2f2;
}
header .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 20px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #333;
  width: calc(100% / 7);
  font-size: 1.07rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 30px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
/*start*/
.days li.messin::before{
  background: #046508;
}.days li.messin::before{
  background: #d16265;
}
/*end*/

.days li.active::before{
  background: #97181d
  
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}
/*title*/
.center-text{
  text-align: center;
  background-color: #420000;
  color: #f2f2f2;
  border-radius: 10px;
}

.messout{
  text-align:right;
  color: #97181d;
  display: flex;
 
}
.messin{
  text-align: left;
  color: #006f1e;
  
}
.text-container{
  display: flex;
  background-color: #ffffff;
  justify-content: space-between;
  
    list-style: none;
}



.text-container li::before {
    content: "\2022"; /* Unicode for bullet character */
    
    
    display: inline-block;
    width: 1em; /* Adjust size of the bullet */
    margin-right: 0.5em; /* Adjust spacing between bullet and text */
    border-radius: 0%; /* Make it round */
    font-size: 20px; /* Adjust size of the bullet in pixels */
    line-height: 1; /* Ensure vertical alignment */
}
.red::before {

  color: #97181d;/* Color of the bullet */
}

.green::before {
  color: #006f1e; /* Color of the bullet */
}
  



</style>
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


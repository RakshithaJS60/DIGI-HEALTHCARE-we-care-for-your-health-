<html>
<head>
<meta charset="UTF-8">
<title>DIGI HEALTHCARE</title>
<style>
     

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}
 a {
  text-decoration: none;
}

nav {
  display: table;
  position: relative;
  table-layout: fixed;
  width: 100%;
}
nav input {
  display: none;
}
nav .slide {
  padding: 10px 10px;
  font-size: 1em;
  display: block;
  color: #393939;
  border-top: 4px solid transparent;
  position: relative;
  -moz-transition-property: border-width, color;
  -o-transition-property: border-width, color;
  -webkit-transition-property: border-width, color;
  transition-property: border-width, color;
  -moz-transition-duration: 0.1s, 0.2s;
  -o-transition-duration: 0.1s, 0.2s;
  -webkit-transition-duration: 0.1s, 0.2s;
  transition-duration: 0.1s, 0.2s;
  -moz-transition-timing-function: ease-in;:
  -o-transition-timing-function: ease-in;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
  -moz-transition-delay: 0.2s, 0s;
  -o-transition-delay: 0.2s, 0s;
  -webkit-transition-delay: 0.2s, 0s;
  transition-delay: 0.2s, 0s;
}
nav .slide .element {
  font-size: 1.25em;
  font-weight: 600;
  font-style: normal;
  display: block;
  line-height: 1;
position:relative !important;
top:2px;
}
nav .slide .name {
  font-size: 0.6875em;
  position: relative;
}
nav input:checked ~ .child-menu {
  max-height: 100px;
  -moz-transition-property: max-height;
  -o-transition-property: max-height;
  -webkit-transition-property: max-height;
  transition-property: max-height;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -moz-transition-timing-function: ease-in;
  -o-transition-timing-function: ease-in;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}
nav input:checked ~ .has-child .name:after {
  -moz-transform: rotateX(180deg);
  -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
}

@media only screen and (min-width: 48.0625em) {
  nav {
    display: block;
    table-layout: auto;
  }
  nav div.nav-container {
    display: block;
  }
  nav div.nav-container > div {
    display: block;
    margin: 5px 0;
  }
  nav div.nav-container > div:hover .slide {
    border-left-width: 55px;
    -moz-transition-delay: 0;
    -o-transition-delay: 0;
    -webkit-transition-delay: 0;
    transition-delay: 0;
  }
  nav .slide {
    display: block;
    width: auto;
    border-left: solid 4px #393939;
    border-top: none;
  }
  nav .slide .element {
    line-height: 1;
  }
  nav input:checked ~ div.child-menu {
    max-height: 120px;
  }
  nav input:checked ~ .slide {
    border-width: 55px;
  }
}
.masthead {
  font-family: "Open Sans", sans-serif;
}
.masthead .brand-container {
  padding: 10px;
  background-color: #393939;
}
.masthead .brand-container a {
  color: white;
  display: inline-block;
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  -webkit-transition-duration: 0.2s;
  transition-duration: 0.2s;
  -moz-transition-timing-function: ease-in;
  -o-transition-timing-function: ease-in;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}
.masthead .brand-container a:hover {
  color: #8cc63f;
}
.masthead .brand-initials {
  font-size: 3.0625em;
  font-weight: 700;
  font-style: normal;
  display: block;
  line-height: 52px;
}
.masthead .brand-name {
  font-size: 0.8125em;
  text-indent: 3px;
  display: block;
}

@media only screen and (min-width: 48.0625em) {
  .masthead {
    position: absolute;
    top: 0;
    left: 0;
    width: 275px;
  }
  .masthead .brand-container {
    padding: 20px 0 50px 20px;
  }
  .masthead .brand-container a {
    display: block;
  }
}


    </style>

  <script>
  window.console = window.console || function(t) {};
</script>
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div id="slider">
<figure>
<img src="img2.jpg" alt="">
</figure>
</div>
  <header class="masthead">
  <div class="brand-container">
    <a href="#">
      <span class="brand-initials">Digi HealthCare</span>
      <span class="brand-name">We Care For Your Health</span>
    </a>
  </div>
  <nav>
    <div class="nav-container">
      <div>
        <a class="slide" href="adminlogin.php">
          <span class="element">Admin login</span>
        </a>
      </div>
	  <div>
        <a class="slide" href="doctorlogin.php">
          <span class="element">Doctor login</span>
        </a>
      </div>
	  <div>
        <a class="slide" href="patientlogin.php">
          <span class="element">Login</span>
        </a>
      </div>
      
      <div>
        <a class="slide" href="patient.php">
          <span class="element">Register</span>
        </a>
      </div>
      
      
      <div>
        <a class="slide" href="patientappointment.php">
          <span class="element">Appointment</span>
        </a>
      </div>
      <div>
        
  </div></nav>

</header></body></html>
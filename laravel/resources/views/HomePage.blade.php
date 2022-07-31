<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color:antiquewhite		;
    }

    a {
      text-decoration: none;
      display: inline-block;
      padding: 14px 19px;
    }

    a:hover {
      background-color: #ddd;
      color: black;
    }

    .previous {
      background-color: black;
      color: white;
    }

    .next {
      background-color: #04AA6D;
      color: white;
    }

    .round {
      border-radius: 50%;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: white;;
    }

    h1, h2  {
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li button, .dropbtn {
      display: inline-block;
      color: black;
      background-color: sienna;
      text-align: center;
      padding: 20px 100px;
      text-decoration: none;
    }

    li a:hover, .dropdown:hover .dropbtn {
      background-color: slategrey;
    }

    li.dropdown {
      display: inline-block; 
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

  </style>
  </head>
  <body>
    <ul>
      <li class="dropdown" style="float:right; position:absolute; left:600px; top:6px;">
        <button onclick="myFunction()" class="dropbtn" style="font-weight: bold;">Select category</button>
          <div class="dropdown-content">
            <a href="1">1</a>
            <a href="2">2</a>
            <a href="3">3</a>
          </div>
      </li>
    </ul>
    
    <br><br><br><br><br><br><br><br><br>
    <h1> Home page </h1>
    <h2> <br><strong> Select category </strong></h2>

    <h3> all images from the database:</h3>
    <iframe name="frame" src="/image/images" width="1100" height="300"></iframe>

    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

// Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
              }
            }
        }
      }
    </script>
  </body>
</html>
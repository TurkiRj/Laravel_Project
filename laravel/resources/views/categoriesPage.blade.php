<!DOCTYPE html>
  <head>
    <meta charset= "UTF-8">
    <title>Category <?php echo$category_count; ?></title>
    
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
      background-color: antiquewhite;;
    }

    h1  {
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
        <li class="dropdown" style="float:right; position:absolute; left:600px; top:6px; " >
            <button onclick="myFunction()" class="dropbtn" style="font-weight: bold;">Select category</button>
            <div class="dropdown-content">
              <a href="<?php echo $category_count.'.1';?>"><?php echo$category_count.'.1';?></a>
              <a href="<?php echo $category_count.'.2';?>"><?php echo$category_count.'.2';?></a>
              <a href="<?php echo $category_count.'.3';?>"><?php echo$category_count.'.3';?></a>
            </div>
        </li>
          <a href='<?php 
                if(strlen($category_count)==1){
                  echo '/';
                }else{ 
                  echo substr_replace($category_count ,'', -2);
                }
                  ?>' class="previous round">&#8249;
          </a>
      </ul>
    
                      <!--<button onclick="window.location.href='-->
              
              <br><br><br><br><br><br>
      <h1>Category : <?php echo $category_count;?></h1>
        <!--<iframe name="frame" src="/image/images" width="600" height="300"></iframe> -->

      <!-- this form to store the image and category id in the database -->
      <form action="/image/add" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <label>Select Image File:</label><br>
        <input type="hidden" name="category_id" value="<?php echo$category_count;?>"><br>
        <input type="file" name="image"><br><br>
        <input type="submit" name="submit" value="submit">
      </form>
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
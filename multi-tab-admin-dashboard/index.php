<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="asset/dashboardstyle.css" rel="stylesheet">
    <!--Bootstrap Icons here-->
    <link href="asset/bootstrap-icons.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--#SINGLE PAGE MULTIPLE TAB ADMIN DASHBOARD WITH BLACK AND WHITE MODE-->
  </head>
  <body>
    <nav class="sidebar close neu">
      <header>
        <div class="image-text text-color">
          <span class="image ">
            <i class='bi bi-person-circle logo-text' class="passport" title="Codeshua.com" style="font-size:50px;margin-left:-0.2em;"></i>
          </span>
          <div class="text logo-text">
            <span class="name">Codeshua.com</span>
            <span class="role">Web Coding Tricks</span>
          </div>
        </div>
        <i class='bi bi-arrow-right-circle toggle min-max'></i>
      </header>

      <div class="menu-bar" style="margin-top:-1.5em">
        <div class="menu">
          <ul class="menu-links" id="ULa">
            <li class="nav_link" id="defaultOpen" onclick="OpenTab(event, 'tab1')">
              <a href="#">
                <i class='bi bi-speedometer2'></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav_link" onclick="OpenTab(event, 'tab7')">
              <a href="#">
                <i class='bi bi-upload'></i>
                <span class="text nav-text">Uploads</span>
              </a>
            </li>

            <li class="nav_link" onclick="OpenTab(event, 'tab2')">
              <a href="#">
                <i class='bi bi-graph-up '></i>
                <span class="text nav-text">Revenue</span>
              </a>
            </li>

            <li class="nav_link" onclick="OpenTab(event, 'tab3')">
              <a href="#">
                <i class='bi bi-bell'></i>
                <span class="text nav-text">Notification</span>
              </a>
            </li>

            <li class="nav_link" onclick="OpenTab(event, 'tab4')">
              <a href="#">
                <i class='bi bi-chat-left-text'></i>
                <span class="text nav-text">Comments</span>
              </a>
            </li>

            <li class="nav_link" onclick="OpenTab(event, 'tab5')">
              <a href="#">
                <i class='bi bi-rss'></i>
                <span class="text nav-text">Feeds</span>
              </a>
            </li>
            <li class="nav_link" onclick="OpenTab(event, 'tab6')">
              <a href="#">
                <i class='bi bi-gear'></i>
                <span class="text nav-text">Setting</span>
              </a>
            </li>

          </ul>
        </div>
        <div class="bottom-content" style="margin-top:-1em">
          <li class="">
            <a href="#" onclick="document.getElementById('logoutModal').style.display='block'">
              <i class='bi bi-box-arrow-left'></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
          <li class="mode">
            <div class="sun-moon">
              <i class='bi bi-moon  moon'></i>
              <i class='bi bi-sun  sun'></i>
            </div>
            <span class="mode-text text-color">Dark mode</span>
            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>

        </div>
      </div>
    </nav>
    <!--Horizontal Nav-->
    <div class="hori-nav bst-top " style="z-index:3;">
      <div style="float:right;">
        <label class="search neu">
          <i class='bi bi-search icon-small'></i>
          <input type="search" placeholder="Search..." class="text-color" />
        </label>
        <i class="bi bi-bell-fill neu bst-circle bst-padding-small"></i>
        <i class="bi bi-globe neu bst-circle bst-padding-small"></i><i>&nbsp;</i>
      </div>
    </div>
    <section class="home" id="HM" st>
      <div class="tabcontent" id="tab1">
        <h3 class="text"> Dashboard</h3>
        <div class="bst-row-padding bst-margin-bottom">
          <div class="bst-quarter">
            <div class="bst-container neu  radius-small bst-padding-16 orangered-border-top">
              <div class="bst-left"><i class="bi bi-credit-card-fill icon-lg bst-text-orangered"></i></div>
              <div class="bst-right">
                <h3>52</h3>
              </div>
              <div class="bst-clear"></div>
              <h4>Payment Request</h4>
            </div>
          </div>
          <div class="bst-quarter">
            <div class="bst-container neu radius-small bst-padding-16 blue-border-top">
              <div class="bst-left"><i class="bi bi-grid-1x2-fill icon-lg bst-text-blue"></i></div>
              <div class="bst-right">
                <h3>99</h3>
              </div>
              <div class="bst-clear"></div>
              <h4>New Task</h4>
            </div>
          </div>
          <div class="bst-quarter">
            <div class="bst-container neu radius-small bst-padding-16 indigo-border-top">
              <div class="bst-left"><i class="bi bi-chat-left-text-fill icon-lg bst-text-indigo"></i></div>
              <div class="bst-right">
                <h3>23</h3>
              </div>
              <div class="bst-clear"></div>
              <h4>New Messages</h4>
            </div>
          </div>
          <div class="bst-quarter">
            <div class="bst-container neu radius-small bst-padding-16 green-border-top">
              <div class="bst-left"><i class="bi bi-people-fill icon-lg bst-text-green"></i></div>
              <div class="bst-right">
                <h3>50</h3>
              </div>
              <div class="bst-clear"></div>
              <h4>New Members</h4>
            </div>
          </div>
        </div>
        <div class="bst-container">
          <h3>Today Analysis</h3>
          <p>New Visitors</p>
          <div class="neu radius-small">
            <div class="radius-small bst-container bst-center bst-padding bst-green trans-l" style="width:75%">+75%</div>
          </div>

          <p>New Users</p>
          <div class="neu radius-small">
            <div class="radius-small bst-container bst-center bst-padding bst-blue trans" style="width:40%">40%</div>
          </div>

          <p>Bounce Rate</p>
          <div class="neu radius-small">
            <div class="radius-small bst-container bst-center bst-padding bst-red trans" style="width:55%">55%</div>
          </div>
        </div>

        <br>
      </div>
      <div class="tabcontent" id="tab2">
        <h3 class="text"> Revenue </h3>
        <div class="bst-container">
          <div class="row">
            <div class="col-65 neu" id="barchart_values"></div>
            <div class="col-35 neu" id="piechart"></div>
          </div>
        </div>
      </div>
      <div class="tabcontent" id="tab3">
        <h3 class="text"> Profile </h3>
      </div>
      <div class="tabcontent" id="tab4">
        <h3 class="text"> Comments </h3>
        <div class="bst-container">
          <div class="bst-row neu bst-padding-small bst-margin-bottom">
            <div class="bst-col m2 text-center ">
              <img class="bst-circle " src="images/avatar.png" style="width:96px;height:96px">
            </div>
            <div class="bst-col m10 bst-container">
              <h4>Kenneth <span class="bst-opacity bst-medium">Jun 29, 202, 9:12 PM</span></h4>
              <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            </div>
          </div>

          <div class="bst-row neu bst-padding-small bst-margin-bottom">
            <div class="bst-col m2 text-center">
              <img class="bst-circle" src="images/avatar.png" style="width:96px;height:96px">
            </div>
            <div class="bst-col m10 bst-container">
              <h4>Bo <span class="bst-opacity bst-medium">May 28, 2022, 10:15 PM</span></h4>
              <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
            </div>
          </div>
        </div>
      </div>
      <div class="tabcontent" id="tab5">
        <h3 class="text">Feeds </h3>
        <div class="bst-container">
          <table class="bst-table bst-striped neu">
            <tr>
              <td><i class="bi bi-eye bst-text-blue bst-large"></i></td>
              <td>New record, over 90 views.</td>
              <td><i>10 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-bell bst-text-red bst-large"></i></td>
              <td>Database error.</td>
              <td><i>15 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-people-fill bst-text-yellow bst-large"></i></td>
              <td>New record, over 40 users.</td>
              <td><i>17 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-chat-left-text-fill bst-text-blue bst-large"></i></td>
              <td>New comments.</td>
              <td><i>25 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-bookmark bst-text-blue bst-large"></i></td>
              <td>Check transactions.</td>
              <td><i>28 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-laptop bst-text-red bst-large"></i></td>
              <td>CPU overload.</td>
              <td><i>35 mins</i></td>
            </tr>
            <tr>
              <td><i class="bi bi-share-fill bst-text-green bst-large"></i></td>
              <td>New shares.</td>
              <td><i>39 mins</i></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="tabcontent" id="tab6">
        <h3 class="text"> Setting </h3>
      </div>
      <div class="tabcontent" id="tab7">
        <h3 class="text"> Upload </h3>
        <div>
          <!--Upload form-->
        </div>
      </div>
    </section>
    <div id="logoutModal">
      <form class="logoutmodal-content animate radius-small bst-padding" action="">
        <br>
        <div class="bst-container ">
          <center> Are you Sure to Logout ?</center>
        </div>
        <br>
        <div class="bst-container bst-center modala">
          <div id="notice_alert"></div>
          <div class="bst-container bst-left">
            <button onclick="getConfirmation()" style="width:100%;border:none;" type="submit" class="bst-transparent bst-text-red">Yes</button>
          </div>
          <div class="bst-container  bst-right" style="width:48%;">
            <button style="width:100%;border:none;" type="button" onclick="document.getElementById('logoutModal').style.display='none'" class="bst-text-green bst-transparent">Stay</button>
          </div>
        </div>
      </form>
    </div>
    <script>
      function getConfirmation() {
  setTimeout(function() {
    window.location = "./#";
  });
}
const body = document.querySelector('body'),
  sidebar = body.querySelector('nav'),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".default-dashboard"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

if (sidebar.classList.contains("close")) {
  modeText.innerText = "";
}

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  if (sidebar.classList.contains("close")) {
    modeText.innerText = "";
  }
})

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (sidebar.classList.contains("close")) {
    modeText.innerText = "";
  }

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
    if (sidebar.classList.contains("close")) {
      modeText.innerText = "";
    }
  } else {
    modeText.innerText = "Dark mode";
    if (sidebar.classList.contains("close")) {
      modeText.innerText = "";
    }

  }
});

// Get the container element
var btnContainer = document.getElementById("ULa");
// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav_link");
// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    // Add the active class to the current/clicked button
    this.className += " active";
  });
}


function OpenTab(evt, tabnumber) {
  var i, tabcontent, nav_link;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  nav_link = document.getElementsByClassName("nav_link");
  for (i = 0; i < nav_link.length; i++) {
    nav_link[i].className = nav_link[i].className.replace(" active", "");
  }
  document.getElementById(tabnumber).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
<script>
// Load google charts Pie
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Days', 'Percentage Income Per Day'],
  ['Mon', 8],
  ['Tue', 3],
  ['Wed', 1],
  ['Thur',2],
  ['Fri', 4],
  ['Sat', 6],
  ['Sun', 9]
]);
// Optional; add a title and set the width and height of the chart
var options = {'title':'Weekly  Revenue Generated', 'width':400, 'height':400,'backgroundColor':"#e7e7e7",};
// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart'));
chart.draw(data, options);
}
</script>
<!--GOOGLE CHART  bar-->
<script type="text/javascript">
google.charts.load("current", {
  packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["General Statistic", "Increase", {
      role: "style"
    }],
    ["New Visitors", 55, "#4CAF50"],
    ["Unique Visitors ", 20, "#2196F3"],
    ["Retention", 10, " #3f51b5"],
    ["Bounce Rate", 15, "color:red"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
    {
      calc: "stringify",
      sourceColumn: 1,
      type: "string",
      role: "annotation"
    },
    2
  ]);

  var options = {
    title: "Growth Statistic",
    width: 800,
    height: 400,
    backgroundColor: "#e7e7e7",
    bar: {
      groupWidth: "98%"
    },
    legend: {
      position: "none"
    },
  };
  var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
  chart.draw(view, options);
}
</script>
</body>
</html>

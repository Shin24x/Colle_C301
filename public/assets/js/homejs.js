const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");

sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});

sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

// Function to close the sidebar
function closeSidebar() {
  sidebar.classList.add("close");
}

// Event listener for window resize
window.onresize = function () {
  // Check window width
  if (window.innerWidth < 1000) {
    closeSidebar(); // Close sidebar if the window is smaller than 768 pixels
  } else {
    sidebar.classList.remove("close");
  }
};

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});

sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    darkLight.classList.replace("bx-sun", "bx-moon");
  } else {
    darkLight.classList.replace("bx-moon", "bx-sun");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 1000) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}
//    JavaScript for pop up 

function menujavapop() {
  document.getElementById("info-menujavapopup").style.display = "block";
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-menupypopup").style.display = "none";
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function menuhtmlpop() {
  document.getElementById("info-menuhtmlpopup").style.display = "block";
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-menupypopup").style.display = "none";
  document.getElementById("info-menusqlpopup" ).style.display = "none";

}

function menujspop() {
  document.getElementById("info-menujspopup").style.display = "block";
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-menupypopup").style.display = "none";
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function menuphppop() {
  document.getElementById("info-menuphppopup").style.display = "block";
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-menupypopup").style.display = "none";
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function menupypop() {
  document.getElementById("info-menupypopup").style.display = "block";
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function menusqlpop() {
  document.getElementById("info-menusqlpopup").style.display = "block";
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-menupypopup").style.display = "none";
}


function javapop() {
  window.location.href = "library";
}
function htmlpop() {
  window.location.href = "library";
}
function jspop() {
  window.location.href = "library";
}
function phppop() {
  window.location.href = "library";
}
function pypop() {
  window.location.href = "library";
}
function sqlpop() {
  window.location.href = "library";
}

function closePopupjava() {
  document.getElementById("info-menujavapopup" ).style.display = "none";
}

function closePopuphtml() {
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
}

function closePopupjs() {
  document.getElementById("info-menujspopup" ).style.display = "none";
}

function closePopupphp() {
  document.getElementById("info-menuphppopup").style.display = "none";
}

function closePopuppy() {
  document.getElementById("info-menupypopup").style.display = "none";
}

function closePopupsql() {
  document.getElementById("info-menusqlpopup" ).style.display = "none";
}

function exitbtnjava() {
  document.getElementById("info-javapop" ).style.display = "none";
}

function exitbtnhtml() {
  document.getElementById("info-htmlpop" ).style.display = "none";
}
function exitbtnjs() {
  document.getElementById("info-jspop" ).style.display = "none";
}
function exitbtnpy() {
  document.getElementById("info-pypop" ).style.display = "none";
}
function exitbtnphp() {
  document.getElementById("info-phppop" ).style.display = "none";
}
function exitbtnsql() {
  document.getElementById("info-sqlpop" ).style.display = "none";
}
function javaeasybtn() {
  window.location.href = "javaeasy";
}
function javamediumbtn() {
  window.location.href = "javamedium";
}
function javahardbtn() {
  window.location.href = "javahard";
}

function htmleasybtn() {
  window.location.href = "htmleasy";
}
function htmlmediumbtn() {
  window.location.href = "htmlmedium";
}
function htmlhardbtn() {
  window.location.href = "htmlhard";
}

function jseasybtn() {
  window.location.href = "jseasy";
}
function jsmediumbtn() {
  window.location.href = "jsmedium";
}
function jshardbtn() {
  window.location.href = "jshard";
}

function sqleasybtn() {
  window.location.href = "sqleasy";
}
function sqlmediumbtn() {
  window.location.href = "sqlmedium";
}
function sqlhardbtn() {
  window.location.href = "sqlhard";
}

function phpeasybtn() {
  window.location.href = "phpeasy";
}
function phpmediumbtn() {
  window.location.href = "phpmedium";
}
function phphardbtn() {
  window.location.href = "phphard";
}

function pyeasybtn() {
  window.location.href = "pyeasy";
}
function pymediumbtn() {
  window.location.href = "pymedium";
}
function pyhardbtn() {
  window.location.href = "pyhard";
}
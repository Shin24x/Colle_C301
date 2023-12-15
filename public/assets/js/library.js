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
}

function menuhtmlpop() {
  document.getElementById("info-menuhtmlpopup").style.display = "block";
}

function menujspop() {
  document.getElementById("info-menujspopup").style.display = "block";
}

function menuphppop() {
  document.getElementById("info-menuphppopup").style.display = "block";
}

function menupypop() {
  document.getElementById("info-menupypopup").style.display = "block";
}

function menusqlpop() {
  document.getElementById("info-menusqlpopup").style.display = "block";
}




function javapop() {
  document.getElementById("info-javapop").style.display = "block";
  document.getElementById("info-javaMpop" ).style.display = "none";
}

function htmlpop() {
  document.getElementById("info-htmlpop").style.display = "block";
  document.getElementById("info-HTMLMpop" ).style.display = "none";

}
function jspop() {
  document.getElementById("info-jspop").style.display = "block";
  document.getElementById("info-javascriptMpop" ).style.display = "none";

}
function phppop() {
  document.getElementById("info-phppop").style.display = "block";
  document.getElementById("info-phpMpop" ).style.display = "none";

}
function pypop() {
  document.getElementById("info-pypop").style.display = "block";
  document.getElementById("info-pyMpop" ).style.display = "none";

}
function sqlpop() {
  document.getElementById("info-sqlpop").style.display = "block";
  document.getElementById("info-sqlMpop" ).style.display = "none";

}


function closePopupjava() {
  document.getElementById("info-menujavapopup" ).style.display = "none";
  document.getElementById("info-javapop" ).style.display = "none";
  document.getElementById("info-javaMpop" ).style.display = "none";

  
}
function closePopuphtml() {
  document.getElementById("info-menuhtmlpopup" ).style.display = "none";
  document.getElementById("info-htmlpop" ).style.display = "none";
  document.getElementById("info-HTMLMpop" ).style.display = "none";

}

function closePopupjs() {
  document.getElementById("info-menujspopup" ).style.display = "none";
  document.getElementById("info-jspop" ).style.display = "none";
  document.getElementById("info-javascriptMpop" ).style.display = "none";


}

function closePopupphp() {
  document.getElementById("info-menuphppopup").style.display = "none";
  document.getElementById("info-phppop" ).style.display = "none";
  document.getElementById("info-phpMpop" ).style.display = "none";


}

function closePopuppy() {
  document.getElementById("info-menupypopup").style.display = "none";
  document.getElementById("info-pypop" ).style.display = "none";
  document.getElementById("info-pyMpop" ).style.display = "none";


}

function closePopupsql() {
  document.getElementById("info-menusqlpopup" ).style.display = "none";
  document.getElementById("info-sqlpop" ).style.display = "none";
  document.getElementById("info-sqlMpop" ).style.display = "none";


}

function closePopupcsharp() {
  document.getElementById("info-menucsharppopup" ).style.display = "none";
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

function exitbtncplus() {
  document.getElementById("info-cpluspop" ).style.display = "none";
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
function exitbtncsharp() {
  document.getElementById("info-csharppop" ).style.display = "none";
}
function easybtn() {
  // Add your code here for the OK button action
}
function mediumbtn() {
  // Add your code here for the OK button action
}
function hardbtn() {
  // Add your code here for the OK button action
}
function javanxt() {
  // Add your code here for the OK button action
}





//module
function javamodulebtn(){
  document.getElementById("info-javaMpop").style.display = "block";

  }
  
  
  function HTMLmodulebtn(){
    document.getElementById("info-HTMLMpop").style.display = "block";

  }
  
  function javascriptmodulebtn(){
    document.getElementById("info-javascriptMpop").style.display = "block";

  }
  
  function cplusmodulebtn(){
    document.getElementById("info-cplusMpop").style.display = "block";

    }
    
    function phpmodulebtn(){
      document.getElementById("info-phpMpop").style.display = "block";

    }
    
    function pymodulebtn(){
      document.getElementById("info-pyMpop").style.display = "block";

    }
  
    function sqlmodulebtn(){
      document.getElementById("info-sqlMpop").style.display = "block";

    }
    
    function csharpmodulebtn(){
      document.getElementById("info-csharpMpop").style.display = "block";

    }


//exit function in module
    function exitbtnjavaM() {
      document.getElementById("info-javaMpop" ).style.display = "none";
    }

    function exitbtnHTMLM() {
      document.getElementById("info-HTMLMpop" ).style.display = "none";
    }
    
    function exitbtnjavascriptM() {
      document.getElementById("info-javascriptMpop" ).style.display = "none";
    }
    function exitbtncplusM() {
      document.getElementById("info-cplusMpop" ).style.display = "none";
    }
    function exitbtnphpM() {
      document.getElementById("info-phpMpop" ).style.display = "none";
    }
    function exitbtnpyM() {
      document.getElementById("info-pyMpop" ).style.display = "none";
    }
    function exitbtnsqlM() {
      document.getElementById("info-sqlMpop" ).style.display = "none";
    }
    function exitbtncsharpM() {
      document.getElementById("info-csharpMpop" ).style.display = "none";
    }

    function javamodulebtn1() {
      window.location.href = "javaeasy";
    }
    function javamodulebtn2() {
      window.location.href = "javamedium";
    }
    function javamodulebtn3() {
      window.location.href = "javahard";
    }
  
    function HTMLmodulebtn1() {
      window.location.href = "htmleasy";
    }
    function HTMLmodulebtn2() {
      window.location.href = "htmlmedium";
    }
    function HTMLmodulebtn3() {
      window.location.href = "htmlhard";
    }

    function javascriptmodulebtn1() {
      window.location.href = "jseasy";
    }
    function javascriptmodulebtn2() {
      window.location.href = "jsmedium";
    }
    function javascriptmodulebtn3() {
      window.location.href = "jshard";
    }

    function phpmodulebtn1() {
      window.location.href = "phpeasy";
    }
    function phpmodulebtn2() {
      window.location.href = "phpmedium";
    }
    function phpmodulebtn3() {
      window.location.href = "phphard";
    }

    function pymodulebtn1() {
      window.location.href = "pyeasy";
    }
    function pymodulebtn2() {
      window.location.href = "pymedium";
    }
    function pymodulebtn3() {
      window.location.href = "pyhard";
    }

    function sqlmodulebt1() {
      window.location.href = "sqleasy";
    }
    function sqlmodulebt2() {
      window.location.href = "sqlmedium";
    }
    function sqlmodulebt3() {
      window.location.href = "sqlhard";
    }


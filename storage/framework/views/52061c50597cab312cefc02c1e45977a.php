<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!-- Boxicons CSS -->
      <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <title>Library Management System</title>
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/profile.css')); ?>" />
    </head>
    <body>
    
      <!-- navbar -->
      <nav class="navbar">
        <div class="logo_item">
          
          <i class="bx bx-menu" id="sidebarOpen"></i>
          <img src="img/TS Logo.png" alt="">TECH SKILL
        </div>


        <div class="search_bar">
          <input type="text" placeholder="Search" />
        </div>

        <div class="navbar_content">
          <i class="bi bi-grid"></i>
          <i class='bx bx-sun' id="darkLight"></i>
          <i class='bx bx-bell' ></i>
         <a href="library"><img src="img/" alt="" class="profile" /></a>
        </div>
      </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
         <ul class="menu_items">
          <li class="item">
		      &nbsp
			  &nbsp
			  &nbsp
			  
            <a href="home" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-home"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>

          <ul class="menu_items">
          <li class="item">
            <a href="library" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-grid-alt"></i>
              </span>
              <span class="navlink">Library</span>
            </a>
          </li>
		
		<ul class="menu_items">
          <li class="item">
            <a href="video" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-video"></i>
              </span>
              <span class="navlink">Videos</span>
            </a>
          </li>
  
		  <ul class="menu_items">
          <li class="item">
            <a href="flashcards" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-card"></i>
              </span>
              <span class="navlink">Flashcard</span>
            </a>
          </li>
		
          <!-- end -->
		  
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    <div>
    <main>
        <main class="flex-container">
          
          <div class="profile-card">
            <img src="image.png" alt="profile" class="profile-picture">
            <i class='bx bxs-edit edit-profile-icon' onclick="openPopupEditProfilePicture()"></i>
            <h1 class="profile-name">Reeyan Neil M. Villavicencio</h1>
            <h2 class="profile-title">Computer Science Student</h2>
            <p class="profile-email">rnvillavivenncio@cca.edu.ph</p>
            <p class="profile-phone">09294829411</p>
        </div>
</div>
        <!-- Pop up edit profile -->
        

        
      
    <div>
          <div class="progress">
            <div class="chart-container">
              <div class="chart-box">
                <h2 class="progress-title">Trained</h2>
                <h1 class="progress-percentatge">73.3%</h2>
              </div>
              <div class="chart-box">
                <h2 class="progress-title">Passed</h2>
                <h1 class="progress-percentatge">41</h2>
              </div>
              <div class="chart-box">
                <h2 class="progress-title">Failed</h2>
                <h1 class="progress-percentatge">3</h2>
              </div>
              <div class="chart-box box-end">
                <h2 class="progress-title">In Progress</h2>
                <h1 class="progress-percentatge">6</h2>
              </div>
              
            </div>
            <div class="progress-bars">
              <div class="progress-container">
                <h2 class="title">Excercises</h2>
                <div class="progress-box">
                  <label for="css">Cascading Style Sheet<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="32" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">HyperText Markup Language<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="100" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">Javascript<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="80" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">PHP<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="32" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">Python<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="72" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">SQL<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="82" max="100">32</progress>
                </div>
              </div>
              <div class="progress-container">
                <h2 class="title">Quizzes</h2>
                <div class="progress-box">
                  <label for="css">Cascading Style Sheet<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="32" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">HyperText Markup Language<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="50" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">Javascript<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="60" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">PHP<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="80" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">Python<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="90" max="100">32</progress>
                </div>
                <div class="progress-box">
                  <label for="css">SQL<span class="percent">80%</span></label>
                  <progress id="css" class="progress-bar" value="100" max="100">32</progress>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
</div>


      </div>
      <!-- Editprofile -->
      <div>
      <div class="center-container">
      
      <div class="popup" id="editProfilePicturePopup">
        <h2>Edit Profile Picture</h2>
        <form id="profilePictureForm">
          <label for="newProfilePicture">Choose a new profile picture:</label>
          <input type="file" id="newProfilePicture" accept="image/*" onchange="displayImage(this)" required>
          <button type="submit">Save Changes</button>
          <button type="button" onclick="closePopupEditProfilePicture()">Discard</button>
          <br>
          <div class="preview-container">
            <img id="previewImage" alt="Preview" />
          </div>
          <br>

        </form>
      </div>
    </div>
    </div>

      

      <!-- JavaScript -->
      <script src="<?php echo e(asset('assets/js/homejs.js')); ?>"></script>
  
<script>
 function openPopupEditProfilePicture() {
  document.getElementById('editProfilePicturePopup').style.display = 'block';
}

function closePopupEditProfilePicture() {
  document.getElementById('editProfilePicturePopup').style.display = 'none';
  // Reset the form when closing the pop-up
  document.getElementById('profilePictureForm').reset();
  document.getElementById('previewImage').src = '';
}

function displayImage(input) {
  const file = input.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById('previewImage').src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
}
</script>
      

      



    </body>
  </html><?php /**PATH C:\Users\pc\Documents\GitHub\Colle_C301\resources\views/Dashboard/profile.blade.php ENDPATH**/ ?>
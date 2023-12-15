<html>

<head> 
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/lms-login.css')); ?>">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>Registration Form</title>


</head>
  <body>
    <div class= "row main-container" id="card">
      <!-- Login -->
      <div class="col-xs-9 col-sm-7 col-md-5 col-lg-3 card" id="card-front"> 
        <image class="logo" src="<?php echo e(asset('assets/images/image.png')); ?>" alt="logo" />
        <form method="post" action="perform-login" >
        <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($err); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input value="<?php echo e(old('Email')); ?>" type="email" class="form-control" id="email" placeholder="Enter your email address" name="Email">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="Password">
          </div>
          <div class="forgot-password">         
            <a href="" >Forgot Password?</a>
          </div>
          <button class="btn btn-primary submit-btn" type="submit">Sign in</button>
        </form>
        <div class="sign-link">
          <p>Don't have an account yet?</p>
          <button type="button" onclick="openRegister()">Sign up</button>
        </div>
      </div>
      <!-- Register  -->
      <div class="col-xs-10 col-sm-7 col-md-5 col-lg-3 card" id="card-back"> 
        <image class="logo" src="<?php echo e(asset('assets/images/image.png')); ?>" alt="logo" />
        <form method="post" action="perform-register">
        <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($err); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
          <div class="mb-3 text-container">
            <label for="FullName" class="form-label">Full Name</label>
            <input value="<?php echo e(old('FullName')); ?>" type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="FullName">
          </div>
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input value="<?php echo e(old('Email')); ?>" type="email" class="form-control" id="email" placeholder="Enter your email address" name="Email">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="Register_Password">
          </div>
          <div class="mb-3 text-container">
            <label for="ConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm your password" name="Password_Confirm"> 
          </div>
  
          <button class="btn btn-primary submit-btn sign-up-btn" type="submit">Sign up</button>
        </form>
        <div class="sign-link">
          <p>Already have an account?</p>
          <button type="submit" class="sign-link" onclick="openLogin()">Sign in</button>
        </div>
      </div>
    </div>
        
     <script>
      
      var loginForm = document.getElementById("card-front");
      var registerForm = document.getElementById("card-back");

      function openRegister(){
        loginForm.style.transform = "rotateY(180deg)";
        registerForm.style.transform = "rotateY(0deg)";              
      }

      function openLogin(){
        registerForm.style.transform = "rotateY(-180deg)";
        loginForm.style.transform = "rotateY(0deg)";
      }

      function redirectTo(){
        window.location.assign = ("index.html")
        card.style.transform = "rotateY(0deg)";
      }
    </script>
		
</body>
</html><?php /**PATH C:\Users\pc\Documents\GitHub\Colle_C301\resources\views/Authentication/loginregister.blade.php ENDPATH**/ ?>
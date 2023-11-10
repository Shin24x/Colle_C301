<!DOCTYPE html>
<html lang="en">
@include('components/header')

<body>
    <div class="container">
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                  </div>
  
                  <form style="width: 23rem;" action="perform-register" method="POST">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }} </li>
                        @endforeach
                    </div>
                    @endif
                    @csrf
                    <p>Please Sign up</p>
                   
                    <div class="form-outline mb-4">
                      <input type="text" id="text1" class="form-control"name="reg_full_name"/>
                      <label class="form-label" for="form2Example11">Full Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="text2" class="form-control"name="reg_email"/>
                      <label class="form-label" for="form2Example11">Email</label>
                    </div>
                    <div class="form-outline mb-4" >
                      <input type="password" id="text3" class="form-control" name="password"/>
                      <label class="form-label" for="form2Example11">Password</label>
                    </div>

                    <div class="form-outline mb-4" >
                      <input type="password" id="text4" class="form-control" name="password_confirmation"/>
                      <label class="form-label" for="form2Example11">Confirm Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Sign in</button>

                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already have an account?</p>
                      <a href="../"><button type="submit" class="btn btn-outline-danger">Login</a></button>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</div>
</body>
</html>
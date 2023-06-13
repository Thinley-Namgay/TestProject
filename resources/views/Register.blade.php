<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  @include('common.css')
 
</head>
<body>
   <!-- Contact Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Register Here</h6>
            <h1 class="mb-5">Registration Page</h1>
        </div>
      <div class="row g-2">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <h5>If You Are Free</h5>
            <p class="mb-4">Give Me a Call! We are waiting to Employee You😊</p>
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-map-marker-alt text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">Office</h5>
                    <p class="mb-0">Dewathang, Samdrup Jongkhar, Bhutan</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">Mobile</h5>
                    <p class="mb-0">+975-17888181</p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                    <i class="fa fa-envelope-open text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-primary">Email</h5>
                    <p class="mb-0">bhtlocalthinley@gmail.com</p>
                </div>
            </div>
        </div>
      <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <form action="/register_new_user" method="POST">
              <div class="row g-3">
                  <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" placeholder="Full Name" name="full_name" id="full_name"required>
                        <label for="name"></label>
                      </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                      <div class="form-floating">
                      <label for="email"></label>
                      <input type="text" placeholder="Email" name="email" id="email"required>
                          
                      </div>
                  </div>
                  <br>
                  <div class="col-12">
                      <div class="form-floating">
                      <input type="password" placeholder="Password" name="password" id="password" required>
                          <label for="subject"></label>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-floating">
                      <input type="contact" placeholder="Contact" name="contact" id="contact" required>
                          <label for="subject"></label>
                      </div>
                  </div>
                  <br>
                  <div class="col-12">
                      <div class="form-floating">
                      <form method="POST" action="/register_new_user"></form>
                          @csrf
                          <div class="dropdown">
                            <label for="role">Select Role:</label>
                            <select name="role" id="role">
                              <option value="">Select a Role</option>
                              @foreach ($response_data as $i=> $data)
                            <option value="{{$data->id}}">
                              {{$data->name}}</option>
                              @endforeach
                            </select>
                          </div>
                      </form>
                      </div>
                  </div>
                  <div class="col-12">
                      <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                  </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Contact End -->
   
 
</body>
</html>

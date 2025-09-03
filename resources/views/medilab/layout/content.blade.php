@extends('medilab.layout.header')


{{-- hero section --}}
<section class="hero_section text-white py-5">
  <h1 class="text-center h1">WELCOME TO MEDILAB</h1>
  <p>We are team of talented designers making websites with Bootstrap</p>
  <div class="container">
    <div class="row mt-3 g-5  ">
      <!-- Left Side (col-4) -->
      <div class="hero-right-card col-lg-4 col-md-12    py-5  bg-primary text-white text-center  rounded ">
        <div class=" d-flex flex-column justify-content-start align-items-start">
            <h2>Why Choose Medilab?</h2>
        <p class="text-start text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute
          irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos.
          Autem tempore quibusdam vel necessitatibus optio ad corporis.
        </p>
        </div>
        <a href="#" class="btn btn-light text-primary fw-bold mt-3">
          Learn More <i class="fa-solid fa-angle-right"></i>
        </a>
      </div>

      <!-- Right Side (col-8) -->
      <div class="col-lg-8 col-md-12 position-relative ">
        <!-- Row with gap -->
        <div class="row g-3">
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 col-sm-12 position-relative z-3">
            <div class=" hero_card text-center bg-white py-4 px-5 rounded h-100  d-flex  flex-column justify-content-center align-items-center">
              <i class="fas fa-clipboard fa-2x text-primary "></i>
              <h4 class="text-dark">Corporis voluptates officia eiusmod</h4>
              <p class="text-dark">
               Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
              </p>
            </div>
          </div>
          <!-- Card 2 -->
           <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class=" hero_card text-center bg-white py-4 px-5 rounded h-100  d-flex  flex-column justify-content-center align-items-center">
              <i class="fas fa-briefcase fa-2x text-primary "></i>
              <h4 class="text-dark">Labore consequatur incidid dolore</h4>
              <p class="text-dark">
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              </p>
            </div>
          </div>
          <!-- Card 3 -->
           <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="hero_card text-center bg-white py-4 px-5 rounded h-100  d-flex  flex-column justify-content-center align-items-center">
              <i class="fas fa-gem fa-2x text-primary "></i>
              <h4 class="text-dark">Ullamco laboris ladore pan</h4>
              <p class="text-dark">
               Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- About Section -->
<section class="py-5">
  <div class="container">
    <div class="row">

      <!-- Left side image -->
      <div class="col-lg-6 col-md-12 mb-3">
        <img src="{{ asset('images/about.jpg') }}" class="img-fluid   rounded" alt="About">
      </div>

      <!-- Right side text -->
      <div class="col-lg-6 col-md-12">
        <h1>About Us</h1>
        <p>
          Dolor iure expedita id fuga asperiores qui sunt consequatur minima.
          Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores.
          Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
        </p>

        <!-- Icon Rows Start -->
        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-heart-pulse fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
          </div>
        </div>

        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-vial-circle-check fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
          </div>
        </div>

        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-star fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Ullamco laboris nisi ut aliquip consequat</h4>
            <p>Magni facilis facilis repellendus cum excepturi quaerat libre trade</p>
          </div>
        </div>
        <!-- Icon Rows End -->

      </div>

    </div>
  </div>
</section>
<!-- Stats Section -->
<section class="py-5 bg-secondary">
  <div class="container text-center">
    <div class="row g-3 justify-content-center">

      <!-- Doctors -->
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-user-doctor fa-2x text-primary mb-3"></i>
          <h3>Doctors</h3>
        </div>
      </div>

      <!-- Awards -->
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-award fa-2x text-primary mb-3"></i>
          <h3>Awards</h3>
        </div>
      </div>

      <!-- Labs -->
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-flask fa-2x text-primary mb-3"></i>
          <h3>Labs</h3>
        </div>
      </div>

      <!-- Departments -->
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-hospital fa-2x text-primary mb-3"></i>
          <h3>Departments</h3>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- services section  --}}
<section>
    <div class="container text-center py-5 px-4">
        <h1>Services</h1>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        <div class="row g-4 pt-5">
       <!-- Service 1 -->
       <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
        </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
         </div>
       </div>

      <!-- Service 2 -->
      <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
        </div>
      </div>

      <!-- Service 3 -->
    <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
        </div>
      </div>
     {{--  services 4 --}}
      <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
        </div>
      </div>
      {{-- services --}}
      <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
        </div>
      </div>
      {{-- services --}}
      <div class="col-lg-4 col-md-6 service-div py-5 text-center shadow-sm border border-white border-5">
        <div class="service-item">
          <div class="icon">
            <i class="fas fa-heartbeat fa-2x text-primary p-2"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores...</p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- section appointment --}}
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-2">Appointment</h2>
    <p class="text-center mb-4">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>

    <form class="row g-3">
      <!-- Name -->
      <div class="col-md-4 col-sm-12">
        <input type="text" class="form-control" id="inputName" placeholder="Your Name">
      </div>

      <!-- Email -->
      <div class="col-md-4 col-sm-12">
        <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
      </div>

      <!-- Phone -->
      <div class="col-md-4 col-sm-12">
        <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number +92">
      </div>

      <!-- Date -->
      <div class="col-md-4 col-sm-12">
        <input type="date" class="form-control" id="inputDate" placeholder="Select Date">
      </div>

      <!-- Department -->
      <div class="col-md-4 col-sm-12">
        <select class="form-select" id="inputDepartment">
          <option selected disabled>Select Department</option>
          <option value="pathology">Pathology</option>
          <option value="radiology">Radiology</option>
          <option value="hematology">Hematology</option>
          <option value="microbiology">Microbiology</option>
          <option value="biochemistry">Biochemistry</option>
          <option value="immunology">Immunology</option>
          <option value="molecular">Molecular Diagnostics</option>
        </select>
      </div>

      <!-- Doctor -->
      <div class="col-md-4 col-sm-12">
        <select class="form-select" id="inputDoctor">
          <option selected disabled>Select Doctor</option>
          <option value="dr_ahmed">Dr. Ahmed Khan (Pathologist)</option>
          <option value="dr_sana">Dr. Sana Malik (Radiologist)</option>
          <option value="dr_ali">Dr. Ali Raza (Hematologist)</option>
          <option value="dr_nadia">Dr. Nadia Shah (Microbiologist)</option>
          <option value="dr_farhan">Dr. Farhan Iqbal (Biochemist)</option>
          <option value="dr_hira">Dr. Hira Qureshi (Immunologist)</option>
          <option value="dr_asad">Dr. Asad Mehmood (Molecular Specialist)</option>
        </select>
      </div>

      <!-- Description -->
      <div class="col-12">
        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Your Message (Optional)"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-warning rounded-pill px-4">Make An Appointment</button>
      </div>
    </form>
  </div>
</section>
{{-- Departments section --}}
<section>
    <div class="container-fluid">
        <div class="container py-5">
            <h1 class="text-center">Departments</h1>
            <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            <div class="row g-4 py-5">
                <div class="col-lg-3 col-mb-12 col-sm-12">
                <div class="linklist py-5">
                <a href="">Cardiology</a>
                <a href="">Neurology</a>
                <a href="">Hepatology</a>
                <a href="">Pediatrics</a>
                <a href="">Eye Care</a>
                </div>
                </div>
                <div class="col-lg-6 col-mb-12 col-sm-12">
               <h2 class="py-1">Cardiology</h2>
               <p>Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka <br>
                <br>
                 Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                 Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui.
                 Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat
                  quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-3 col-mb-12 col-sm-12">
                  <div>
                    <img src="{{ asset('images/departments-1.jpg') }}" alt="" class="img-fluid rounded">
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- doctor section  --}}
<section>
  <div class="container-fluid py-5">
    <div class="container text-center dr_section">
      <h1>Doctors</h1>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>

      <div class="row g-4 ">

        <!-- Doctor Card 1 -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-4 shadow-sm">
            <div class="row g-0">
              <div class="col-md-4 dr_img">
                <img src="{{ asset('images/doctors/doctors-1.jpg') }}" class="img-fluid w-75 mt-4 dr_imags rounded-circle" alt="Doctor Image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Walter White</h5>
                  <h6 class="text-muted">Chief Medical Officer</h6>
                  <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <div class="mt-3">
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Doctor Card 2 -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-4 shadow-sm">
            <div class="row g-0">
              <div class="col-md-4 dr_img">
                <img src="{{ asset('images/doctors/doctors-2.jpg') }}" class="img-fluid mt-4  w-75 dr_imags rounded-circle" alt="Doctor Image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Jessie Pinkman</h5>
                  <h6 class="text-muted">Senior Surgeon</h6>
                  <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                  <div class="mt-3">
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Doctor Card 3 -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-4 shadow-sm">
            <div class="row g-0">
              <div class="col-md-4 dr_img">
                <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid w-75 mt-4 dr_imags rounded-circle" alt="Doctor Image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Saul Goodman</h5>
                  <h6 class="text-muted">Cardiologist</h6>
                  <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                  <div class="mt-3">
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Doctor Card 4 -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card mb-4 shadow-sm">
            <div class="row g-0">
              <div class="col-md-4 dr_img ">
                <img src="{{ asset('images/doctors/doctors-4.jpg') }}" class="img-fluid w-75  mt-4 dr_imags rounded-circle" alt="Doctor Image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Hank Schrader</h5>
                  <h6 class="text-muted">Neurologist</h6>
                  <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
                  <div class="mt-3">
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End row -->
    </div> <!-- End container -->
  </div> <!-- End container-fluid -->
</section>
{{-- accordian section --}}
<section class="accordian_section">
       <div class="container-fluid py-3 ">
           <div class="container text-center">
             <h2>Frequently Asked Questions</h2>
             <p class="py-3">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
           <div class="accordion" id="accordionPanelsStayOpenExample">
              {{-- accordion-item 1 --}}
                  <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                   {{-- accordion-item 2 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                     {{-- accordion-item 3 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                    {{-- accordion-item 4 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                    {{-- accordion-item 5 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                   {{-- accordion-item 6 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                     {{-- accordion-item 7 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                    {{-- accordion-item 8 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                     {{-- accordion-item 9 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
                       {{-- accordion-item 10 --}}
                   <div class="accordion-item bg-primary">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Non consectetur a erat nam at lectus urna duis?
                       </button>
                      </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body">
                       Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                       </div>
                       </div>
                   </div>
              </div>
         </div>
     </div>
</section>
{{-- Testimonials section --}}
<section>
  <div class="container-fluid">
    <div class="container py-5  d-flex justify-contenet-center">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <h2>Testimonials</h2>
          <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Carousel Indicators / Dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Inner -->
            <div class="carousel-inner">s
              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="card mb-5 shadow-sm">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid test-img w-75 mt-4  ms-3 rounded-circle" alt="Doctor Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Saul Goodman</h5>
                        <h6 class="text-muted">Cardiologist</h6>
                        <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                        <div class="mt-3">
                          <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                          <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="card mb-4 shadow-sm">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid w-75 mt-4 ms-3 test-img rounded-circle" alt="Doctor Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Saul Goodman</h5>
                        <h6 class="text-muted">Cardiologist</h6>
                        <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                        <div class="mt-3">
                          <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                          <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 3 -->
              <div class="carousel-item">
                <div class="card mb-4 shadow-sm">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid w-75 mt-5 ms-3 test-img rounded-circle" alt="Doctor Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Saul Goodman</h5>
                        <h6 class="text-muted">Cardiologist</h6>
                        <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small></p>
                        <div class="mt-3">
                          <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-twitter fa-lg"></i></a>
                          <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                          <a href="#" class="text-info me-3"><i class="fab fa-x fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- carousel-inner -->

          </div> <!-- carousel -->
        </div>
      </div>
    </div>
  </div>
</section>

{{-- imag gallery section  --}}
<section>
    <div class="container-fluid text-center ">
        <h2>Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        <div>
             <div class="row g-3">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-1.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-2.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-3.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-4.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-5.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-6.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-7.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/gallery/gallery-8.jpg') }}" class="img-fluid " alt="Gallery Image">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- contact section --}}
<section>
  <div class="container py-5">
    <div class="row">
      <!-- Left Column -->
      <div class="col-lg-4 col-md-12 py-5">
        <!-- Info Box 1 -->
        <div class="info-box d-flex align-items-center gap-3">
           <div class="icon d-flex justify-content-center align-items-center rounded-circle bg-primary"
               style="width:50px; height:50px;">
              <i class="fas fa-map-marker-alt text-white fs-5"></i>
           </div>
           <div>
            <h4>Location</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>
        <!-- Info Box 2 -->
       <div class="info-box d-flex align-items-center gap-3">
           <div class="icon d-flex justify-content-center align-items-center rounded-circle bg-primary"
               style="width:50px; height:50px;">
            <i class="fas fa-map-marker-alt text-white fs-5"></i>
           </div>
           <div>
            <h4>Location</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
           </div>
        </div>
        <!-- Info Box 3 -->
       <div class="info-box d-flex align-items-center gap-3">
          <div class="icon d-flex justify-content-center align-items-center rounded-circle bg-primary"
               style="width:50px; height:50px;">
            <i class="fas fa-map-marker-alt text-white fs-5"></i>
          </div>
          <div>
            <h4>Location</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
         </div>
       </div>
      <!-- Right Column -->
      <div class="col-lg-8 col-md-12">
           <form class="p-4 shadow rounded bg-white">
               <div class="row">
                  <!-- Name -->
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                  </div>
                  <!-- Email -->
                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                  </div>
                  </div>

                   <!-- Subject -->
                   <div class="mb-3">
                     <input type="text" class="form-control" placeholder="Subject" required>
                   </div>

                   <!-- Message -->
                   <div class="mb-3">
                     <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                   </div>

                   <!-- Button -->
                   <div class="text-center">
                     <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">
                       Send Message
                     </button>
                   </div>
            </form>
       </div>
    </div>
  </div>

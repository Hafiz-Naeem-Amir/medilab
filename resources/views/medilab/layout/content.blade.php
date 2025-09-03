@extends('medilab.layout.header')


{{-- hero section --}}
<section class="hero_section text-white py-5" id="home" >
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left Side (col-4) -->
      <div class="hero-right-card col-lg-4 col-md-12 bg-primary text-white text-center rounded p-4 h-100 d-flex flex-column justify-content-between">
        <div>
          <h2 class="mb-3">Why Choose Medilab?</h2>
          <p class="text-start text-white">
            Medilab is committed to providing reliable medical laboratory services with
            advanced technology and accurate diagnostics. Our team ensures quality testing,
            timely results, and trusted healthcare support for patients and professionals.
            advanced technology and accurate diagnostics. Our team ensures quality testing,
            timely results, and trusted healthcare support for patients and professionals.
          </p>
        </div>
        <a href="#" class="btn btn-light text-primary fw-bold mt-3 align-self-start">
          Learn More <i class="fa-solid fa-angle-right"></i>
        </a>
      </div>

      <!-- Right Side (col-8) -->
      <div class="col-lg-8 col-md-12">
        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="hero_card text-center bg-white py-4 px-3 rounded h-100 d-flex flex-column justify-content-center align-items-center shadow-sm">
              <i class="fas fa-clipboard fa-2x text-primary mb-3"></i>
              <h4 class="text-dark">Advanced Diagnostics</h4>
              <p class="text-dark">
                Our laboratory provides accurate and timely diagnostic reports using advanced equipment, helping doctors.
              </p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="hero_card text-center bg-white py-4 px-3 rounded h-100 d-flex flex-column justify-content-center align-items-center shadow-sm">
              <i class="fas fa-briefcase fa-2x text-primary mb-3"></i>
              <h4 class="text-dark">Research & Testing</h4>
              <p class="text-dark">
                Our team conducts reliable laboratory testing and medical research, ensuring high standards of accuracy, safety, and scientific validation.
              </p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="hero_card text-center bg-white py-4 px-3 rounded h-100 d-flex flex-column justify-content-center align-items-center shadow-sm">
              <i class="fas fa-gem fa-2x text-primary mb-3"></i>
              <h4 class="text-dark">Quality Assurance</h4>
              <p class="text-dark">
                Every test undergoes strict quality checks in our lab, guaranteeing reliable results that support effective treatment and patient care.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- About Section -->
<section class="py-5" id="about">
  <div class="container">
    <div class="row">

      <!-- Left side image -->
      <div class="col-lg-6 col-md-12 mb-3 pt-5">
        <img src="{{ asset('images/about.jpg') }}" class="img-fluid rounded" alt="About">
      </div>

      <!-- Right side text -->
      <div class="col-lg-6 col-md-12">
        <h1>About Us</h1>
        <p>
          Our hospital is committed to delivering world-class healthcare with modern facilities,
          advanced laboratories, and a team of highly qualified specialists. We combine medical
          expertise with compassion to ensure every patient receives the best possible care.
          From preventive health checkups to complex treatments.
        </p>

        <!-- Icon Rows Start -->
        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-heart-pulse fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Comprehensive Patient Care</h4>
            <p>We provide personalized treatment plans ensuring safety, comfort, and long-term wellness for every patient.</p>
          </div>
        </div>

        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-vial-circle-check fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Advanced Laboratory Services</h4>
            <p>Equipped with modern diagnostic tools, our labs guarantee accurate test results and timely reporting.</p>
          </div>
        </div>

        <div class="row d-flex align-items-center mb-3">
          <div class="col-auto"><i class="fa-solid fa-star fa-2x text-primary"></i></div>
          <div class="col">
            <h4>Excellence & Trust</h4>
            <p>Our commitment to medical excellence and ethical practices has earned us the trust of thousands of patients.</p>
          </div>
        </div>
        <!-- Icon Rows End -->

      </div>

    </div>
  </div>
</section>
>
<!-- Stats Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f0f4ff, #d9e6ff);">
  <div class="container text-center">
    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center">

      <!-- Doctors -->
      <div class="col">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-user-doctor fa-2x text-primary mb-3"></i>
          <h3 class="h5 fw-bold">Doctors</h3>
          <h2 class="counter text-primary" data-target="120">0</h2>
        </div>
      </div>

      <!-- Awards -->
      <div class="col">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-award fa-2x text-primary mb-3"></i>
          <h3 class="h5 fw-bold">Awards</h3>
          <h2 class="counter text-primary" data-target="50">0</h2>
        </div>
      </div>

      <!-- Labs -->
      <div class="col">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-flask fa-2x text-primary mb-3"></i>
          <h3 class="h5 fw-bold">Labs</h3>
          <h2 class="counter text-primary" data-target="30">0</h2>
        </div>
      </div>

      <!-- Departments -->
      <div class="col">
        <div class="bg-white text-dark p-5 rounded shadow h-100 hover-scale">
          <i class="fa-solid fa-hospital fa-2x text-primary mb-3"></i>
          <h3 class="h5 fw-bold">Departments</h3>
          <h2 class="counter text-primary" data-target="15">0</h2>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- services section  --}}
<section class="bg-light">
  <div class="container text-center py-5 px-4" id="services">
    <h1 class="mb-3 fw-bold">Our Services</h1>
    <p class="mb-5 text-muted">We provide a wide range of medical lab services with the highest quality standards</p>

    <div class="row g-4 pt-3">
      <!-- Service 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-heartbeat fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">Cardiology Tests</h3>
          <p class="text-muted">Comprehensive heart and ECG testing with modern lab equipment for accurate results.</p>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-vials fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">Blood Tests</h3>
          <p class="text-muted">Routine and specialized blood investigations ensuring fast and reliable reports.</p>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-x-ray fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">Radiology</h3>
          <p class="text-muted">Advanced X-ray, ultrasound, and imaging services with precise diagnostics.</p>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-microscope fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">Pathology</h3>
          <p class="text-muted">Detailed pathological analysis for accurate disease detection and monitoring.</p>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-dna fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">DNA Testing</h3>
          <p class="text-muted">Genetic and DNA analysis with international standard techniques and accuracy.</p>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card p-4 bg-white shadow rounded h-100">
          <div class="icon-box mx-auto mb-3">
            <i class="fas fa-dna fa-2x text-primary"></i>
          </div>
          <h3 class="h5 fw-bold">General Checkup</h3>
          <p class="text-muted">Complete body checkup packages to monitor health and prevent future risks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- section appointment --}}
<section class="py-5" id="appointment">
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
<section class="department-section">
    <div class="container-fluid" id="department">
        <div class="container py-5">
            <h1 class="text-center text-white">Departments</h1>
            <p class="text-center text-light">
              Our medical departments are dedicated to providing specialized care with modern facilities and expert doctors.
              Each unit is designed to meet patient needs through advanced diagnostics, compassionate treatment, and research-driven practices.
            </p>
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
                <div class="col-lg-6 col-mb-12 col-sm-12 text-white">
                   <h2 class="py-1">Cardiology</h2>
                   <p>
                      Our Cardiology Department is equipped with state-of-the-art laboratories and modern diagnostic tools
                      to ensure accurate and timely detection of heart-related conditions. From routine checkups and ECG
                      monitoring to advanced procedures and rehabilitation programs, we provide complete cardiac care under
                      the supervision of highly qualified specialists. Our team focuses on early prevention, lifestyle guidance,
                      and personalized treatment plans to improve heart health and enhance patients’ quality of life.
                   </p>
                </div>
                <div class="col-lg-3 col-mb-12 col-sm-12">
                  <div>
                    <img src="{{ asset('images/departments-1.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- doctor section  --}}
<section>
  <div class="container-fluid py-5" id="doctors">
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
      <h2>Lab Related Frequently Asked Questions</h2>
      <p class="py-3">Find answers to the most common questions related to laboratory procedures and safety.</p>

      <div class="accordion" id="accordionExample">

        <!-- accordion-item 1 -->
        <div class="accordion-item bg-primary text-white">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What safety equipment is mandatory in the laboratory?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-dark">
              Safety glasses, lab coats, and gloves are mandatory in most laboratories to ensure personal protection from chemical exposure and accidents.
            </div>
          </div>
        </div>

        <!-- accordion-item 2 -->
        <div class="accordion-item bg-primary text-white">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How should chemical waste be disposed of?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-dark">
              Chemical waste must be collected in designated containers, labeled properly, and disposed of according to the lab’s hazardous waste management policy.
            </div>
          </div>
        </div>

        <!-- accordion-item 3 -->
        <div class="accordion-item bg-primary text-white">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Why is calibration of lab instruments important?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-dark">
              Calibration ensures accuracy and reliability of experimental results by aligning instruments with standard measurements.
            </div>
          </div>
        </div>

        <!-- accordion-item 4 -->
        <div class="accordion-item bg-primary text-white">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What should be done in case of a chemical spill?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-dark">
              Immediately alert others, wear protective gear, contain the spill with absorbent material, and follow the lab’s spill response protocol.
            </div>
          </div>
        </div>

        <!-- accordion-item 5 -->
        <div class="accordion-item bg-primary text-white">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              How can cross-contamination be prevented in the lab?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-dark">
              Always sterilize equipment before use, avoid mixing reagents, and work in designated clean areas to prevent cross-contamination.
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
    <div class="container py-5 d-flex justify-contenet-center">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <h2>Testimonials</h2>
            <p>
                Our patients trust us for exceptional healthcare services, combining
                professional expertise with compassionate care. Here’s what some of them have
                to say about their experiences with our dedicated team of doctors. We believe
                that quality healthcare goes beyond just treatment — it is about listening to
                patients, understanding their concerns, and guiding them toward better health
                with empathy and commitment.
            </p>

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
            <div class="carousel-inner">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="card mb-5 shadow-sm">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid test-img w-75 mt-4 ms-3 rounded-circle" alt="Doctor Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Dr. Sarah Mitchell</h5>
                        <h6 class="text-muted">Cardiologist</h6>
                        <p class="card-text">
                          Dr. Sarah’s detailed approach and genuine concern for her patients
                          gave me the confidence I needed during a difficult time. She goes
                          above and beyond to ensure quality care.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
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
                        <h5 class="card-title">Dr. James Carter</h5>
                        <h6 class="text-muted">Neurologist</h6>
                        <p class="card-text">
                          The level of professionalism and empathy Dr. Carter showed was
                          outstanding. His ability to explain complex medical conditions in
                          simple terms made me feel safe and informed.
                        </p>
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

              <!-- Slide 3 -->
              <div class="carousel-item">
                <div class="card mb-4 shadow-sm">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('images/doctors/doctors-3.jpg') }}" class="img-fluid w-75 mt-5 ms-3 test-img rounded-circle" alt="Doctor Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Dr. Emily Johnson</h5>
                        <h6 class="text-muted">Dermatologist</h6>
                        <p class="card-text">
                          Dr. Emily’s caring attitude and expertise made my treatment smooth
                          and stress-free. I appreciate the time she took to answer all my
                          questions patiently and thoroughly.
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 45 mins ago</small></p>
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
<section id="contact">
  <div class="container py-5" >
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

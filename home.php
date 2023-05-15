<?php 
	session_start(); // Start the session

	if(!isset($_SESSION['email'])) {
		header('Location: login.php');
		exit();
	}
?>
<?php 
include("contact_us_form.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>ProfessionalDriver</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light">
            <a href="home.php"
              ><span
                ><strong
                  ><span style="color: #eb5d1e">Professional</span
                  >Driver</strong
                ></span
              ></a
            >
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li>
              <a class="nav-link scrollto active" href="#hero"
                >الصفحة الرئيسية</a
              >
            </li>
            <li><a class="nav-link scrollto" href="#about">نبذة عنّا </a></li>
            <li><a class="nav-link scrollto" href="#services">الخدمات</a></li>
            <li>
              <a class="nav-link scrollto" href="#faq">F.A.Q</a>
            </li>
            <li><a class="nav-link scrollto" href="#team">فريق العمل</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>اقسام اخرى</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">حجز المواعيد</a></li>
                <li><a href="#">المادة العملية</a></li>
                <li><a href="#">المادة النظرية</a></li>
                <li><a href="#">الامتحان النظري</a></li>
                <li><a href="page_1.html">ارشادات اصدار الرخصة</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
            <li>
              <a class="getstarted scrollto" href="logout.php"
                >تسجيل الخروج</a
              >
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row gy-4">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h1>مرحبًا بكم في موقع تدريب القيادة</h1>
            <h2>حيث نهدف إلى تعليم القيادة بطريقة آمنة ومسؤولة</h2>
            <div><h2>مرحبا  <?php echo $_SESSION['email']; ?></h2></div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img
              src="assets/img/hero-img.png"
              class="img-fluid animated"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="row justify-content-between">
            <div
              class="col-lg-5 d-flex align-items-center justify-content-center about-img"
            >
              <img
                src="assets/img/about-img.png"
                class="img-fluid"
                alt=""
                data-aos="zoom-in"
              />
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
              <h3 data-aos="fade-up">
                في موقعنا، نقدم خدمات تدريبية شاملة تغطي جوانب القيادة الأساسية
              </h3>
              <p data-aos="fade-up" data-aos-delay="100">
                إن قيادة السيارة هي مهارة مهمة وضرورية في حياتنا اليومية، ولكن
                يجب علينا دائمًا تذكر أن القيادة الآمنة تعني حماية حياتنا وحياة
                الآخرين على الطريق
              </p>
              <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-lock-alt"></i>
                  <h4>القيادة الآمنة</h4>
                  <p>
                    بدءًا من تعلم القيادة والتحكم في السيارة، وصولًا إلى التعامل
                    مع حالات الطوارئ على الطريق
                  </p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-map-pin"></i>
                  <h4>الهدف من الموقع</h4>
                  <p>
                    نحن نتطلع إلى مساعدتك على تحقيق هدفك في تعلم واتقان القيادة
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>الخدمات</h2>
            <p>الخدمات التي يقوم بتقديمها الموقع</p>
          </div>

          <div class="row">
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxs-videos"></i></div>
                <h4 class="title"><a href="">المادة العملية</a></h4>
                <p class="description">
                  يحتوي هذا القسم على المهارات المتعلقة بالقيادة، مثل الانعطافات
                  وتفادي الأخطاء الشائعة
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxs-traffic"></i></div>
                <h4 class="title"><a href="">المادة النظرية</a></h4>
                <p class="description">
                  يحتوي هذا القسم على قواعد ولوائح السير والمرور والتشريعات
                  المرورية المختلفة
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user-check"></i></div>
                <h4 class="title"><a href="ExamHP.html">الامتحان النظري</a></h4>
                <p class="description">
                  يحتوي هذا القسم على امتحان شامل ومحاكي لامتحانات دائرة السير
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-id-card"></i></div>
                <h4 class="title"><a href="">ارشادات إصدار الرخصة</a></h4>
                <p class="description">
                  يحتوي هذا القسم على الارشادات الواجب اتباعها لإصدار رخصة
                  القيادة
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>F.A.Q</h2>
            <p>الأسئلة الأكثر شيوعًا</p>
          </div>

          <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
            <li>
              <div
                data-bs-toggle="collapse"
                class="collapsed question"
                href="#faq1"
              >
                ما العمر الذي استطيع بعده استخراج رخصة القيادة ؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>١٨ عام</p>
              </div>
            </li>

            <li>
              <div
                data-bs-toggle="collapse"
                href="#faq2"
                class="collapsed question"
              >
                هل من الممكن للطالب الحصول على رخصة قيادة من دون الحصول على حصص
                تدريبية ؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  الحصول على رخصة قيادة يعتمد على أداء الطالب، بعض الأحيان يحتاج
                  الطالب إلى حصص أقل من المسجلة والبعض الاخر يحتاج إلى حصص أكثر
                  من المسجلة
                </p>
              </div>
            </li>

            <li>
              <div
                data-bs-toggle="collapse"
                href="#faq3"
                class="collapsed question"
              >
                كم عدد الدروس العملي التي احتاجها لاتقان مهارات القيادة ؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  يعتمد ذلك على الفرد ومدى قدرته على التعلم والتطور في هذا
                  المجال
                </p>
              </div>
            </li>

            <li>
              <div
                data-bs-toggle="collapse"
                href="#faq4"
                class="collapsed question"
              >
                ما هي العقوبات المترتبة على انتهاك قوانين المرور؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  تشمل الغرامات المرورية وتعليق الرخصة لفترة معينة وسجن
                  المخالفين في بعض الحالات
                </p>
              </div>
            </li>

            <li>
              <div
                data-bs-toggle="collapse"
                href="#faq5"
                class="collapsed question"
              >
                ما هي الأدوات التي يجب أن يحملها السائق في السيارة؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  يجب على السائق حمل رخصة القيادة والتأمين والمستندات الأخرى
                  المطلوبة، بالإضافة إلى الأدوات الضرورية مثل الكفر الاحتياطي
                  وطفاية الحرائق
                </p>
              </div>
            </li>

            <li>
              <div
                data-bs-toggle="collapse"
                href="#faq6"
                class="collapsed question"
              >
                هل يمكن تحويل رخصة القيادة من بلد إلى آخر؟
                <i class="bi bi-chevron-down icon-show"></i
                ><i class="bi bi-chevron-up icon-close"></i>
              </div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  يعتمد إمكانية تحويل رخصة القيادة من بلد إلى آخر على اتفاقيات
                  التعاون الدولي والاتفاقيات الثنائية بين البلدين المعنيين،
                  ويكون في الاردن عن طريق نادي السيارات الملكي
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- End F.A.Q Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>فريق العمل</h2>
            <p>فريقنا يتطلع دائما الى خدمتكم</p>
          </div>

          <div class="row">
            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-1.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Omar Alhasan</h4>
                    <span>Frontend Dev</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-2.png"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Malek Barakat</h4>
                    <span>Backend Dev</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Mohammad Hijjawi</h4>
                    <span>Backend Dev</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-xl-3 col-lg-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="member">
                <img
                  src="assets/img/team/team-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Mohammad AlShawabkeh</h4>
                    <span>Frontend Dev</span>
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>تواصل معنا</h2>
            <p>تواصل معنا لتقديم الاستفسارات او طلب المساعدة</p>
          </div>

          <div class="row">
            <div
              class="col-lg-5 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>2V79+RPC, Amman</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>ProfessionalDrivers@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>(06) 535 5000</p>
                </div>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13532.081406502086!2d35.869264!3d32.0145624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c9f77aea22c39%3A0x4cd32eeff99d1c56!2sJU!5e0!3m2!1sen!2sjo!4v1681386018689!5m2!1sen!2sjo"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

            <div
              class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <form
                action="contact_us_form.php"
                method="post"
                role="form"
              >
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="form-control"
                      placeholder="Your Name"
                      value="<?php echo htmlspecialchars($name); ?>"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="email">Your Email</label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"

                      placeholder="Your Email"
                      value="<?php echo htmlspecialchars($email); ?>"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="subject">Subject</label>
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    class="form-control"

                    placeholder="Subject"
                    value="<?php echo htmlspecialchars($subject); ?>"
                    required

                  />
                </div>
                <div class="form-group mt-3">
                  <label for="message">Message</label>
                  <textarea
                    name="message"
                    rows="10"
                    class="form-control"

                    id="message"
                    required
                  >
                  <?php echo htmlspecialchars($message);?>
                 </textarea>
                </div>
                
                <div class="text-center">
                  <button type="submit" value="Send">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Us Section -->
    </main>
    <!-- End #main -->
    <footer>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>ProfessionalDrivers</span></strong
          >. All Rights Reserved <strong>2023</strong>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

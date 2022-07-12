<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('siteasset/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('siteasset/css/style..css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('siteasset/css/all.min.css') }}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            border: 1px solid #ccc;
            margin:4px;
            font-size: 24px;
            color: #222;
            background-color: #ccc;
        }
    </style>
  </head>
  <body>
    <!-- Start Header -->
    <div class="header" id="header">
      <div class="container">
        <a href="http://wa.me/970569026985" class="logo"><i class="bx bx-phone"></i>د.أيمن أبو دقة</a>
        <ul class="main-nav">
          <li><a href="#">حساباتي</a></li>
          <li><a href="#">من نحن</a></li>
          <li><a href="#">مقالات</a></li>
          <li><a href="#">الرئيسية</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->

    <!-- Start Landing -->
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1 style="margin-bottom: 10px">اهلا" وسهلا" في عالم د .أيمن</h1>
          <p>
            Here Iam gonna share everything about my life. Books Iam reading,
            Games Iam Playing, Stories and Events
          </p>
        </div>
        <div class="image">
          <img
            src="{{ asset('siteasset/imgs/218294851_565858555119411_9148139611783235828_n.jpg') }}"
            alt=""
          />
        </div>
      </div>
      <a href="#articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->

    <!-- Start Articles -->
    <div class="articles" id="articles">
      <h2 class="main-title">مقالات</h2>
      <div class="container">
        @foreach ($post as $p1)
        <div class="box">
            <img src="{{ asset('adminasset/img/post/'.$p1->image) }}" alt="" />
            <div class="content">
              <h3>{{ $p1->titel }}</h3>
              <p>
                {{ substr($p1->desc, 0, 30).'...' }}
                  </p>
            </div>
          <div class="info">
            <a href="{{ route('p',$p1->id) }}">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>

          <div class="container ">
            {!! $shareComponent !!}
        </div>
      </div>
      @endforeach
      </div>
    </div>

    <div class="spikes"></div>
    <!-- End Articles -->


    <!-- End Features -->
    <!-- Start Testimonials -->
    <div class="testimonials" id="testimonials">
      <h2 class="main-title">أراء</h2>
      <div class="container">
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-01.png') }}" alt="" />
          <h3>Mohamed Farag</h3>
          <span class="title">  </span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-02.png') }}" alt="" />
          <h3>Mohamed Ibrahim</h3>
          <span class="title">  </span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-03.png') }}" alt="" />
          <h3>Shady Nabil</h3>
          <span class="title">  </span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-04.png') }}" alt="" />
          <h3>Amr Hendawy</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-05.png') }}" alt="" />
          <h3>Sherief Ashraf</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="{{ asset('siteasset/imgs/avatar-06.png') }}" alt="" />
          <h3>Osama Mohamed</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->


    <!-- Start Stats -->
    <div class="stats" id="stats">
      <h2> احصائياتنا الرائعة</h2>

      <div class="container">
          <!--Stats 1-->
          <div class="box">
           <i class="far fa-user fa-2x fa-fw"></i>
           <span class="number" data-goal="135">0</span>
           <span class="text">مريض</span>
          </div>
          <!--Stats 2-->
          <div class="box">
            <i class='bx bx-handicap fa-2x fa-fw'></i>

           <span class="number" data-goal="135">0</span>
           <span class="text">مساعدة</span>
          </div>
          <!--Stats 3-->
          <div class="box">
           <i class="fas fa-globe-asia fa-2x fa-fw"></i>
           <span class="number" data-goal="135">0</span>
           <span class="text">دولة</span>
          </div>
          <!--Stats 4-->
          <div class="box">
           <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
           <span class="number" data-goal="135">0</span>
           <span class="text">إجمالي</span>
          </div>
      </div>
    </div>
    <!-- End Stats -->

    <!-- Start Footer -->
    <div class="footer">
      <div class="container">
        <div class="box">
          <h3></h3>
          <ul class="social">
            <li>
              <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="youtube">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#" class="Whatsapp">
                <i class='bx bxl-whatsapp'></i>
              </a>
            </li>
          </ul>
          <p class="text">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus
            nulla rem, dignissimos iste aspernatur
          </p>
        </div>
        <div class="box">
          <ul class="links">
            <li><a href="#">حساباتي</a></li>
          <li><a href="#">من نحن</a></li>
          <li><a href="#">مقالات</a></li>
          <li><a href="#">الرئيسية</a></li>
          </ul>
        </div>
        <div class="box">
          <div class="line">
            <i class="fas fa-map-marker-alt fa-fw"></i>
            <div class="info">
              palestine, Gaza
            </div>
          </div>
          <div class="line">
            <i class="far fa-clock fa-fw"></i>
            <div class="info">Business Hours: From 8:00AM To 18:00PM</div>
          </div>
          <div class="line">
            <i class="fas fa-phone-volume fa-fw"></i>
            <div class="info">
              <span>+</span>
              <span>+</span>
            </div>
          </div>
        </div>
        <!-- <div class="box footer-gallery">
          <img src="{{ asset('siteasset/imgs/gallery-01.png') }}" alt="" />
          <img src="{{ asset('siteasset/imgs/gallery-02.png') }}" alt="" />
          <img src="{{ asset('siteasset/imgs/gallery-03.jpg') }}" alt="" />
          <img src="{{ asset('siteasset/imgs/gallery-04.png') }}" alt="" />
          <img src="{{ asset('siteasset/imgs/gallery-05.jpg') }}" alt="" />
          <img src="{{ asset('siteasset/imgs/gallery-06.png') }}" alt="" />
        </div> -->
      </div>
      <p class="copyright">Made With &lt;3 By <a href="" style="color:#fff">Mohammed Al_Qarra</a></p>
    </div>
    <!-- End Footer -->
    <script src="{{ asset('siteasset/js/main.js') }}"></script>
  </body>
</html>

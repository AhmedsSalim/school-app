        <!-- Navbar Start -->
        <div class="container  pt-2">
            <div class="row">
              <div class="col-md-4 "> 
                <p class="mb-2 ms-5"><i class="fa fa-phone-alt me-3 text-primary"></i>+97137806780</p>
              </div>
        
              <div class="col-md-4 text-center">
                <a href="mailto:firstlebanon1981@yahoo.com" class="mb-2 ms-5 text-secondary">firstlebanon1981@yahoo.com <i class="fas fa-envelope ms-3 text-primary"></i></a>
              </div>
        
              <div class="col-md-4 d-flex justify-content-end"> 
                <p class="mb-2 me-5">العين - فلج هزاع - شارع المدارس<i class="fa fa-map-marker-alt ms-3 text-primary"></i></p>
              </div>
            </div>
          </div>
        <hr class="m-auto">
        <nav  class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="m-0 text-primary"><img src="{{asset('img/First Lebanon School.jpeg')}}" width="100px" height="100px" alt=""></i>First Lebanon School</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">الرئيسية</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('about/principal-message') || Request::is('about/vision-and-mission') ? 'active' : '' }}" data-bs-toggle="dropdown">عن المدرسة</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('principal-message.index')}}" class="dropdown-item">رسالة المدير</a>
                            <a href="{{route('vision-and-mission.index')}}" class="dropdown-item">الرؤية و الرسالة</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('admission/policy') || Request::is('admission/School-fees') ? 'active' : '' }}" data-bs-toggle="dropdown">القبول و التسجيل</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('policy.index')}}" class="dropdown-item">سياسة القبول</a>
                            <a href="{{route('school-fees.index')}}" class="dropdown-item">الرسوم المدرسية</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle  {{ Request::is('academics/the-curriculum') || Request::is('academics/learning-environment') || Request::is('academics/planning') ? 'active' : '' }}" data-bs-toggle="dropdown">اكاديمي</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('curriculum.index')}}" class="dropdown-item">المنهج الدراسي</a>
                            <a href="{{route('learning-environment.index')}}" class="dropdown-item">المرافق المدرسية و البيئية</a>
                            <a href="{{route('planning.index')}}" class="dropdown-item">التخطيط الإستراتيجي</a>
                        </div>
                    </div>
                    <a href="{{route('images-page.index')}}" class="nav-item nav-link {{ Request::is('images-page') ? 'active' : '' }}">معرض الصور</a>
                    <a href="{{route('student-life.index')}}" class="nav-item nav-link {{ Request::is('student-life') ? 'active' : '' }}">الحياه الطلابية</a>
                    <a href="{{route('contact.index')}}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">اتصل بنا</a>
                </div>
                <a href="{{url('/dashboard')}}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
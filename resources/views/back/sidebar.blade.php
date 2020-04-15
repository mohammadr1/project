<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="{{url('/back/assets/images/faces/face8.jpg')}}" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">ابوالفضل طالبی</p>
                <p class="designation">مدیریت سایت</p>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">منوی اصلی</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">کنترل پنل</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">دسته بندی ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="false" aria-controls="category">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">مطالب</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="article">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.articles')}}">نمایش</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.articles.create')}}">ایجاد</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/back/pages/forms/basic_elements.html')}}">
              <i class="menu-icon typcn typcn-shopping-bag"></i>
              <span class="menu-title">المانهای فرم</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/back/pages/charts/chartjs.html')}}">
              <i class="menu-icon typcn typcn-th-large-outline"></i>
              <span class="menu-title">نمودارها</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/back/pages/tables/basic-table.html')}}">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">جدولها</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/back/pages/icons/font-awesome.html')}}">
              <i class="menu-icon typcn typcn-user-outline"></i>
              <span class="menu-title">آیکونها</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon typcn typcn-document-add"></i>
              <span class="menu-title">صفحات</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/back/pages/samples/blank-page.html')}}"> صفحه ی خالی </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/back/pages/samples/login.html')}}"> ورود </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/back/pages/samples/register.html')}}"> ثبت نام </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/back/pages/samples/error-404.html')}}"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/back/pages/samples/error-500.html')}}"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
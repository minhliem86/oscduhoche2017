  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class=""><a href=""><i class="fa fa-photo"></i> <span>Thống kê</span></a></li> -->
        <li class="{!!Active::setActive(2,'dashboard')!!}"><a href="{!!url('admin/dashboard')!!}"><i class="fa fa-photo"></i> <span>Dashboard</span></a></li>
        <li class="{!!Active::setActive(2,'promotion')!!}"><a href="{!!route('admin.promotion.index')!!}"><i class="fa fa-photo"></i> <span>Promotion</span></a></li>
        <li class="{!!Active::setActive(2,'country')!!}"><a href="{!!route('admin.country.index')!!}"><i class="fa fa-photo"></i> <span>Country</span></a></li>
        <li class="{!!Active::setActive(2,'location')!!}"><a href="{!!route('admin.location.index')!!}"><i class="fa fa-photo"></i> <span>Location</span></a></li>
        <li class="{!!Active::setActive(2,'testimonial')!!}"><a href="{!!route('admin.testimonial.index')!!}"><i class="fa fa-photo"></i> <span>Testimonial</span></a></li>
         <li class="{!!Active::setActive(2,'image')!!}"><a href="{!!route('admin.image.index')!!}"><i class="fa fa-photo"></i> <span>Image</span></a></li>
         <li class="{!!Active::setActive(2,'tour')!!}"><a href="{!!route('admin.tour.index')!!}"><i class="fa fa-photo"></i> <span>Tour</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
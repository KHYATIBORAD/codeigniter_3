<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('welcome/home')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " href="ajax_task.php">
          <i class="bi bi-1-circle-fill"></i>
          <span>AJAX TASK:1</span>
        </a>
      </li><!-- End TASK:1 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="devloper.php">
              <i class="bi bi-circle"></i><span>Developer</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('welcome/feedback')?>">
              <i class="bi bi-circle"></i><span>Feedback</span>
            </a>
          </li>
          <li>
            <a href="secure_pass.php">
              <i class="bi bi-circle"></i><span>secure pass</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo site_url('welcome/viewuser')?>">
              <i class="bi bi-circle"></i><span>user data</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('welcome/viewfeedback')?>">
              <i class="bi bi-circle"></i><span>feedback data</span>
            </a>
          </li>
          <li>
            <a href="viewdevloper.php">
              <i class="bi bi-circle"></i><span>developer data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>AJAX</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="state_select_ajax.php">
              <i class="bi bi-circle"></i><span>select data</span>
            </a>
          </li>
          <li>
            <a href="state_insert.php">
              <i class="bi bi-circle"></i><span>state</span>
            </a>
          </li>
          <li>
            <a href="city_insert.php">
              <i class="bi bi-circle"></i><span>city</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
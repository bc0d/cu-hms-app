<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
  

     @switch( $admin->designation )
        @case("staff")
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('office/index')}}>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/room/allocation-list') }}>
            <i class="bi bi-house-add"></i>
            <span>Room Allocation</span>
          </a>
        </li><!-- End Room Allocation Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/vacate/request') }}>
            <i class="bi bi-clipboard-minus"></i>
            <span>Vacating Requests</span>
          </a>
        </li><!-- End Vacating Requests Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/rooms/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Room Details</span>
          </a>
        </li><!-- End Room Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/room-change/request') }}>
            <i class="bi bi-house-gear"></i>
            <span>Room Change Request</span>
          </a>
        </li><!-- End Room Change Request Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/student/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Students Details</span>
          </a>
        </li><!-- End Students Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/complaints/card') }}>
            <i class="bi bi-person-exclamation"></i>
            <span>Complaints</span>
          </a>
        </li><!-- End Complaints Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/bills/') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Bills & Fees</span>
          </a>
        </li><!-- End Bills & Fees Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/fee/maintanance') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Fee Maintanance</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('office/rules/card') }}>
            <i class="bi bi-pencil-square"></i>
            <span>Rules & Notices</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        @break
        @case("warden")
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('warden/index')}}>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/admission/request') }}>
            <i class="bi bi-clipboard-plus"></i>
            <span>Admission Request</span>
          </a>
        </li><!-- End Admission Request Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/vacate/request') }}>
            <i class="bi bi-clipboard-minus"></i>
            <span>Vacating Requests</span>
          </a>
        </li><!-- End Vacating Requests Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/student/card') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Students Details</span>
          </a>
        </li><!-- End Students Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/room-details/card') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Room Details</span>
          </a>
        </li><!-- End Room Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/fee/card') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Bills & Fees</span>
          </a>
        </li><!-- End Bills & Fees Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/fee/maintanance') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Fee Maintanance</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/rules/card') }}>
            <i class="bi bi-pencil-square"></i>
            <span>Rules & Notices</span>
          </a>
        </li><!-- End Rules & Notices Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('warden/complaints/card') }}>
            <i class="bi bi-person-exclamation"></i>
            <span>Complaints</span>
          </a>
        </li><!-- End Complaints Nav -->
        @break
        
        @case("hod")
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('hod/index')}}>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('hod/allocation/request')}}>
            <i class="bi bi-clipboard-plus"></i>
            <span>Allocation Requests</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('hod/vacate/request')}}>
            <i class="bi bi-clipboard-minus"></i>
            <span>Vacating Requests</span>
          </a>
        </li><!-- End Room Allocation Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('hod/students-details/all') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Students Details</span>
          </a>
        </li><!-- End Students Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('#') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Fee Dues</span>
          </a>
        </li><!-- End Room Details Nav -->
        @break
        @case("registrar")
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('registrar/index')}}>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/student/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Students Details</span>
          </a>
        </li><!-- End Students Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/room-details/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Room Details</span>
          </a>
        </li><!-- End Room Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/fee/card') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Bills & Fees</span>
          </a>
        </li><!-- End Bills & Fees Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/fee/maintanance') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Fee Maintanance</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/admins/manage') }}>
            <i class="bi bi-pencil-square"></i>
            <span>Manage Admins</span>
          </a>
        </li><!-- manage admin Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/rules/card') }}>
            <i class="bi bi-pencil-square"></i>
            <span>Rules & Notices</span>
          </a>
        </li><!-- End Rules & Notices Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/complaints/card') }}>
            <i class="bi bi-person-exclamation"></i>
            <span>Complaints</span>
          </a>
        </li><!-- End Complaints Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('registrar/request-admin') }}>
            <i class="bi bi-envelope"></i>
            <span>Request Admin</span>
          </a>
        </li><!-- End Complaints Nav -->
        @break
        @case("admin")
        <li class="nav-item">
          <a class="nav-link collapsed"  href={{ url('super-user/index')}}>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/admission/request') }}>
            <i class="bi bi-clipboard-plus"></i>
            <span>Admission Request</span>
          </a>
        </li><!-- End Admission Request Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/vacate/request') }}>
            <i class="bi bi-clipboard-minus"></i>
            <span>Vacating Requests</span>
          </a>
        </li><!-- End Vacating Requests Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/room/allocation-list') }}>
            <i class="bi bi-house-add"></i>
            <span>Room Allocation</span>
          </a>
        </li><!-- End Room Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/room-change/request') }}>
            <i class="bi bi-house-gear"></i>
            <span>Room Change Request</span>
          </a>
        </li><!-- End Room Change Request Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/student/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Students Details</span>
          </a>
        </li><!-- End Students Details Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/room-details/filter') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Room Details</span>
          </a>
        </li><!-- End Complaints Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/fee/card') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Bills & Fees</span>
          </a>
        </li><!-- End Bills & Fees Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/fee/maintanance') }}>
            <i class="bi bi-file-spreadsheet"></i>
            <span>Fee Maintanance</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/admins/manage') }}
          >
            <i class="bi bi-pencil-square"></i>
            <span>Manage Admins</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/rules/card') }}
          >
            <i class="bi bi-pencil-square"></i>
            <span>Rules & Notices</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href={{ url('super-user/complaints/card') }}>
            <i class="bi bi-person-exclamation"></i>
            <span>Complaints</span>
          </a>
        </li><!-- End Fee Maintanance Nav -->
        @break
      @endswitch

  </ul>    
</aside>

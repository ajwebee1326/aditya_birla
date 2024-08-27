<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <div class="app-brand demo ">
    <a href="{{route('admin.dashboard')}}" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bold ms-2"> <img src="{{ asset('frontend') }}/Images/Global Logo.png" width="180" alt="Logo" height="40"></span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>  
  <ul class="menu-inner py-1">

     <!-- Apps & Pages -->
    
    <li class="menu-item active">
      <a href="{{route('admin.dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-message-rounded-dots"></i>
        <div class="text-truncate" data-i18n="Contacts">Contacts</div>
      </a>
    </li>
     
    
  </ul>
  
  

</aside>
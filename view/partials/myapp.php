
<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <!-- <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg> -->
    <img class="bi me-2" width="30" height="24" src="view\public\images\heritech\logo\heritech_logo_black.png" alt="">
    <!-- <svg class="bi me-2" width="30" height="24"><use xlink:href="view\public\images\heritech\ht_logo.png"></use></svg> -->
    <span class="fs-5 fw-semibold">MENU</span>
  </a>
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        <span class="material-symbols-outlined">
          arrow_forward_ios
        </span>
        Equipos
      </button>
      <div class="collapse show" id="home-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Visualizar equipos</a></li>
          <li><a href="#" class="link-dark rounded">Modificar equipos</a></li>
          <li><a href="#" class="link-dark rounded">Eliminar equipos</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        <span class="material-symbols-outlined">
          arrow_forward_ios
        </span>
        Mantenciones
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Overview</a></li>
          <li><a href="#" class="link-dark rounded">Weekly</a></li>
          <li><a href="#" class="link-dark rounded">Monthly</a></li>
          <li><a href="#" class="link-dark rounded">Annually</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        <span class="material-symbols-outlined">
          arrow_forward_ios
        </span>
        Orders
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">New</a></li>
          <li><a href="#" class="link-dark rounded">Processed</a></li>
          <li><a href="#" class="link-dark rounded">Shipped</a></li>
          <li><a href="#" class="link-dark rounded">Returned</a></li>
        </ul>
      </div>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        Account
      </button>
      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">New...</a></li>
          <li><a href="#" class="link-dark rounded">Profile</a></li>
          <li><a href="#" class="link-dark rounded">Settings</a></li>
          <li><a href="#" class="link-dark rounded">Sign out</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>

<script src="sidebars.js"></script>
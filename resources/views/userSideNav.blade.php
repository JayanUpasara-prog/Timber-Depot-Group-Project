@php
    use Illuminate\Support\Facades\Request;
@endphp


<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
          <div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('UserDashboard') ? 'bg-warning active' : '' }}" href="UserDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('Registration') ? 'bg-warning active' : '' }}" href="Registration">
                          Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('Renew') ? 'bg-warning active' : '' }}" href="Renew">
                          Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('OwnershipChange') ? 'bg-warning active' : '' }}" href="OwnershipChange">
                        Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('PermitRequest') ? 'bg-warning active' : '' }}" href="PermitRequest">
                        Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('StockBookUpdate') ? 'bg-warning active' : '' }}" href="StockBookUpdate">
                        StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('Help') ? 'bg-warning active' : '' }}" href="Help">
                        Help
                    </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link {{ Request::is('UserLogout') ? 'bg-warning active' : '' }}" href="UserLogout">
                       Logout
                  </a>
               </li>
              </ul>
          </div>
      </nav>
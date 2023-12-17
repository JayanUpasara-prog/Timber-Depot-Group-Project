@php
    use Illuminate\Support\Facades\Request;
@endphp


<nav id="sidebar" class="mt-0 col-md-3 col-lg-2 d-md-block bg-light sidebar" style="background: linear-gradient(to right, #aaf0aa, #ffffff);">
          <div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('UserDashboard') ? 'bg-success active' : '' }}" href="UserDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('Registration') ? 'bg-success active' : '' }}" href="Registration">
                          Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('Renew') ? 'bg-success active' : '' }}" href="Renew">
                          Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('OwnershipChange') ? 'bg-success active' : '' }}" href="OwnershipChange">
                        Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('PermitRequest') ? 'bg-success active' : '' }}" href="PermitRequest">
                        Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('StockBookUpdate') ? 'bg-success active' : '' }}" href="StockBookUpdate">
                        StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('user.create') ? 'bg-success active' : '' }}" href="{{ route('user.create') }}">
                        Review
                    </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link {{ Request::is('UserLogout') ? 'bg-success active' : '' }}" href="UserLogout">
                       Logout
                  </a>
               </li>
              </ul>
          </div>
      </nav>
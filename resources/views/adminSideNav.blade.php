@php
    use Illuminate\Support\Facades\Request;
@endphp

<div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('AdminDashboard') ? 'bg-success active' : '' }}" href="AdminDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('index') ? 'bg-success active' : '' }}" href="index">
                          View Users
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('CheckRegistration') ? 'bg-success active' : '' }}" href="CheckRegistration">
                          Check Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('ViewRegisteredRecords') ? 'bg-success active' : '' }}" href="ViewRegisteredRecords">
                          View Registered Users
                      </a>
                  </li>  
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('CheckRenew') ? 'bg-success active' : '' }}" href="CheckRenew">
                          Check Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('CheckOwnershipChange') ? 'bg-success active' : '' }}" href="CheckOwnershipChange">
                        Check Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('ViewPermitRequests') ? 'bg-success active' : '' }}" href="ViewPermitRequests">
                      Check Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('CheckStockBookUpdate') ? 'bg-success active' : '' }}" href="CheckStockBookUpdate">
                          Check StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin.AdminViewRating') ? 'bg-success active' : '' }}" href="/ratings">
                       View Rating
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link {{ Request::is('WildCriminals') ? 'bg-success active' : '' }}" href="WildCriminals">
                         Wild Criminal Form
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link {{ Request::is('noticePage') ? 'bg-success active' : '' }}" href="noticePage">
                         Add Notices & Gazzets
                    </a>
                 </li>
                 
                 <li class="nav-item">
                  <a class="nav-link {{ Request::is('Logout') ? 'bg-success active' : '' }}" href="Logout">
                       Supported Website (Payment & LiveChat)
                  </a>
               </li>
              </ul>
          </div>
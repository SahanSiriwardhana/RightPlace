<div class="list-group properties-box1">
        <a href="/dashboard/my-account" class="list-group-item list-group-item-action">My Account</a>
        <a href="/dashboard/my-add" class="list-group-item list-group-item-action act">My Ads</a>
        <ul class="list-group sub-list-group">
            <a href="/dashboard/published-add">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             Published Ads
            <span class="badge badge-primary badge-pill">{{$publishedadcount}}</span>
            </li>
        </a>
        <a href="/dashboard/pending-add">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pending Ads
              <span class="badge badge-primary badge-pill">{{$pendingadcount}}</span>
            </li>
        </a>
        {{-- <a href="#">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             Canceled Ads 
              <span class="badge badge-primary badge-pill">{{$publishedadcount}}</span>
            </li>
        </a> --}}
          </ul>

          @can('isAdmin')
          <a href="#" class="list-group-item list-group-item-action">Admin Operations</a>
          <ul class="list-group sub-list-group">
            <a href="/dashboard/video-upload">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             Upload home video
              <span class="badge badge-primary badge-pill">{{$uploadedVideoCount}}</span>
            </li>
          </a>
          <a href="/dashboard/featured-project-upload">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Upload Featured Project Images
              <span class="badge badge-primary badge-pill">{{$countFeaturedProject}}</span>
            </li>
          </a>
          <a href="/dashboard/approve-panel">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             Approve ADs 
              <span class="badge badge-primary badge-pill">{{$countToapproveAds}}</span>
            </li>
          </a>

          <a href="/dashboard/all-users">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             All Users 
              <span class="badge badge-primary badge-pill">{{$usercount}}</span>
            </li>
          </a>

          <a href="/dashboard/estate-news">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             Estate News 
              <span class="badge badge-primary badge-pill">{{$usercount}}</span>
            </li>
          </a>
          
            </ul>
          
          @endcan
          

      </div> 
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="{{ route('admin.home') }}" class="menu-active"><i class="bi bi-bar-chart" aria-hidden="true"></i> Dashboard</a></li>

                    <li><a href="{{ route('admin.packages.index') }}"><i class="bi bi-list-check" aria-hidden="true"></i>Packages</a></li>

                    <li ><a href="{{ route('students.index') }}"><i class="bi bi-people" aria-hidden="true"></i>Students</a></li>

                    <li><a href="{{ route('applications.index') }}"><i class="bi bi-window-stack" aria-hidden="true"></i>Applications</a></li>

                    <li><a href="{{ route('enquiries.all') }}"><i class="bi bi-chat-square-text" aria-hidden="true"></i>Enquiries</a></li>

                    <li><a href="{{ route('manage.history') }}"><i class="bi bi-pen" aria-hidden="true"></i>Manage About Page</a></li>

                    <li><a href="{{ route('manage.contact_page') }}"><i class="bi bi-pencil-square" aria-hidden="true"></i>Manage Contact Page</a></li>

                    <li><a href="{{ route('admin.update_profile') }}"><i class="bi bi-person-square" aria-hidden="true"></i>Update Profile</a></li>

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right" aria-hidden="true"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

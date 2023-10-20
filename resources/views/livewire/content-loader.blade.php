<div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link  text-decoration-none">
            <img src="dist/img/departo.png" alt="departo Logo" class="brand-image img-circle "  >
            <span class="brand-text font-weight-medium">Departo CMS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="/dashboard" wire:click="selectMenu('dashboard')" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
                </a>
                
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Staffs
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-staff" wire:click="selectMenu('add-staff')" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Add Staff</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-staff" wire:click="selectMenu('view-staff')" class="nav-link">
                    <i class="far fa-list-alt nav-icon"></i>
                    <p>View Staff</p>
                    </a>
                </li>                  
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                    Students
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-student" wire:click="selectMenu('add-student')" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>                            
                        <p>Add Student</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-student" wire:click="selectMenu('view-student')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View Students</p>
                    </a>
                </li>
            </li>
            </ul>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-layer-group nav-icon"></i>
                <p>
                    Section
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-section" wire:click="selectMenu('add-section')" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>                            
                        <p>Add Section</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-section" wire:click="selectMenu('view-section')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View Sections</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-tasks nav-icon"></i>
                <p>
                    Tasks
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-task" wire:click="selectMenu('add-task')" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>                            
                        <p>Add Task</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-task" wire:click="selectMenu('view-task')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View Tasks</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-tag nav-icon"></i>
                <p>
                    Roles
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-role" wire:click="selectMenu('add-role')" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>                            
                        <p>Add Role</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-role" wire:click="selectMenu('view-role')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View Roles</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fab fa-odnoklassniki-square nav-icon"></i>
                <p>
                    Classes
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/view-class" wire:click="selectMenu('view-class')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View classes</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-book nav-icon"></i>
                <p>
                    Modules
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                    <a href="/add-module" wire:click="selectMenu('add-module')" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>                            
                        <p>Add Module</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-module" wire:click="selectMenu('view-module')" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                    <p>View Modules</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/issues" wire:click="selectMenu('issues')" class="nav-link">
                <i class="fas fa-box-tissue nav-icon"></i>
                <p>
                    Issues
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/notification" wire:click="selectMenu('notification')" class="nav-link">
                    <i class="fas fa-bell nav-icon"></i>
                    <p>
                        Notifications
                    </p>
                </a>
                
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>
                        Setting
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="fas fa-plus nav-icon"></i>                            
                            <p>Add Module</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/flot.html" class="nav-link">
                            <i class="far fa-list-alt nav-icon"></i>
                        <p>View Modules</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/logout" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>
                    Log Out
                </p>
                </a>
                
            </li>

            <div class="user-panel mt-5 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="/profile" class="d-block">Alexander Pierce</a>
                </div>
            </div>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>

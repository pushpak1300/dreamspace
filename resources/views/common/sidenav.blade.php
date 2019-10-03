<div class="side-content-wrap">
    @role('admin')
    @include('sidenav.admin')
    @endrole
    @role('staff')
    @include('sidenav.staff')
    @endrole
    @role('atudent')
    @include('sidenav.staff')
    @endrole
</div>
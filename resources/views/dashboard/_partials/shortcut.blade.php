<div class="row">

  <div class="col-md-3 col-sm-6 col-xs-12">
    <a href="{{ route('admin.projects.index') }}">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="ion ion-social-codepen-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ trans('projects.manage') }}</span>
        <span class="info-box-number">{{ $project_count }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ route('admin.groups.index') }}">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('groups.manage') }}</span>
              <span class="info-box-number">{{ $group_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="{{ route('admin.templates.index') }}">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-paper-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('templates.manage') }}</span>
              <span class="info-box-number">{{ $template_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="{{ route('admin.users.index') }}">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('users.manage') }}</span>
              <span class="info-box-number">{{ $user_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
</div>
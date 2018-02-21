<div class="row">
  <!-- Left col -->
  <section class="col-lg-7 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="nav-tabs-custom">
      <!-- Tabs within a box -->
      <ul class="nav nav-tabs pull-right">
        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
        <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
        <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
      </ul>
      <div class="tab-content no-padding">
        <!-- Morris chart - Sales -->
        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
      </div>
    </div>
    <!-- /.nav-tabs-custom -->
  </section>
  <!-- /.Left col -->

  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <section class="col-lg-5 connectedSortable">
    <!-- Map box -->
    <div class="box box-solid bg-light-blue-gradient">
      <div class="box-header">
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                  data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i></button>
        </div>
        <!-- /. tools -->

        <i class="fa fa-map-marker"></i>
      </div>
      <div class="box-body">
        <div id="world-map" style="height: 245px; width: 100%;"></div>
      </div>
      <!-- /.box-body-->
      <div class="box-footer no-border">
        <div class="row">
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <div id="sparkline-1"></div>
            <div class="knob-label">Visitors</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
            <div id="sparkline-2"></div>
            <div class="knob-label">Online</div>
          </div>
          <!-- ./col -->
          <div class="col-xs-4 text-center">
            <div id="sparkline-3"></div>
            <div class="knob-label">Exists</div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.box -->
  </section>
  <!-- right col -->
</div>
<!-- /.row (main row) -->
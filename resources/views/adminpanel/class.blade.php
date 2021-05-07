@include('adminpanel/include/header')
  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Class </h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <h3>Add Class</h3>
          </div>
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Comics </h3>
                  <a href="{{url('adminpanel/addclass')}}" class="float-right btn btn-primary">Add Class</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  @if (Session::has('status'))
                  <div class="bg-success">
                    {{Session::get('status')}}
                  </div>    
                  <?php Session::forget('status');?>
                  @endif
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Class Name</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      @if (count($records)==0)
                      <tr>
                        <Td>#</td>
                        <Td>Sorry no class exist as of now. Add a class to have option in menubar</td>
                      </tr>
                      @else
                      <?php $i=1;?>
                      @foreach ($records as $record)
                      <tr>
                        <td><?php echo $i;$i++;?></td>
                        <td>{{$record->class_name}}</td>
                        <td><a class="btn btn-danger" href="{{url('adminpanel/deleteclass')}}/{{$record->category_id}}">Delete</a></td>
                     </tr> 
                      @endforeach
                      
                      @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <?php echo $records->render(); ?> 
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@include('adminpanel/include/footer')  
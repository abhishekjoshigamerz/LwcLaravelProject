
@include('adminpanel/include/header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Comics </h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Subjects</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Subjects </h3>
                  @if (Session::has('status'))
                  <p class="alert alert-danger ">{{Session::get('status')}}</p>
                  <?php Session::forget('status');?>
                  @endif
                  
                  <a href="{{url('adminpanel/addsubjects')}}" class="float-right btn btn-primary">Make New Subject</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Subject Name</th>
                        <th>Class</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($records)==0)
                          <Tr>
                            <Td></Td>
                            <td>Sorry there are no subjects added in the record</td>
                          </tr>
                      @else
                      <?php $i=1;?>
                      @foreach ($records as $record)
                          <tr>
                            <td><?php echo $i;$i++;?></td>
                            <td>{{$record->subject_name}}</td>
                            <td>Likes: {{$record->likecounter}}</td>
                            <td>{{$record->getCL->class_name}}</td>
                            <td><a href="{{url('adminpanel/deletesubject/')}}/{{$record->subject_id}}" class="btn btn-delete">Delete</a></td>
                          </tr>
                      @endforeach
                      @endif
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {{ $records->links() }}
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
      
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('adminpanel/include/footer')  
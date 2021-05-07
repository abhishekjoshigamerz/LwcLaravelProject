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
            <li class="breadcrumb-item active">Comics</li>
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
                  <h3 class="card-title">Comics </h3>
                  <a href="{{url('adminpanel/addcomics')}}" class="float-right btn btn-primary">Upload New Comics</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Comics Name</th>
                        <th>Uploaded on</th>
                        <th>Language</th>
                        <th>Class</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      @foreach ($record as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->comics_name}}</td>
                        <td>
                          
                           {{$item->created_at}}
                          
                        </td>
                        <td><span class="badge bg-danger">{{$item->language}}</span></td>
                        <td><span class="badge bg-danger">{{$item->category}}</span></td>
                        <td><a href="deletecomics/{{$item->comics_id}}" class="btn btn-danger">Delete</a></td>
                        
                      </tr>
                      <?php $i++;?>
                      @endforeach
                      
                     
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {{ $record->links() }}
                  </ul>
                </div>
              </div>
            
  
              
              
            </div>
        </div>
      
       
      
       
       
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('adminpanel/include/footer')  
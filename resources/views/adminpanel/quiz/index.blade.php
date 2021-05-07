@include('adminpanel/include/header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quiz </h1> <p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quiz v1</li>
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
            <div class="card">
                <div class="card-header">
               
                  <form class="" method="POST" action="{{url('adminpanel/addquiz')}}">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Quiz
                    </button>
                  </form>
                </div>
                <!-- /.card-header -->
               
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                       
                        
                        <th>Quiz Name</th>
                        
                        <th>Class</th>
                        <th>Subject </th>
                        <th>Lesson in</th>
                        <th> In</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      @foreach ($record as $item)
                      <tr>
                        
                        <td>{{$i}}</td>
                     
                        <td>{{$item->quiz_name}}</td>
                        <td> {{$item->quiz_class_url}}</td>
                        <td>{{$item->quiz_subject_url}}</td>
                        <td>
                          
                           {{$item->quiz_subsubject_url}}
                          
                        </td>
                        <td><span class="badge bg-danger">{{$item->language}}</span></td>
                        
                        <td><a href="deletequiz/{{$item->quiz_id}}" class="btn btn-danger">Delete</a></td> 
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Quiz Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ 'importquiz/import' }}" enctype="multipart/form-data">
                    
            {{ csrf_field() }}
            <div class="card-body">
              
              
              <div class="form-group">
                <label for="exampleInputPassword1">Import Excel File data</label>
                <div class="custom-file">
                    <input type="file" name="select_file"  class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>

                </div>

              </div>  
              <input type="submit" class="btn btn-primary" value="Submit">
            </form>              
              </div>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
      </div> 
      </div>
    </div>
  </div>
@include('adminpanel/include/footer')

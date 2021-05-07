
@include('adminpanel/include/header')
  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Subject here </h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Subject </li>
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
        <div class="col-lg-12 ">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add Subject</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ 'addsubject/store' }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Subject Name</label>
                        <input type="text" class="form-control"  name="subjectname"  id="exampleInputEmail1" placeholder="Comics Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Class</label>
                        <select class="form-control" name="class" required>
                            <option value="">Select your class</option>
                            @foreach ($category as $class)
                            <option value="{{$class->category_id}}">{{$class->class_name}}</option>
                            @endforeach   
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Add Subject Cover Image</label>
                        <div class="custom-file">
                            <input type="file" name="thumbnail"  class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                        </div>
                      </div>                
                          
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Add Subject</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
           
        </div>
       
      </div>
      
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('adminpanel/include/footer')  
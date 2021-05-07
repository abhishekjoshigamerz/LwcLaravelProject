
@include('adminpanel/include/header')
  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Import PDF data</h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Import PDF</li>
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
                    <h3 class="card-title">Import PDF Data</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ 'importpdf/import' }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    <div class="card-body">
                      
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Import Excel File data</label>
                        <div class="custom-file">
                            <input type="file" name="select_file"  class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                        </div>
                      </div>                
                          
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Import</button>
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
@include('adminpanel/include/header')
  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Comics Pdf here </h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Comics </li>
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
                    <h3 class="card-title"></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ 'createpdf' }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Comics Name</label>
                        <input type="text" class="form-control"  name="comicsname"  id="exampleInputEmail1" placeholder="Comics Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Comics Tag</label>
                        <input type="text" name="comicstag"  class="form-control" id="exampleInputPassword1" placeholder="Enter a tag, for example for class 5 science just write class 5 science or if maths write class 5 maths." required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Comics Thumbnail: 758*758 image size only </label> 
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="thumbnail"  class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Comics PDF here to upload: </label> 
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="pdfthumbnail"  class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                              </div>
                            </div>
                       
                        <div class="form-group">
                            <label for="inputState">Choose Language</label>
                            <div class="input-group">
                         
                                <select id="inputState" name="language"  class="form-control" required>
                                    <option selected value="english">English</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="tamil">Tamil</option>
                                    <option value="telugu">Telugu</option>
                                    <option value="malayalam">Malayalam</option>
                                    <option value="marwari">Marwari</option>
                                  </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="inputState">Choose Class</label>
                                <div class="input-group">
                           
                                    <select id="inputState"  name="class" class="form-control" required>
                                        <option >Choose class</option>
                                        @foreach ($records as $record)
                                            <option  value="{{$record->category_id}}">{{$record->class_name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputState">Choose Subject</label>
                              <div class="input-group">
                         
                                  <select id="inputState"  name="subject" class="form-control" required>
                                     
                                     
                                    </select>
                              </div>
                          </div>
                          
                            <div class="form-group">
                              <label for="inputState">Add Comics Description here</label>

                              <div class="input-group">
                                <textarea name="comics_description" id="" class="form-control" row="20"></textarea>
                              </div>
                            </div>
                        
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
           
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
<script type="text/javascript">

  $(document).ready(function(){
      $('select[name="class"]').on('change',function(){
        var classId = $(this).val();
        if(classId){
          $.ajax({
            url:"{{url('adminpanel/ajax/subject/')}}/"+classId,
            type:'GET',
            dataType:"json",
            success:function(data){
              $('select[name="subject"]').empty();
              $.each(data, function(key, value) {
                $('select[name="subject"]').append('<option value="'+ value +'">'+ key +'</option>');
            });
            }
          });
        }else{
          $('select[name="subject"]').empty();
        }
      });
  });
</script>
@include('adminpanel/include/header')
  
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Video to  Comics  here </h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Video to Comics </li>
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
                    <h3 class="card-title">Edit Video To Comics</h3>
                  </div>
                  
                  <form method="POST" action="{{ url('adminpanel/v2ceditstore') }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Comics Name</label>
                        <input type="text" class="form-control"  name="comicsname"  id="exampleInputEmail1" value="{{$data->comicstovideo_name}}" placeholder="Comics Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Comics Tag</label>
                        <input type="text" name="comicstag"  class="form-control" value=
                        "{{$data->comicstovideo_tags_for_search}}" id="exampleInputPassword1" placeholder="Enter a tag, for example for class 5 science just write class 5 science or if maths write class 5 maths." required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Comics Thumbnail: Only upload  if you wish to change the thumbnail image </label> 
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="thumbnail"  class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile" >Choose file</label> 
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Comics PDF here to upload:  Only  you wish to change uploaded pic otherwise leave it blank!</label> 
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="pdfthumbnail"  class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                              </div>
                            </div>
                            
                          <input type="hidden" name="pdfID" value="{{$data->	video_to_comics_id }}" />
                            <div class="form-group">
                              <label for="inputState">Add Comics Description here</label>

                              <div class="input-group">
                                <textarea name="comics_description" id="textarea"   class="form-control" row="20">{{$data->comictovideo_description}}</textarea>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Add Comics iframe code here</label>
  
                                <div class="input-group">
                                  <textarea name="video_to_comics_iframe_code" id="textarea"   class="form-control" row="20">{{$data->video_to_comics_iframe_code}}</textarea>
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

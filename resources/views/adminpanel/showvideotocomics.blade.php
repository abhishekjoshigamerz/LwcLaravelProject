@include('adminpanel/include/header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">View Video to  Comics Record  </h1> 
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
                  <h3 class="card-title">View Video to  Comics Record </h3>
                  <a href="{{url('adminpanel/v2cadd')}}" class="float-right btn btn-primary">Import New Comics</a>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{url('adminpanel/v2cmassdelete')}}">
                  {{ csrf_field() }}
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><input type="checkbox" id="checkAll"> Select All</th>
                        <th style="width: 10px">#</th>
                        
                        <th>Comics Name</th>
                        <th>Uploaded on</th>
                        <th>Language</th>
                      
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      @foreach ($record as $item)
                      <tr>
                        <td><input name='id[]' type="checkbox" id="checkItem" value="<?php echo $item->video_to_comics_id; ?>"></td>
                        <td>{{$i}}</td>
                        <td>{{$item->comicstovideo_name}}</td>
                        <td>Likes: {{$item->likecounter}}</td>
                        <td>
                          
                           {{$item->created_at}}
                          
                        </td>
                        <td><span class="badge bg-danger">{{$item->languagetovideo}}</span></td>
                        
                        <td><a href="{{url('adminpanel')}}/v2cedit/{{$item->video_to_comics_id}}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{url('adminpanel')}}/v2cdelete/{{$item->video_to_comics_id}}" class="btn btn-danger">Delete</a></td>
                        
                      </tr>
                      <?php $i++;?>
                      @endforeach
                      
                      <input type="submit" name="submit" value="Delete Selected Data"/>
                    </tbody>
                  </table>
                </div>
              </form>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {{ $record->links() }}
                  </ul>
                </div>
              </div>  
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"> </script>
        <script language="javascript">
        $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
        });
        </script>
       
      
       
       
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('adminpanel/include/footer')  
@extends('backend.layouts.master')

@section('content')

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> All Category</h2>
                        <a class="btn btn-sm btn-outline-secondary mb-2" href="{{route('category.create')}}">Create a Category</a> <div></div>
                        <ul class="breadcrumb float-left">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Category</li>
                        </ul>
                        <p class="float-right">Total category: {{ App\Models\Category::count() }}</p>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                         @include('backend.layouts.notification')
                        <div class="header">
                            <h2><strong>Category</strong> Records</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                      <tr>
                                           <th>S.N.</th>
                                            <th>Title</th>                             
                                            <th>Photo</th>
                                            <th>Is parent</th>
                                            <th>Parents</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                      </tr>
                                    </thead>                            
                                    <tbody>
                                    @foreach($categories as $item)
                                    <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->title}}</td>

                                            <td><img src="{{$item->photo}}" alt="banner-image" style="max-height: 90px; max-width: 100px ;"></td>
                                            <td>{{$item->is_parent==1 ? 'Yes' : 'No'}}</td>
                                            <td>{{\App\Models\Category::where('id',$item->parent_id)->value('title')}}</td>
                                            <td><input type="checkbox" name="toggle" value="{{$item->id}}" data-toggle="switchbutton" {{$item->status=='active' ? 'checked' : ''}} data-onlabel="active" data-offlabel="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger"></td>
                                             <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <a href="{{route('category.edit',$item->id)}}" data-toggle="tooltip" title="edit" class="ebtn btn-sm btn-outlne-warning" data-placement="bottom"> <i class="fas fa-edit"></i> </a>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <form action="{{route('category.destroy',$item->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                <a href="" data-toggle="tooltip" title="delete" data-id= "{{$item->id}}"class="dbtn btn-sm btn-outlne-danger" data-placement="bottom"> <i class="fas fa-trash"></i> </a>
                                                </form>
                                                </div>
                                                </div> 
                                            </td>
                                             
                                         </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.dbtn').click(function (e) {
    var form = $(this).closest('form');
    var dataId = $(this).data('id');
    e.preventDefault();

 swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    form.submit();
    swal("Done! The category data has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
})
</script>
   <script>
      $('input[name=toggle]').change(function(){
         var mode = $(this).prop('checked');
         var id = $(this).val();
         //alert(id);
         $.ajax({
            url: "{{route('category.status')}}",
            method:"POST",
            data: {
                _token:'{{csrf_token()}}',
                  mode:mode,
                  id:id,
            },
            success: function (response) {
                 if (response.status) {
                    alert(response.msg);
                 } else {
                    alert('Please try again later');
                 }
            }
         }) 
      });
      //http://127.0.0.1:8000/admin/banner
   </script>
@endsection
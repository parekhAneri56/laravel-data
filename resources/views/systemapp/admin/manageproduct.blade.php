@extends('systemapp.admin.layout')
@section('titlename')
Manage All Products
@endsection
@section('dashboard')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Manage Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">         
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Products</h5>
             
              @if(Session('upd'))
            <div class="alter alter-danger">
              <strong class="text-dark">Hey!</strong>{{Session('upd')}}
            </div>
            @endif

            @if(Session('del'))
            <div class="alter alter-danger">
              <strong class="text-dark">Hey!</strong>{{Session('del')}}
            </div>
            @endif

              <!-- Table with stripped rows -->
              <table class="table table-striped" id="tab">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">created Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($data as $row)
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->product_name}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><a href='{{URL("/admin-login/admin-manageproduct/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete data')"><i class="bi bi-trash"></i></a> |

                    <a href='{{URL("/admin-login/admin-editproduct/".$row->id)}}' class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to edit data')"><i class="bi bi-pencil"></i></a> 
                  </td>
                  </tr>
                  @endforeach

                  </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->
  <script>
  $(document).ready(function () {
    $('#tab').DataTable();
});
</script>
  @endsection
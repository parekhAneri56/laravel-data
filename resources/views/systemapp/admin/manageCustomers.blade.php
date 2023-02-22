@extends('systemapp.admin.layout')
@section('titlename')
Manage All Customers
@endsection
@section('dashboard')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Manage Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">         
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Customers</h5>

            @if(Session('del'))
            <div class="alter alter-danger">
              <strong class="text-dark">Hey!</strong>{{Session('del')}}
            </div>
            @endif

              <!-- Table with stripped rows -->
              <table class="table table-striped" id="tab1">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Address</th>
                    <th scope="col">created Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($data as $row)
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->customers_name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->DOB}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><a href='{{URL("/admin-login/manageCustomers/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete data')"><i class="bi bi-trash"></i></a> |
                    
                    <a href="https://api.whatsapp.com/send/?phone=+91{{$row->mobile}}&text=hello%2C+we+will+contact+you+soon+for+your+query+thanks+for+contact+laravel+System+operations+&type=phone_number&app_absent=0" class="btn btn-sm btn-success" onclick="return confirm('Are you sure to send whatsapp')"><i class="bi bi-whatsapp text-white"></i></a>
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
    $('#tab1').DataTable();
});
</script>
  @endsection
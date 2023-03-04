<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5 bg-white p-5">         
    <div class="row">

<div class="col-md-12">
<h3 class="text-center" style="font-size:25px">Manage Your All Contacts</h3>
<hr class="border border-2 w-50 mx-auto">    

        @if(Session('del'))
            <div class="alter alter-danger">
              <strong class="text-dark">Hey!</strong>{{Session('del')}}
            </div>
            @endif

   
            <div class="w-100" style="overflow: auto">         
              <!-- Table with stripped rows -->
              <table class="table table-striped" id="tab">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">created Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($data as $row)
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->subject}}</td>
                    <td>{{$row->message}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><a href='{{URL("/admin-managecontact/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete data')"><i class="bi bi-trash"></i></a> 
                  </td>
                  </tr>
                  @endforeach

                  </tbody>
              </table>
             
            </div>
          </div>

        </div>
      </div>
     <script>
  $(document).ready(function () {
    $('#tab').DataTable();
});
</script>
</x-app-layout>
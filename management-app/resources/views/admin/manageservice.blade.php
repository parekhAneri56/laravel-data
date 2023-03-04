<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5 bg-white p-5">         

<div class="row">

    <div class="col-md-12">
    <h3 class="text-center" style="font-size:25px">Manage Your All Service</h3>
    <hr class="border border-2 w-50 mx-auto">    
  
<!--@if(Session('success'))
        
<div class="alert alert-success">
      
        <span class="text-dark">Hey {{ session('success') }} </span>
       
    </div>
    @endif-->

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

   <div class="w-100" style="overflow: auto">
    <table id="example" class="display" style="width:100%; overflow: auto;">
        <thead>
            <tr>
                <th>#id</th>
                <th>Service Title</th>
                <th>Service description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr align="center">

                <td>{{ $row->id}}</td>
                <td>{{ $row->title}}</td>
                <td>{{ $row->description}}</td>  
                <td><a href='{{URL("/admin-manageservice/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete data')"><i class="bi bi-trash"></i></a> |

                    <a href='{{URL("/admin-editservice/".$row->id)}}' class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to edit data')"><i class="bi bi-pencil"></i></a> 
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
    $('#example').DataTable();
});

</script>
</x-app-layout>
<!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                     <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <td class="column-title">sn</td>
                            </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Location </th>
                            <th class="column-title">resumee </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($builds as $build)
                          <tr class="even pointer">
                            <td class="a-center ">
                               <td class=" ">{{$build->id}}</td>
                            </td>
                            <td class=" ">{{$build->name}}</td>
                            <td class=" ">{{$build->email}} </td>
                            <td class=" ">{{$build->phone}} <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" "> {{$build->title}} </td>
                            <td class="a-right a-right "> {{$build->location}}</td>
                            <td class=" "><a href="{{url('/view', $build->id)}}">View CV</a> </td>
                            
                            <td class=" ">
                              <a class ="btn btn-danger" type="submit" href="Email">Delete</a>
                              <a class ="btn btn-primary" type="submit" href="Email">Accept</a>
                            </td>
                          </tr>
                      @endforeach
                        </tbody>
                      </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>

  <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
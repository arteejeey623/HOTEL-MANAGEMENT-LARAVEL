<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .table_deg{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
            margin-top: 40px;
            border-collapse: collapse;
           } 
           .table_deg th, .table_deg td {
            border: 2px solid white;
            padding: 10px;
         }

           .th_deg{
            background-color: skyblue;
            padding: 15px;
           }

        tr{
            border: 3px solid white;
        }    
    </style>
  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')

   <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table class="table_deg">
            <tr>
                <th class="th_deg">Room_id</th>
                <th class="th_deg">Customer Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrival Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Status Update</th>
            </tr>

        @foreach($data as $data)

            <tr>
                <td>{{$data->room_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->start_date}}</td>
                <td>{{$data->end_date}}</td>
                <td>
                  @if($data->status == 'approve')
                  <span style="color: green;">Approved</span>

                  @elseif($data->status == 'rejected')
                  <span style="color: red;">Rejected</span>

                  @elseif($data->status == 'waiting')
                  <span style="color: yellow;">Waiting</span>

                  @endif

                </td>
                <td>{{$data->room->room_title}}</td>
                <td>{{$data->room->price}}</td>
                <td>
                    <img style="width: 100!important" src="/room/{{$data->room->image}}">
                </td>
                <td>
                  <a onclick="return confirm('Are you sure you want to delete this data?');" class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a>
                </td>
                <td>
                  <span style="padding-bottom: 10px;">
                    <a class="btn btn-success" href="{{url('approve_booking', $data->id)}}">Approve</a>
                  </span>
                  <span>
                  <a class="btn btn-warning" href="{{url('reject_booking', $data->id)}}">Reject</a>
                  </span>
                </td>
            </tr>

            @endforeach


          </table>

        </div>
    </div>
</div> 

    @include('admin.footer')
  </body>
</html>
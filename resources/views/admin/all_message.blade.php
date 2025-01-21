<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
           .table_deg{
            border: 2px solid white;
            width: 90%;
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
                <th class="th_deg">Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Message</th>
                <th class="th_deg">Send Email</th>
            </tr>

        @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->message}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('send_mail', $data->id)}}">Send Email</a>
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
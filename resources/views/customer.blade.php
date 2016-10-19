<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{ csrf_token() }}" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


    <div class="panel panel-default">

<div class="panel-heading">
    <button type="button" class="btn btn-info "id="add" value="add"> new customer </button>

</div>

        <div class="panel-body">

            @include('newCustomer')
    <table class="table table-hover">

        <caption> Customer info</caption>
        <thead>

         <th>ID</th>
         <th>FirstName</th>
         <th>LAstName</th>
         <th>Gender</th>
         <th>Email</th>
         <th>phone</th>
         <th>ation</th>


       </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr id="customer{{ $customer->id }}">

                <td>  {{ $customer->id }}   </td>
                <td>  {{ $customer->first_name }}</td>
                <td>  {{ $customer->last_name }}</td>
                <td>
                @if($customer -> gender==0)
                 Male
                    @else
                    Female
                    @endif
                </td>
                <td>   {{ $customer->email }}</td>
                <td>   {{ $customer->phone }}</td>
                <td>
                    <button class="btn btn-success btn-edit" data-id="{{$customer->id }}">Edit</button>
                    <button class="btn btn-danger btn-delete" data-id="{{$customer->id }}">Delete</button>

                </td>
            </tr>
         @endforeach
        </tbody>
    </table>

        </div>
    </div>
    <!-- Trigger the modal with a button -->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });



$('#add').on('click',function () {
   $('#customer').modal('show');
});

    $('#frmCustomer').on('submit',function (e) {

       e.preventDefault();
        var form=$('#frmCustomer');
        var formData=form.serialize();
        var url=form.attr('action');
        $.ajax({
           type: 'post',
            url: url,
            data: formData,

            success: function (data) {
                console.log(data);
                addRow(data);
                $('#frmCustomer').trigger('reset');
                $('#first_name').focus();
            }
        });

    });

    function addRow(data) {

        var gender="";
        if(data.gender==0){
            gender="Male";

        }else {
            gender="Female";
        }

        var row = '<tr>' +
                    '<td>'+data.id+ '</td>'+
                    '<td>'+data.first_name + '</td>'+
                    '<td>'+data.last_name + '</td>'+
                    '<td>'+gender + '</td>'+
                    '<td>'+data.email + '</td>'+
                    '<td>'+data.phone + '</td>'+
                    '<td><button class="btn btn-success btn-edit" >Edit</button>'+
                        '<button class="btn btn-danger btn-delete">Delete</button></td>'+


        '</tr>';
        $('tbody').append(row);

    }




</script>


</div>

</body>
</html>


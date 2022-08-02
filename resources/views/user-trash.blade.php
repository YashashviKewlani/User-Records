@include('nav')
<!doctype html>
<html lang="en">

<head>
    <title>Customer Trash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <a href="{{ route('user.register') }}">
            <button class="btn btn-primary float-right m-2">Add</button>
        </a>
        <a href="{{ url('/user/display') }}">
            <button class="btn btn-primary float-right m-2">Customer View</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender </th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if ($item->gender == 'M')
                                Male
                            @elseif ($item->gender == 'F')
                                Female
                            @else
                                Others
                            @endif
                        </td>
                        {{-- using helper class
                        <td>{{ getFormatedDate($item->dob, 'd-M-Y') }}</td> --}}
                        {{-- using accessor in model --}}
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->country }}</td>
                        <td>
                            {{-- urlmethod --}}
                            {{-- <a href="{{url('/customer/delete/')}}/{{$item->customer_id}}"><button class="btn btn-danger">Delete</button></a> --}}
                            {{-- routemethod --}}
                            <a href="{{ route('user.forceDelete', ['id' => $item->user_id]) }}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                            <a href="{{ route('user.restore', ['id' => $item->user_id]) }}">
                                <button class="btn btn-primary">Restore</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

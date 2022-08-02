@include('nav')
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row m-2">
            <form action="" class="col-9">
                <div class="form-group">
                    <input id="" class="form-control" placeholder="Search by name or email" name="search"
                        type="search" value={{ $search }}>
                </div>
                <button class="btn btn-primary">Search</button>
                <a href="{{ url('/user/display') }}">
                    <button class="btn btn-primary" type="button">Reset</button>
                </a>
            </form>
            <div class="col-3">
                <a href="{{ route('user.register') }}">
                    <button class="btn btn-primary d-inline-block ml-2 float-right">Add</button>
                </a>
                <a href="{{ url('/user/trash') }}">
                    <button class="btn btn-danger d-inline-block ml-2 float-right">Go To Trash</button>
                </a>
            </div>
        </div>
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
                            <a href="{{ route('user.delete', ['id' => $item->user_id]) }}">
                                <button class="btn btn-danger">Trash</button>
                            </a>
                            <a href="{{ route('user.edit', ['id' => $item->user_id]) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="row">
            {{ $user->links() }}
        </div> --}}
    </div>
</body>

</html>

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

<body class="bg-dark">
    <form action="{{ $url }}" method="POST">
        @csrf
        <div class="container bg-white">
            <h3 class="text-center text-primary">{{ $title }}</h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input id="" class="form-control" type="text" name="name"
                        value="{{ $user->name }}">
                    <span class="danger">
                        @error('name')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input id="" class="form-control" type="email" name="email"
                        value="{{ $user->email }}">
                    <span class="danger">
                        @error('email')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input id="" class="form-control" type="password" name="password">
                    <span class="danger">
                        @error('password')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input id="" class="form-control" type="password" name="confirm_password">
                    <span class="danger">
                        @error('confirm_password')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">State:</label>
                    <input id="" class="form-control" type="text" name="state"
                        value="{{ $user->state }}">
                    <span class="danger">
                        @error('state')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Country:</label>
                    <input id="" class="form-control" type="text" name="country"
                        value="{{ $user->country }}">
                    <span class="danger">
                        @error('country')
                            {{ message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md required">
                    <label for="">Address:</label>
                    <textarea id="" class="form-control" name="address">{{ $user->address }}</textarea>
                    <span class="danger">
                        @error('address')
                            {{ message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Gender:</label>
                    <br />
                    <div class="form-check form-check-inline">
                        <input id="" class="form-check-input" type="radio" name="gender" value="M"
                            {{ $user->gender == 'M' ? 'checked' : '' }} />
                        <label for="male" class="form-check-label">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input id="" class="form-control" type="radio" name="gender" value="F"
                            {{ $user->gender == 'F' ? 'checked' : '' }} />
                        <label for="female" class="form-check-label">
                            Female
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input id="" class="form-control" type="radio" name="gender" value="O"
                            {{ $user->gender == 'O' ? 'checked' : '' }} />
                        <label for="other" class="form-check-label">
                            Others
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth:</label>
                    <input id="" class="form-control" type="date" name="dob"
                        value="{{ $user->dob }}">
                    <span class="danger">
                        @error('dob')
                            {{ message }}
                        @enderror
                    </span>
                </div>

            </div>
            <div class="text-center mb-4  p-3 ">
                <button class="btn btn-primary btn-lg col-xs-2 btn-block">
                    Submit
                </button>
            </div>
        </div>
    </form>
</body>

</html>

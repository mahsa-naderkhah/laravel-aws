




    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Users</h2>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>
            <th>Email</th>

        </tr>

        @foreach ($users as $user)

        <tr>

            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

        </tr>

        @endforeach

    </table>






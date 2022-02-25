@extends('layouts.main')

@section('title', 'Url Shortener')

@section('content')


    <div class="row ">
        <div class="card-body">


        <form action="{{ route('url.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Paste your Url</label>
                <input type="text" class="form-control" name="orginal_url" aria-describedby="emailHelp"
                    placeholder="Enter Url" required >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Expire</label>
              <input type="datetime-local" class="form-control"  name="expire_dateTime" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-hover" id="quiztable"  style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Shortened Url</th>
                        <th>Orginal Url</th>
                        <th>QR Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($urls as $url )
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <a href="{{ route('url.show',$url->shortened_url) }}" target="_blank">{{ route('url.show',$url->shortened_url) }}</a>
                        </td>
                        <td>

                            {{ $url->orginal_url }}
                        </td>
                    <td>
                        <div class="card-body">
                            {!! QrCode::size(100)->generate(route('url.show',$url->shortened_url)) !!}
                        </div>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#quiztable').DataTable({
                dom: "Blfrtip",
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }]
            });
        });
</script>
@endsection

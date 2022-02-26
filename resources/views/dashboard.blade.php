@extends('layouts.main')

@section('title', 'Url Shortener')


@section('content')


    <div class="row ">
        <div class="card-body">


        <form action="{{ route('url.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="URL">Paste your Url</label>
                <input type="text" class="form-control" name="orginal_url" aria-describedby="emailHelp"
                    placeholder="Enter Url" required >
            </div>
            <div class="form-group">
              <label for="ExpireDate">Expire</label>
              <input type="datetime-local" class="form-control"  name="expire_dateTime" >
            </div>
            <div class="form-group">
                <label for="ExpireDate">IP Block(Hit Url In Minute) </label>
                <input type="number" class="form-control" placeholder="Enter Number"  name="block_number" required >
              </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="quiztable">
                    <thead>
                        <tr>
                            <th class="text-center">#SL</th>
                            <th class="text-center">QR Code</th>
                            <th class="text-center">Shortened Url</th>
                            <th>Orginal Url</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($urls as $url )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="card-body">
                                    {!! QrCode::size(100)->generate(route('url.show',$url->shortened_url)) !!}
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('url.show',$url->shortened_url) }}" target="_blank">{{ route('url.show',$url->shortened_url) }}</a>
                            </td>
                            <td >
                                {{ $url->orginal_url }}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
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

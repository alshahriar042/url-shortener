@extends('layouts.main')

@section('title', 'Url Shortener')

@section('content')

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-hover" id="quiztable1"  style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>IP</th>
                        <th>Location</th>
                        <th>Device</th>
                        <th>Os</th>
                        <th>Platform</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report )
                    @foreach ($report->visits as $value )
                    <tr>
                        <td>{{ $report->iteration }}</td>
                        <td>
                            {{ $value->visitor_ip  }}
                       </td>
                         <td>
                            {{ $value->visitor_location }}
                        </td>
                        <td>
                            {{ $value->visitor_device }}
                        </td>
                        <td>
                            {{ $value->visitor_os }}

                        </td>
                        <td>
                            {{ $value->previous_platform }}
                        </td>

                    </tr>
                    @endforeach

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#quiztable1').DataTable({
                dom: "Blfrtip",
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }]
            });
        });
</script>
@endsection

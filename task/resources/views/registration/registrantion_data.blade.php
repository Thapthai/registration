@extends('component.main')


@push('js')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- =============================   data table ============================= --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
@push('css')
    <style>
        table,
        th,
        td {
            border: 1px solid;
            text-align: center;
            vertical-align: middle;
        }
    </style>
@endpush

@php
    $i = 1;
@endphp
@section('content')
    <div class="container mt-3">
        <h5>Registration Data</h5>
        <table id="example" class="display mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Last name</th>
                    <th>Phone No.</th>
                    <th>E-Mail</th>
                    <th>Adress</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->fname }}</td>
                        <td>{{ $item->lname }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address_receipt }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

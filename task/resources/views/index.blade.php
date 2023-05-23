@extends('component.main')


@push('js')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        function confirmMobile() {
            var moblie = document.getElementById("mobile").value
            var confMoblie = document.getElementById("confmobile").value
            if (moblie != confMoblie) {
                alert('Phone No. Not Matching!');
            }
        }

        function confirmEmail() {
            var email = document.getElementById("email").value
            var confemail = document.getElementById("confemail").value
            if (email != confemail) {
                alert('Email Not Matching!');
            }
        }
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

        .test {
            background-color: red;
            border-radius: 10px;

        }
    </style>
@endpush

@section('content')
    <div class="container mt-3">
        <h5>Registration Fee</h5>
        <table class="table">
            <tr>
                <th rowspan="2" scope="row">Registration Type</th>
                <th colspan="2">Non member</th>
                <th colspan="2">Student</th>
                <th colspan="2">member</th>
            </tr>
            <tr>
                <td>
                    <b>Early </b> <br>
                    untail 31 May<br>
                    2023
                </td>
                <td>
                    <b>Late</b> <br>
                    1 June - 30 June <br>
                    2023
                </td>
                <td>
                    <b>Early </b> <br>
                    untail 31 May<br>
                    2023
                </td>
                <td>
                    <b>Late</b> <br>
                    1 June - 30 June <br>
                    2023
                </td>
                <td>
                    <b>Early </b> <br>
                    untail 31 May<br>
                    2023
                </td>
                <td>
                    <b>Late</b> <br>
                    1 June - 30 June <br>
                    2023
                </td>

            </tr>
            <tr>
                <td>
                    <b> Lecture </b> <br>
                    1 - 2 Oct 2023
                </td>
                <td>500 USD</td>
                <td>550 USD</td>
                <td>350 USD</td>
                <td>550 USD</td>
                <td>400 USD</td>
                <td>550 USD</td>
            </tr>
            <tr>
                <td>
                    <b> WorkShop Room 1 </b> <br>
                    3 Oct 2023 Oct 2023
                </td>
                <td colspan="6">
                    500 USD <br>
                    Must registered together with Lecture
                </td>
            </tr>
            <tr>
                <td>
                    <b> WorkShop Room 2 </b> <br>
                    3 Oct 2023 Oct 2023
                </td>
                <td colspan="6">
                    250 USD <br>
                    Must registered together with Lecture
                </td>
            </tr>
        </table>

        <form action="{{ route('registration_form.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <h5 class="mt-3">Registration Form</h5>
            <div class="row">
                <div class="col">
                    First name
                    <input type="text" class="form-control" placeholder="First name" name="fname">
                </div>
                <div class="col">
                    Last name
                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row mt-3">
                <div class="col">
                    Mobile
                    <input name="mobile" type="text" required="1" id="mobile" class="form-control" />
                </div>
                <div class="col">
                    Confirm mobile
                    <input name="confmobile" type="text" id="confmobile" class="form-control" onblur="confirmMobile()" />
                </div>
                <div class="col">
                    E-mail
                    <input name="email" type="text" required="1" id="email" class="form-control" />
                </div>
                <div class="col">
                    Confirm E-mail
                    <input name="emailConfirm" type="text" id="confemail" class="form-control" onblur="confirmEmail()" />

                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    Organization / School / University
                    <select class="form-select" aria-label="Default select example" name="organization">
                        <option selected value="Organization">Organization</option>
                        <option value="Schools">Schools</option>
                        <option value="University">University</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    Name for issue receipt
                    <input type="text" class="form-control" name="name_receipt">
                </div>
                <div class="col">
                    Address for issue receipt
                    <input type="text" class="form-control" name="address_receipt">
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection

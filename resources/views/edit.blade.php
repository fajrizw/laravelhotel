@extends('layouts/main')
@section('container')
<!DOCTYPE html>
<html>

<head>

<body>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">

    <div class="container">
        <form action="{{ url('hotel', $hotel -> id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-25">
                    <label for="title" class="form-label">Hotel Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="name" class="form-control" id="name">
                </div>

            </div>
            <div class="row">
                <div class="col-25">
                    <label for="title" class="form-label">Location</label>
                </div>
                <div class="col-75">
                    <input type="text" name="location" class="form-control" id="location">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="title" class="form-label">Price per Night</label>
                </div>
                <div class="col-75">
                    <input type="text" name="price" class="form-control" id="price">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="title" class="form-label">Fasilitate</label>
                    <table>
                        <tr>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="wifi"
                                        name="fasilitate">

                                    <label class="form-check-label" for="inlineCheckbox1">Wifi</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="shower"
                                        name="fasilitate">

                                    <label class="form-check-label" for="inlineCheckbox1">Shower</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="pool"
                                        name="fasilitate">
                                    <label class="form-check-label" for="inlineCheckbox1">Pool</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="dbd"
                                        name="fasilitate">

                                    <label class="form-check-label" for="inlineCheckbox1">DoubleBed</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="breakfast" name="fasilitate">
                                    <label class="form-check-label" for="inlineCheckbox1">Breakfast</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="refrigator" name="fasilitate">
                                    <label class="form-check-label" for="inlineCheckbox1">Refrigator</label>
                                </div>
                            </td>
                        </tr>
                </div>
            </div>
            </table>
            <div class="row">
                <div class="col-25">
                    <label for="formFile" class="form-label">Image</label>
                </div>
                <div class="col-75">
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
            </div>
            <div class="row">
                <div class="col-25">

                    <label for="desc" class="form-label"> Description </label>
                </div>
                <div class="col-50">
                    <textarea id="desc" name="desc" style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <div class="row justify-content-end">
                <input type="submit" value="Edit Hotel">
            </div>

</body>

</html>

@endsection

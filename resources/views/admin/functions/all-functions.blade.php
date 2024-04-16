@extends('templates.admin.admin-main')
@section('title')
All functions
@endsection

@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('body')
<x-admintopheader />
<div class="main-container">
    <x-jobsmenu />

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">function Operations</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background: #f6f6f6;">
                    <div id="result"></div>
                    <div id="layoutdiv" style="position: absolute; width: 100%;z-index: 999;left: 0px;height:100%;">
                    </div>
                    <div id="getformdata"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- second section -->
    <div class="container mt-5">
        <div class="row bg-white mx-1">
            <div class="col-6 d-flex justify-content-start align-items-center">
                <p class="m-0 py-3 fw-bold fs-5">All functions</p>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="position-relative">
                    <input type="text" placeholder="Seach function" name="s" class="form-control"
                        style="width:400px;border:1px solid #0003">
                    <input type="submit" value="Search function" class="btn btn-dark position-absolute"
                        style="top:0px;right:0px">
                </form>
            </div>
        </div><br>
        <div class="row bg-white mx-1">
            <div class="col-8">
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="width:80%!important">Function Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($function as $function)
                        <tr>
                            <td> {{ $function->id }}</td>
                            <td> {{ $function->function_name }}</td>
                            <td class="">
                                <a href="#" class="btn btn-warning text-white edit mb-1" value="{{ $function->id }}"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-danger text-white delete mb-1" value="{{ $function->id }}"><i
                                        class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="add-new"
                    style="padding: 20px;border: 1px solid #0000001f;border-radius: 10px; margin: 12px 0px;background:#f6f6f6;position:sticky;top: 10px;">
                    <form id="addFunction" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="function_name" class="form-control py-3 h6"
                            placeholder="Add New Function..." style="border: 1px solid #00000069;">
                        <input type="submit" class="btn btn-primary w-100 py-2" value="Create New Function">

                        

                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>

</div>

<script>
$(document).ready(function() {
    $(".edit").click(function(event) {
        event.preventDefault();
        $('#layoutdiv').hide();
        var datas = $(this).attr('value');

        $.ajax({
            type: "GET",
            url: "/admin/edit-function/" + datas,
            success: function(data) {
                $("#getformdata").html(data);

            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    $(".delete").click(function(event) {
        event.preventDefault();
        $('#layoutdiv').hide();
        var data = confirm("Are You Sure You Want to Delete It?");
        if (data == true) {
            var datas = $(this).attr('value');
            $.ajax({
                type: "DELETE",
                url: "/admin/delete-function/" + datas,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Include CSRF token for Laravel protection
                },
                success: function(data) {
                    alert("Deleted Successfully!")
                    location.reload();
                },

                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Before Delete Please Remove Category From functions");
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    $("#addFunction").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "/admin/add-functions",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#addFunction")[0].reset();
                    alert("Function added successfully!");
                    window.location.reload('/admin/all-functions');
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});
</script>

</body>
@endsection
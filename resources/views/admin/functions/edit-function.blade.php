@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<link rel="stylesheet" type="text/css" href="/assets/css/admin/blogs.css">
@endsection

<form action="" id="addfunction" enctype="multipart/form-data" class="edit-blogs">
    @csrf
    <input type="hidden" name="id" id="hiddenid" value="{{ $members->id }}">
    <label for="title" class="fw-bold fs-4 mb-2 mt-3">Function Name</label>
    <input type="text" name="function_name" class="form-control py-3 h6" placeholder="Function Name here..."
        value="{{ $members->function_name }}">
    <input type="submit" class="btn btn-primary read-btn wi-100 text-center mb-4 py-2" style="width:100%!important" value="Update Function">
 </form>

<script>
$(document).ready(function() {
    $("#addfunction").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        var hiddenid = document.querySelector("#hiddenid").value;
        $.ajax({
            type: "POST",
            url: "/admin/update-function",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#addfunction")[0].reset();
                    alert("function updated successfully!");
                    window.location.reload('/admin/all-functions');
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});
</script>
@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<link rel="stylesheet" type="text/css" href="/assets/css/admin/blogs.css">
@endsection

<form action="" id="addindustry" enctype="multipart/form-data" class="edit-blogs">
    @csrf
    <input type="hidden" name="id" id="hiddenid" value="{{ $members->id }}">
    <label for="title" class="fw-bold fs-4 mb-2 mt-3">Industry Name</label>
    <input type="text" name="industry_name" class="form-control py-3 h6" placeholder="Industry Name Here..."
        value="{{ $members->industry_name }}">
    <input type="submit" class="btn btn-primary read-btn wi-100 text-center mb-4 py-2" style="width:100%!important" value="Update Industry">
 </form>

<script>
$(document).ready(function() {
    $("#addindustry").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        var hiddenid = document.querySelector("#hiddenid").value;
        $.ajax({
            type: "POST",
            url: "/admin/update-industry",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#addindustry")[0].reset();
                    alert("Industry updated successfully!");
                    window.location.reload('/admin/all-industries');
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});
</script>
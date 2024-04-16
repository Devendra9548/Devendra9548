<div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card text-center p-5">
                    <a href="{{ route('add-jobdetail') }}" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-plus h3"></i>
                        <p class="h6 mt-2" style="font-size:20px;line-height:1.5">Add New Job</p>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-5">
                    <a href="{{ route('all-jobs') }}" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-table h3"></i>
                        <p class="h6 mt-2" style="font-size:20px;line-height:1.5">View All Jobs</p>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-5">
                    <a href="{{ route('all-functions') }}" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-plus h3"></i>
                        <p class="h6 mt-2" style="font-size:20px;line-height:1.5">All Functions</p>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-5">
                    <a href="{{ route('all-industries') }}" class="text-dark text-decoration-none">
                        <i class="fa-solid fa-plus h3"></i>
                        <p class="h6 mt-2" style="font-size:20px;line-height:1.5">All Industry</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
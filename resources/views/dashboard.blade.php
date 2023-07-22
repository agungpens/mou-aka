<div class="row">
    <div class="col-lg-3 col-sm-6">
        <a href="{{ url('mou') }}">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Dokumen MOU</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">4565</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-sm-6">
        <a href="{{ url('user') }}">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Jumlah User</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">4565</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </a>
    </div>

</div>

@section('scripts')
    @if (session()->has('success'))
        <script>
            toastr.success(`{{ session('success') }}`);
            // Swal.fire(`{{ session('success') }}`, '', 'success')
        </script>
    @endif
@endsection

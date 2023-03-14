@extends('contributor.layout.master')
<!-- third party css -->
@section('judul')
<li>
    <h4 class="page-title-main">Destinasi</h4>
</li>
@endsection
@section('content')
<div class="card-body">

    <h4 class="mb-3 header-title">Horizontal form</h4>

    <form class="form-horizontal">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Email</label>
            <div class="col-8 col-xl-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Password</label>
            <div class="col-8 col-xl-9">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Re Password</label>
            <div class="col-8 col-xl-9">
                <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
            </div>
        </div>
        <div class="row mb-3 justify-content-end">
            <div class="col-8 col-xl-9">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkmeout">
                    <label class="form-check-label" for="checkmeout">Check me out !</label>
                </div>
            </div>
        </div>
        <div class="justify-content-end row">
            <div class="col-8 col-xl-9">
                <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
            </div>
        </div>
    </form>

</div>
@endsection
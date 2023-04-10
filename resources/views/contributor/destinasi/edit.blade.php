@extends('contributor.layout.master')
@section('judul')
    <li>
        <h2 class="page-title-main">Destinasi</h2>
    </li>
@endsection

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="font-weight-bold text-warning">Edit Destinasi</h4>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('destinasic') }}"
                                role="button"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('updateDestinasic', [$destinasi->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title">Nama Destinasi</label>
                                    <input type="text" name="dest_name" value="{{ $destinasi->dest_name }}"
                                        id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Destinasi Kategori</label>
                                    <select name="dest_category" class="form-select" aria-label="Default select">
                                        <option @if ($destinasi->dest_category=='Pusat Perbelanjaan') selected @endif > Pusat Perbelanjaan</option>
                                        <option @if ($destinasi->dest_category=='Monumen') selected @endif> Monumen</option>
                                        <option @if ($destinasi->dest_category=='Religi') selected @endif> Religi</option>
                                        <option @if ($destinasi->dest_category=='Nature and Outdoor') selected @endif> Nature and Outdoor</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Lokasi Destinasi</label>
                                    <input type="text" value="{{ $destinasi->dest_location }}" name="dest_location"
                                        id="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="dest_desc" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="dest_desc" id="dest_desc" rows="3">{{ $destinasi->dest_desc }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <p for=""> Cover : </p>
                                    <img src="{{ asset('/cover/' . $destinasi->dest_cover) }}" class="img-responsive"
                                        style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                        name="cover">
                                </div>
                                @if (count($destinasi->photodests) > 0)
                                    <p>Images:</p>
                                    @foreach ($destinasi->photodests as $img)
                                        <img src="{{ asset('/destinasi/' . $img->destphoto) }}" class="img-responsive"
                                            style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                        <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                            name="image_{{ $img->id }}">
                                    @endforeach
                                @endif
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</div>

@endsection


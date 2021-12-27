@extends('Admin.Template.template')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Halaman Galeri </h3>
        </div>

        <div class="title_right">
          <div class="form-group pull-right">
            <div class="input-group">
              <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      {{-- TAMBAH GALERI --}}
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('adminGallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Data Galeri</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <h2 class="control-label col-md-3 col-sm-3 ">Pilih Kategori Galeri</h2>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="kategori" required>
                                <option></option>
                                <option value="Masjid">Masjid</option>
                                <option value="Madrasah Diniyyah">Madrasah Diniyyah</option>
                                <option value="Pengajian Lapanan">Pengajian Lapanan</option>
                                <option value="Event">Event</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                        <div class="btn-group">
                            <input type="file" name="nama_gambar" data-target="#pictureBtn" data-edit="insertImage" required />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      {{-- start content --}}

      {{-- KATEGORI MASJID --}}
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Masjid </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">

                @foreach ($masjid as $m)
                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{ asset('AsSidasGallery/' . $m->foto) }}" alt="image" />
                      <div class="mask no-caption">
                        <div class="tools tools-bottom">
                          <a href="#" data-toggle="modal" data-target="#lock-foto-{{ $m->id }}"><i class="fa fa-eye"></i></a>
                          <a href="#" data-toggle="modal" data-target="#update-{{ $m->id }}"><i class="fa fa-pencil"></i></a>
                          <a href="#" onclick="document.getElementById('{{ $m->id }}').submit(); return confirm('Anda yakin menghapus data menu ini?');"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="caption">
                      <p><strong>Image Name</strong>
                      </p>
                      <p>Snow and Ice Incoming</p>
                    </div> --}}
                  </div>
                </div>

                  {{-- LOCK A IMAGE --}}
                    <div class="modal fade" id="lock-foto-{{ $m->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('AsSidasGallery/' . $m->foto) }}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                </div>
                        </div>
                        </div>
                    </div>

                  {{-- MODAL FOR UPDATE   --}}
                    <div class="modal fade" id="update-{{ $m->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('adminGallery.update', $m->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="PUT" name="_method">
                                {{-- <input type="hidden" name="id" value="{{ $m->id }}"> --}}
                                <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Data Galeri</h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <h2 class="control-label col-md-3 col-sm-3 ">Pilih Kategori Galeri</h2>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control" name="kategori" required>
                                                <option value="{{ $m->kategori }}">{{ $m->kategori }}</option>
                                                <option>---</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Madrasah Diniyyah">Madrasah Diniyyah</option>
                                                <option value="Pengajian Lapanan">Pengajian Lapanan</option>
                                                <option value="Event">Event</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <input type="file" name="nama_gambar" />
                                            <input type="hidden" name="nama_gambar_alternatif" value="{{ $m->foto }}" required />
                                        </div>
                                        <img src="{{ asset('AsSidasGallery/' . $m->foto) }}" style="width: 100%; height: 100%; " alt="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>

                  {{-- FORM FOR DELETE --}}
                    <form action="{{ route('adminGallery.destroy', $m->id) }}" method="POST"
                            id="{{ $m->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                    </form>

                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- KATEGORI MADRASAH --}}
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Madrasah Diniyyah </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">

                @foreach ($md as $md)
                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{ asset('AsSidasGallery/' . $md->foto) }}" alt="image" />
                      <div class="mask no-caption">
                        <div class="tools tools-bottom">
                          <a href="#" data-toggle="modal" data-target="#lock-foto-{{ $md->id }}"><i class="fa fa-eye"></i></a>
                          <a href="#" data-toggle="modal" data-target="#update-{{ $md->id }}"><i class="fa fa-pencil"></i></a>
                          <a href="#" onclick="document.getElementById('{{ $md->id }}').submit(); return confirm('Anda yakin menghapus data menu ini?');"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="caption">
                      <p><strong>Image Name</strong>
                      </p>
                      <p>Snow and Ice Incoming</p>
                    </div> --}}
                  </div>
                </div>

                  {{-- LOCK A IMAGE --}}
                    <div class="modal fade" id="lock-foto-{{ $md->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('AsSidasGallery/' . $md->foto) }}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                </div>
                        </div>
                        </div>
                    </div>

                  {{-- MODAL FOR UPDATE   --}}
                    <div class="modal fade" id="update-{{ $md->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('adminGallery.update', $md->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="PUT" name="_method">
                                {{-- <input type="hidden" name="id" value="{{ $m->id }}"> --}}
                                <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Data Galeri</h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <h2 class="control-label col-md-3 col-sm-3 ">Pilih Kategori Galeri</h2>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control" name="kategori" required>
                                                <option value="{{ $md->kategori }}">{{ $md->kategori }}</option>
                                                <option>---</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Madrasah Diniyyah">Madrasah Diniyyah</option>
                                                <option value="Pengajian Lapanan">Pengajian Lapanan</option>
                                                <option value="Event">Event</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <input type="file" name="nama_gambar" />
                                            <input type="hidden" name="nama_gambar_alternatif" value="{{ $md->foto }}" required />
                                        </div>
                                        <img src="{{ asset('AsSidasGallery/' . $md->foto) }}" style="width: 100%; height: 100%; " alt="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>

                  {{-- FORM FOR DELETE --}}
                    <form action="{{ route('adminGallery.destroy', $md->id) }}" method="POST"
                            id="{{ $md->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                    </form>

                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- KATEGORI LAPANAN --}}
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Pengajian Lapanan </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">

                @foreach ($pl as $pl)
                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{ asset('AsSidasGallery/' . $pl->foto) }}" alt="image" />
                      <div class="mask no-caption">
                        <div class="tools tools-bottom">
                          <a href="#" data-toggle="modal" data-target="#lock-foto-{{ $pl->id }}"><i class="fa fa-eye"></i></a>
                          <a href="#" data-toggle="modal" data-target="#update-{{ $pl->id }}"><i class="fa fa-pencil"></i></a>
                          <a href="#" onclick="document.getElementById('{{ $pl->id }}').submit(); return confirm('Anda yakin menghapus data menu ini?');"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="caption">
                      <p><strong>Image Name</strong>
                      </p>
                      <p>Snow and Ice Incoming</p>
                    </div> --}}
                  </div>
                </div>

                  {{-- LOCK A IMAGE --}}
                    <div class="modal fade" id="lock-foto-{{ $pl->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('AsSidasGallery/' . $pl->foto) }}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                </div>
                        </div>
                        </div>
                    </div>

                  {{-- MODAL FOR UPDATE   --}}
                    <div class="modal fade" id="update-{{ $pl->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('adminGallery.update', $pl->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="PUT" name="_method">
                                {{-- <input type="hidden" name="id" value="{{ $m->id }}"> --}}
                                <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Data Galeri</h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <h2 class="control-label col-md-3 col-sm-3 ">Pilih Kategori Galeri</h2>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control" name="kategori" required>
                                                <option value="{{ $pl->kategori }}">{{ $pl->kategori }}</option>
                                                <option>---</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Madrasah Diniyyah">Madrasah Diniyyah</option>
                                                <option value="Pengajian Lapanan">Pengajian Lapanan</option>
                                                <option value="Event">Event</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <input type="file" name="nama_gambar" />
                                            <input type="hidden" name="nama_gambar_alternatif" value="{{ $pl->foto }}" required />
                                        </div>
                                        <img src="{{ asset('AsSidasGallery/' . $pl->foto) }}" style="width: 100%; height: 100%; " alt="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>

                  {{-- FORM FOR DELETE --}}
                    <form action="{{ route('adminGallery.destroy', $pl->id) }}" method="POST"
                            id="{{ $pl->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                    </form>

                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- KATEGORI EVENT --}}
      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Pengajian Lapanan </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="row">

                @foreach ($pl as $pl)
                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{ asset('AsSidasGallery/' . $pl->foto) }}" alt="image" />
                      <div class="mask no-caption">
                        <div class="tools tools-bottom">
                          <a href="#" data-toggle="modal" data-target="#lock-foto-{{ $pl->id }}"><i class="fa fa-eye"></i></a>
                          <a href="#" data-toggle="modal" data-target="#update-{{ $pl->id }}"><i class="fa fa-pencil"></i></a>
                          <a href="#" onclick="document.getElementById('{{ $pl->id }}').submit(); return confirm('Anda yakin menghapus data menu ini?');"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="caption">
                      <p><strong>Image Name</strong>
                      </p>
                      <p>Snow and Ice Incoming</p>
                    </div> --}}
                  </div>
                </div>

                  {{-- LOCK A IMAGE --}}
                    <div class="modal fade" id="lock-foto-{{ $pl->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('AsSidasGallery/' . $pl->foto) }}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                </div>
                        </div>
                        </div>
                    </div>

                  {{-- MODAL FOR UPDATE   --}}
                    <div class="modal fade" id="update-{{ $pl->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('adminGallery.update', $pl->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" value="PUT" name="_method">
                                {{-- <input type="hidden" name="id" value="{{ $m->id }}"> --}}
                                <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Data Galeri</h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <h2 class="control-label col-md-3 col-sm-3 ">Pilih Kategori Galeri</h2>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control" name="kategori" required>
                                                <option value="{{ $pl->kategori }}">{{ $pl->kategori }}</option>
                                                <option>---</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Madrasah Diniyyah">Madrasah Diniyyah</option>
                                                <option value="Pengajian Lapanan">Pengajian Lapanan</option>
                                                <option value="Event">Event</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <input type="file" name="nama_gambar" />
                                            <input type="hidden" name="nama_gambar_alternatif" value="{{ $pl->foto }}" required />
                                        </div>
                                        <img src="{{ asset('AsSidasGallery/' . $pl->foto) }}" style="width: 100%; height: 100%; " alt="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>

                  {{-- FORM FOR DELETE --}}
                    <form action="{{ route('adminGallery.destroy', $pl->id) }}" method="POST"
                            id="{{ $pl->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                    </form>

                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- end content --}}

    </div>
</div>

@endsection

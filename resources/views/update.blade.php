<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Biodata</title>
  <link href="update/stylee.css" rel="stylesheet">
</head>

<body>
  <div class="card card-primary">
    <div class="card-header">
      <h4>Edit Montir</h4>
    </div>

    <form action="{{ route('biodata.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf

      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama', $biodata->nama) }}" tabindex="1">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin"
                class="form-control @error('jenis_kelamin') is-invalid @enderror" tabindex="3">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" {{ old('jenis_kelamin', $biodata->jenis_kelamin) == 'L' ? 'selected' : '' }}>
                  Laki-Laki</option>
                <option value="P" {{ old('jenis_kelamin', $biodata->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                  Perempuan</option>
              </select>
              @error('jenis_kelamin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea id="alamat" name="alamat"
                class="form-control @error('alamat') is-invalid @enderror" tabindex="8">{{ old('alamat', $biodata->alamat) }}</textarea>
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="form-group">
                <label for="no_hp">no_hp</label>
                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                    value="{{ old('no_hp', $biodata->no_hp) }}" tabindex="1">
                @error('no_hp')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
            @enderror
        </div>

        </div>

        <div class="card-footer bg-whitesmoke">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>

</div>
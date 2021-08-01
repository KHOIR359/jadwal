@extends('layouts.app')

@section('content')

    <div class="fluid-container card">
        <div class="card-header fs-3">Edit Profile</div>
        <div class="card-body">

            <div class="row">

                <div class="col-5 profile-thumbnail">
                    <img src="images/profile/khoir.png" alt="profile image preview" id="img" class="rounded">
                    <input type="file" id="inputFile" class="d-none">
                    <div class="photo-hint">Change Photo</div>
                </div>
                <div class="col-7 profile-description pt-2">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label fs-5">Nama</label>
                        <input type="text" id="inputNama" class="form-control" placeholder="Cth: Abdul Khoir">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Kelas</label>
                        <select class="form-select" id="inputKelas">
                            <option value="X MIPA 1">X MIPA 1</option>
                            <option value="X MIPA 2">X MIPA 2</option>
                            <option value="X IPS 1">X IPS 1</option>
                            <option value="X IPS 2">X IPS 2</option>
                            <option value="X IPS 3">X IPS 3</option>
                            <option value="XI MIPA 1">XI MIPA 1</option>
                            <option value="XI MIPA 2">XI MIPA 2</option>
                            <option value="XI IPS 1">XI IPS 1</option>
                            <option value="XI IPS 2">XI IPS 2</option>
                            <option value="XI IPS 3">XI IPS 3</option>
                            <option value="XII MIPA 1">XII MIPA 1</option>
                            <option value="XII MIPA 2">XII MIPA 2</option>
                            <option value="XII IPS 1">XII IPS 1</option>
                            <option value="XII IPS 2">XII IPS 2</option>
                            <option value="XII IPS 3">XII IPS 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success w-100" id="update">Update</button>
        </div>
    </div>

    <script>
        if (!localStorage['nama']) {
            localStorage['nama'] = 'Abdul Khoir'
        }
        if (!localStorage['kelas']) {
            localStorage['kelas'] = 'XII MIPA 1'
        }
        if (!localStorage['gambar']) {
            localStorage['gambar'] = 'images/profile/khoir.png'
        }
        const inputNama = document.querySelector('#inputNama')
        const inputKelas = document.querySelector('#inputKelas')
        const inputFile = document.querySelector('#inputFile')
        const updateBtn = document.querySelector('#update')
        const profileThumbnail = document.querySelector('.profile-thumbnail')
        const nama = localStorage['nama'];
        const kelas = localStorage['kelas']
        const gambar = localStorage['gambar']
        const img = document.querySelector('#img')
        const update = () => {
            localStorage['nama'] = document.querySelector('#inputNama').value
            localStorage['kelas'] = document.querySelector('#inputKelas').value
            window.location.reload()
        }

        inputNama.value = nama;
        inputKelas.value = kelas;
        img.src = gambar;

        updateBtn.addEventListener('click', update)

        profileThumbnail.addEventListener('click', () => inputFile.click())

        inputFile.addEventListener('change', (e) => {
            var reader = new FileReader();
            reader.onload = function(f) {
                localStorage['gambar'] = f.target.result
                img.src = f.target.result
                update()
            }
            reader.readAsDataURL(e.target.files[0])
        })
    </script>

@endsection

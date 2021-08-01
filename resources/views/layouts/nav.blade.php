<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-0 mb-4">
    <div class="container p-0">
        <div class="navbar-brand text-white fw-bold p-0" href="#">
            <div class="hero-container card  shadow-sm d-flex justify-content-center">
                <div class="div d-flex">
                    <div class="icon-container">
                        <img class="profile-icon" src="/images/profile/khoir.png" alt="khoir-icon" class="">
                    </div>
                    <div class="text-container ">
                        <div class="fs-4 fw-bold baloo mx-3 mt-2 user-name text-primary">Abdul Khoir</div>
                        <div class="fs-6 fw-bold baloo mx-3 text-primary opacity-75 user-class">XII MIPA 1</div>
                    </div>
                </div>
            </div>
        </div>

        <button class="navbar-toggler mr-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse px-4" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Coming soon</a></li>
                        <li><a class="dropdown-item" href="#">Coming soon</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Coming soon</a></li>
                    </ul>
                </li>
        </div>
    </div>
</nav>


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
    document.querySelector('.user-name').textContent = localStorage['nama']
    document.querySelector('.user-class').textContent = localStorage['kelas']
    document.querySelector('.icon-container img').src = localStorage['gambar']
</script>

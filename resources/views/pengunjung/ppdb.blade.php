@extends('layouts.app')

@section('title', 'PPDB Online')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="padding: 150px 0 80px;">
        <div class="container">
            <div class="hero-content">
                <h1>PPDB Online</h1>
                <p>Penerimaan Peserta Didik Baru SD Negeri 4 Jatilaba</p>
            </div>
        </div>
    </section>

    <!-- PPDB Section -->
    <section>
        <div class="container">
            <div class="grid grid-2" style="gap: 50px;">
                <div style="animation: fadeInLeft 0.8s ease;">
                    <h2 style="color: var(--primary); margin-bottom: 20px; font-size: 2.2rem;">Informasi PPDB</h2>
                    
                    <div style="background: var(--white); padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Jadwal PPDB 2024</h3>
                        <div style="display: grid; gap: 15px;">
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--gray-light);">
                                <span style="color: var(--gray-dark);">Pendaftaran Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 500;">1 - 15 Juni 2024</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--gray-light);">
                                <span style="color: var(--gray-dark);">Pengumuman Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 500;">20 Juni 2024</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--gray-light);">
                                <span style="color: var(--gray-dark);">Pendaftaran Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 500;">25 - 30 Juni 2024</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 10px 0;">
                                <span style="color: var(--gray-dark);">Pengumuman Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 500;">5 Juli 2024</span>
                            </div>
                        </div>
                    </div>
                    
                    <div style="background: var(--white); padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-top: 30px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Persyaratan</h3>
                        <ul style="color: var(--gray-dark); line-height: 1.8;">
                            <li>Usia minimal 6 tahun per 1 Juli 2024</li>
                            <li>Fotokopi akta kelahiran</li>
                            <li>Fotokopi kartu keluarga</li>
                            <li>Pas foto 3x4 (2 lembar)</li>
                            <li>Surat keterangan sehat dari dokter</li>
                        </ul>
                    </div>
                </div>
                
                <div style="animation: fadeInRight 0.8s ease;">
                    <div class="card" style="padding: 40px;">
                        <h2 style="color: var(--primary); margin-bottom: 30px; text-align: center;">Formulir Pendaftaran</h2>
                        
                        @if(session('success'))
                        <div style="background: var(--primary-light); color: var(--white); padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center;">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form action="/ppdb" method="POST">
                            @csrf
                            <div style="display: grid; gap: 20px;">
                                <h4 style="color: var(--primary); margin-bottom: 10px;">Data Calon Siswa</h4>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                </div>
                        
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Jenis Kelamin</label>
                                    <div style="display: flex; gap: 20px;">
                                        <label style="display: flex; align-items: center; gap: 8px;">
                                            <input type="radio" name="jenis_kelamin" value="L" required>
                                            <span>Laki-laki</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 8px;">
                                            <input type="radio" name="jenis_kelamin" value="P">
                                            <span>Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Agama</label>
                                    <select name="agama" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit;">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Alamat</label>
                                    <textarea name="alamat" rows="3" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit; resize: vertical;"></textarea>
                                </div>
                                
                                <h4 style="color: var(--primary); margin-bottom: 10px; margin-top: 20px;">Data Orang Tua</h4>
                                
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                </div>
                                
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; class="border border-indigo-500"  border-radius: 10px; font-family: inherit;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">No. Telepon/HP</label>
                                    <input type="tel" name="no_telepon" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                </div>
                                
                                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-4 rounded-xl w-full mt-5">
                                    <i class="fas fa-paper-plane"></i> Daftar Sekarang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Tambahan -->
    <section style="background: var(--gray-light);">
        <div class="container">
            <div class="section-title">
                <h2>Informasi Tambahan</h2>
                <p>Hal-hal yang perlu diketahui calon orang tua siswa</p>
            </div>
            
            <div class="grid grid-3">
                <div class="card" style="text-align: center; padding: 30px;">
                    <div style="background: var(--primary); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-graduation-cap" style="font-size: 1.8rem; color: var(--white);"></i>
                    </div>
                    <h4 style="color: var(--primary); margin-bottom: 15px;">Kurikulum</h4>
                    <p style="color: var(--gray-dark);">Menggunakan Kurikulum Merdeka yang berfokus pada pengembangan karakter dan kompetensi siswa</p>
                </div>
                
                <div class="card" style="text-align: center; padding: 30px;">
                    <div style="background: var(--primary); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-book" style="font-size: 1.8rem; color: var(--white);"></i>
                    </div>
                    <h4 style="color: var(--primary); margin-bottom: 15px;">Ekstrakurikuler</h4>
                    <p style="color: var(--gray-dark);">Berbagai pilihan ekstrakurikuler untuk mengembangkan bakat dan minat siswa</p>
                </div>
                
                <div class="card" style="text-align: center; padding: 30px;">
                    <div style="background: var(--primary); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-heart" style="font-size: 1.8rem; color: var(--white);"></i>
                    </div>
                    <h4 style="color: var(--primary); margin-bottom: 15px;">Lingkungan</h4>
                    <p style="color: var(--gray-dark);">Lingkungan sekolah yang aman, nyaman, dan mendukung proses belajar mengajar</p>
                </div>
            </div>
        </div>
    </section>
@endsection
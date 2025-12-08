<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit K3 - PT Kimia Farma Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .table-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .table thead th {
            background-color: #003366;
            color: white;
            font-weight: 600;
            text-align: center;
            vertical-align: middle;
            font-size: 0.95rem;
            padding: 14px 8px;
        }

        .table tbody td {
            vertical-align: middle;
            padding: 16px 12px;
            font-size: 0.94rem;
        }

        .no-col {
            background-color: #f1f3f5;
            font-weight: 600;
            text-align: center;
            width: 70px;
        }

        .criteria-col {
            text-align: justify;
        }

        .check-col {
            text-align: center;
            font-size: 2.2rem;
            color: #28a745;
            font-weight: bold;
        }

        .doc-col {
            color: #003366;
            font-weight: 500;
        }

        .doc-col a {
            color: #003366;
            text-decoration: none;
        }

        .doc-col a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        .auditor-info {
            background: #e3f2fd;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            text-align: right;
            font-size: 0.9rem;
            color: #003366;
            margin-top: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 80px;
            font-style: italic;
            font-weight: 300;
        }
    </style>
</head>

<body>

    @include('layouts.navbar')

    <div class="container text-center max-w-5xl mx-auto py-5 pt-5 mt-5">

        <div class="table-container">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kriteria Audit SMK3</th>
                        <th>Penilaian</th>
                        <th>Keterangan / Bukti Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no-col">1.1.1</td>
                        <td class="criteria-col">
                            Terdapat kebijakan K3 yang tertulis, bertanggal, ditandatangani oleh pengusaha atau
                            pengurus, serta menyatakan tujuan, sasaran, dan komitmen peningkatan K3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 1.1.1
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.2</td>
                        <td class="criteria-col">
                            Kebijakan K3 disusun oleh pengusaha dan/atau pengurus melalui proses konsultasi dengan wakil
                            tenaga kerja
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 1.1.2
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.3</td>
                        <td class="criteria-col">
                            Perusahaan mengkomunikasikan kebijakan K3 kepada seluruh tenaga kerja, tamu, kontraktor,
                            pelanggan, dan pemasok dengan tata cara yang tepat
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 1.1.3
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.4</td>
                        <td class="criteria-col">
                            Kebijakan khusus dibuat untuk masalah K3 yang bersifat khusus
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf') }}"
                                target="_blank">
                                Kepmenaker No. 187/MEN/1999 (Terkait Bahan Kimia)
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.5</td>
                        <td class="criteria-col">
                            Kebijakan K3 dan kebijakan khusus lainnya ditinjau ulang secara berkala untuk menjamin bahwa
                            kebijakan tersebut sesuai dengan
                            perubahan yang terjadi dalam perusahaan dan dalam peraturan perundang-perundangan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 1.1.5
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.2.2</td>
                        <td class="criteria-col">
                            Penunjukan penanggung jawab K3 harus sesuai peraturan perundang-undangan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/UU-No-1-Tahun-1970.pdf') }}" target="_blank">
                                UU No. 1 Tahun 1970 Pasal 10 (P2K3)
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.2.4</td>
                        <td class="criteria-col">
                            Pengusaha atau pengurus bertanggung jawab secara penuh untuk menjamin pelaksanaan SMK3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 5
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.2.6</td>
                        <td class="criteria-col">
                            Perusahaan mendapatkan saran-saran dari para ahli di bidang K3 yang berasal dari dalam
                            dan/atau luar perusahaan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/UU-No-1-Tahun-1970.pdf') }}" target="_blank">
                                UU No. 1 Tahun 1970 Pasal 10
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.3.3</td>
                        <td class="criteria-col">
                            Pengurus harus meninjau ulang pelaksanaan SMK3 secara berkala untuk menilai kesesuaian dan
                            efektivitas SMK3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 15
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.3.3</td>
                        <td class="criteria-col">
                            Pengurus harus meninjau ulang pelaksanaan SMK3 secara berkala untuk menilai kesesuaian dan
                            efektivitas SMK3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 15
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.4.1</td>
                        <td class="criteria-col">
                            Keterlibatan dan penjadwal an konsultasi tenaga kerja dengan wakil perusahaan
                            didokumentasikan dan disebarluaskan keseluruh tenaga kerja.
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a>
                                Sesuai dengan Prosedur Komunikasi Internal PT Kimia Farma
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.4.4</td>
                        <td class="criteria-col">
                            Ketua P2K3 adalah pimpinan puncak atau pengurus
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a>
                                Sesuai dengan SK Direksi PT Kimia Farma tentang Struktur P2K3
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.4.6</td>
                        <td class="criteria-col">
                            P2K3 menitikberatkan kegiatan pada pengembangan kebijakan dan prosedur mengendalikan risiko
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 1.4.6
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.4.9</td>
                        <td class="criteria-col">
                            P2K3 melaporkan kegiatannya secara teratur sesuai dengan peraturan perundang- undangan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                Permenaker No. 04/MEN/1987 (Pelaporan Triwulan)
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">2.1.1</td>
                        <td class="criteria-col">
                            Terdapat prosedur terdokumentasi untuk identifikasi potensi bahaya, penelitian, dan
                            pengendalian risiko K3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 9 Ayat 3b
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">3.1.1</td>
                        <td class="criteria-col">
                            Prosedur yang terdokumentasi mempertimbangkan identifikasi potensi bahaya, penilaian, dan
                            pengendalian risiko yang dilakukan pada tahap perancangan dan modifikasi
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 11 Ayat 2b
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">3.1.1</td>
                        <td class="criteria-col">
                            Prosedur yang terdokumentasi mempertimbangkan identifikasi potensi bahaya, penilaian, dan
                            pengendalian risiko yang dilakukan pada tahap perancangan dan modifikasi
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Pasal 11 Ayat 2b
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">6.1.7</td>
                        <td class="criteria-col">
                            Alat pelindung diri yang digunakan dipastikan telah dinyatakan layak pakai sesuai dengan
                            standar dan/atau peraturan perundang-undangan yang berlaku.
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP-Nomor-50-Tahun-2012.pdf') }}" target="_blank">
                                PP No. 50 Tahun 2012 Lampiran II Poin 6.1.7
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">7.1.1</td>
                        <td class="criteria-col">
                            Pemeriksaan/inspeksi terhadap tempat kerja dan cara kerja dilaksanakan secara teratur.
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a>
                                Sesuai dengan Jadwal Inspeksi K3 Rutin PT Kimia Farma
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Info Auditor -->
        <div class="auditor-info">
            <strong>Lampiran Hasil Audit K3 PT Kimia Farma Sejahtera</strong><br>
        </div>

    </div>

    <footer>
        <p>© {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

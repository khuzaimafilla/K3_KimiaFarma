{{-- resources/views/pages/audit.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit K3 - PT Kimia Farma Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background: #f9f9f9; }
        .navbar { background-color: #003366; }
        .navbar-brand, .nav-link { color: white !important; }

        .table-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
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

    <div class="container py-4">

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
                            Terdapat kebijakan K3 yang tertulis, bertanggal, ditandatangani oleh pengusaha atau pengurus, serta menyatakan tujuan, sasaran, dan komitmen peningkatan K3
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP 50-2012 - Sistem Manajemen K3.pdf') }}" target="_blank">
                                PP 50/2012 – Sistem Manajemen K3
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.2</td>
                        <td class="criteria-col">
                            Kebijakan K3 disusun oleh pengusaha dan/atau pengurus melalui proses konsultasi dengan wakil tenaga kerja
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP 50-2012.pdf') }}" target="_blank">
                                PP 50/2012
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.1.3</td>
                        <td class="criteria-col">
                            Perusahaan mengkomunikasikan kebijakan K3 kepada seluruh tenaga kerja, tamu, kontraktor, pelanggan, dan pemasok dengan tata cara yang tepat
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/UU-No-1-Tahun-1970.pdf') }}" target="_blank">
                                UU No.1 Tahun 1970 K3
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.2.1</td>
                        <td class="criteria-col">
                            Tanggung jawab dan wewenang untuk mengambil tindakan dan melaporkan K3 telah ditetapkan dan dikomunikasikan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/PP 50-2012 - Sistem Manajemen K3.pdf') }}" target="_blank">
                                PP 50/2012 – Sistem Manajemen K3
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="no-col">1.4.3</td>
                        <td class="criteria-col">
                            Perusahaan membentuk P2K3 sesuai peraturan perundang-undangan
                        </td>
                        <td class="check-col">✔</td>
                        <td class="doc-col">
                            <a href="{{ asset('storage/pdfs/Permenaker 04-1987 - P2K3.pdf') }}" target="_blank">
                                Permenaker 04/1987 – P2K3
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
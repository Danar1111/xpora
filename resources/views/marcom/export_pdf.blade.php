<!DOCTYPE html>
<html>
<head>
    <title>Marcom Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 14px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 8px;
        }
        th, td {
            padding: 4px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        /* Pastikan header tetap di atas setiap halaman */
        thead {
            display: table-header-group;
        }
        tfoot {
            display: table-footer-group;
        }
        tbody {
            display: table-row-group;
        }
        /* Hindari baris tabel terpotong */
        tr {
            page-break-inside: avoid;
        }
        /* Style khusus untuk link */
        td.video-link, td.picture-link {
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>
    <h1>Marcom Report</h1>
    <table>
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Marcom Date</th>
                <th>Bizmatch Event Name</th>
                <th class="video-link">Video Link</th>
                <th class="picture-link">Picture Link</th>
                <th>Content Category</th>
                <th>Allocation</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->marcom_date }}</td>
                    <td>{{ $item->bizmatch_event_name }}</td>
                    <td class="video-link">{{ $item->video_link }}</td>
                    <td class="picture-link">{{ $item->picture_link }}</td>
                    <td>{{ $item->content_category }}</td>
                    <td>{{ $item->allocation }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Bizmatch Report</title>
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
        /* Style khusus untuk kolom panjang */
        td.result, td.progress {
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>
    <h1>Bizmatch Report</h1>
    <table>
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Event Name</th>
                <th>Partner Event</th>
                <th>Region Scope</th>
                <th>Country</th>
                <th>City</th>
                <th>Business Sector</th>
                <th>Product Category</th>
                <th>UMKM Name</th>
                <th>Buyer Name</th>
                <th class="progress">Progress</th>
                <th class="result">Result</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->event_name }}</td>
                    <td>{{ $item->partner_event }}</td>
                    <td>{{ $item->region_scope }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->business_sector }}</td>
                    <td>{{ $item->product_category }}</td>
                    <td>{{ $item->umkm_name }}</td>
                    <td>{{ $item->buyer_name }}</td>
                    <td class="progress">{{ $item->progress }}</td>
                    <td class="result">{{ $item->result }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

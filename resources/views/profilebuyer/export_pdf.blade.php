<!DOCTYPE html>
<html>
<head>
    <title>Profile Buyer Report</title>
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
    </style>
</head>
<body>
    <h1>Profile Buyer Report</h1>
    <table>
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Event Name</th>
                <th>Event Location</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>City</th>
                <th>Sector</th>
                <th>Interested Product</th>
                <th>PIC Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Website</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->event_name }}</td>
                    <td>{{ $item->event_location }}</td>
                    <td>{{ $item->company_name }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->sector }}</td>
                    <td>{{ $item->interested_product }}</td>
                    <td>{{ $item->pic_name }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->website }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

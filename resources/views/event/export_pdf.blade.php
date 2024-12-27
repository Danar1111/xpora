<!DOCTYPE html>
<html>
<head>
    <title>Event Report</title>
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
        td.event-description, td.event-document {
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>
    <h1>Event Report</h1>
    <table>
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Start Date</th>
                <th>Document No</th>
                <th>Event Name</th>
                <th>Region</th>
                <th>Country</th>
                <th>City</th>
                <th>Event Category</th>
                <th>Business Sector</th>
                <th>Product Name</th>
                <th>Proposed Budget</th>
                <th>Realized Budget</th>
                <th>Budget Type</th>
                <th class="event-document">Event Document</th>
                <th class="event-description">Event Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->start_date }}</td>
                    <td>{{ $item->document_no }}</td>
                    <td>{{ $item->event_name }}</td>
                    <td>{{ $item->region }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->event_category }}</td>
                    <td>{{ $item->business_sector }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ number_format($item->proposed_budget, 2) }}</td>
                    <td>{{ number_format($item->realized_budget, 2) }}</td>
                    <td>{{ $item->budget_type }}</td>
                    <td class="event-document">{{ $item->event_document }}</td>
                    <td class="event-description">{{ $item->event_description }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

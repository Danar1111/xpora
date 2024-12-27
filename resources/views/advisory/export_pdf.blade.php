<!DOCTYPE html>
<html>
<head>
    <title>Advisory Report</title>
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
        td.training-description, td.advisory-document {
            word-wrap: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>
    <h1>Advisory Report</h1>
    <table>
        <thead>
            <tr>
                <th class="center">ID</th>
                <th>Training Date</th>
                <th>Proposal No</th>
                <th>PIC Name</th>
                <th>Training Name</th>
                <th class="training-description">Training Description</th>
                <th>Internal Partner</th>
                <th>Instructor Name</th>
                <th>Province</th>
                <th>City</th>
                <th>Training Type</th>
                <th>Training Level</th>
                <th>Participant Count</th>
                <th>Proposed Budget</th>
                <th>Budget Type</th>
                <th class="advisory-document">Advisory Document</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="center">{{ $item->id }}</td>
                    <td>{{ $item->training_date }}</td>
                    <td>{{ $item->proposal_no }}</td>
                    <td>{{ $item->pic_name }}</td>
                    <td>{{ $item->training_name }}</td>
                    <td class="training-description">{{ $item->training_description }}</td>
                    <td>{{ $item->internal_partner }}</td>
                    <td>{{ $item->instructor_name }}</td>
                    <td>{{ $item->province }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->training_type }}</td>
                    <td>{{ $item->training_level }}</td>
                    <td>{{ $item->participant_count }}</td>
                    <td>{{ $item->proposed_budget }}</td>
                    <td>{{ $item->budget_type }}</td>
                    <td class="advisory-document">{{ $item->advisory_document }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

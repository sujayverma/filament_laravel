@php
use App\Model\Channel;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Emails</title>
    <style>
        /* Add your print styles here */
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Channel</th>
                <th>Video</th>
                <th>Email Subject</th>
                <th>Status</th>
                <th>Request Time</th>
                <th>Delivery Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($values as $value)
                <tr>
                    <td>{{$value['channel'] }}</td>
                    <td>{{$value['video'] }}</td>
                    <td>{{ $value['email_subject'] }}</td>
                    <td>{{ $value['status'] }}</td>
                    <td>{{$value['sending_date_time'] }}</td>
                    <td>{{$value['delivered_date_time'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        window.onload = function() {
            window.print(); // Automatically trigger the print dialog
        };
    </script>
</body>
</html>

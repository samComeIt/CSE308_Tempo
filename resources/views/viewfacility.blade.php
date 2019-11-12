<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Facility | Facilities</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of available facilities</h1>
        <table>
            <thead>
            <td>Name</td>
            <td>Location</td>
            <td>Category</td>
            <td>Type</td>
            <td>Capacity</td>
            <td>Picture</td>
            <td>Status</td>
            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            <tr>
                <td>{{ $facility->Name }}</td>
                <td class="inner-table">{{ $facility->Location }}</td>
                <td class="inner-table">{{ $facility->Category }}</td>
                <td class="inner-table">{{ $facility->Type }}</td>
                <td class="inner-table">{{ $facility->Capacity }}</td>
                <td class="inner-table">{{ $facility->Picture }}</td>
                <td class="inner-table">{{ $facility->Status }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

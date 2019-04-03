<table>
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Product Name</th>
        <th>Date Start</th>
        <th>Year Warranty</th>
    </tr>
    </thead>
    <tbody>
@foreach($Serials as $Serial)
    <tr>
        <td>{{ $Serial->name }}</td>
        <td>{{ $user->product->name }}</td>
        <td>{{ $user->datevarunty_start }}</td>
        <td>{{ $user->varunty_time }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>

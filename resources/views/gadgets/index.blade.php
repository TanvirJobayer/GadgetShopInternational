<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget-Shop International | Home</title>
</head>
<body>
    <h1>Gadget-Shop International | Home</h1>
    <hr>
    <p style="white-space: nowrap;">Add New Gadget: 👉 &nbsp;
        <button onclick="window.location.href='{{route('gadgets.create')}}'" style="background-color: bisque;">Add Gadget</button>
    </p>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gadgets as $gadget)
            <tr>
                <td>{{$gadgets->id}}</td>
                <td>{{$gadgets->name}}</td>
                <td>{{$gadgets->brand}}</td>
                <td>{{$gadgets->category}}</td>
                <td>{{$gadgets->price}}</td>
                <td>{{$gadgets->stock}}</td>
                <td></td>
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</body>
</html>
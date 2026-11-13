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
                <td>{{$gadget->id}}</td>
                <td>{{$gadget->name}}</td>
                <td>{{$gadget->brand}}</td>
                <td>{{$gadget->category}}</td>
                <td>{{$gadget->price}}</td>
                <td>{{$gadget->stock}}</td>
                <td style="white-space: nowrap;">
                    <button onclick="window.location.href='{{route('gadgets.show', $gadget->id)}}'" style="background-color: aquamarine;">View</button>
                    |
                    <button onclick="window.location.href='{{route('gadgets.edit', $gadget->id)}}'" style="background-color: cornflowerblue;">Add Gadget</button>
                    |
                    <form action="{{route('gadgets.delete', $gadget->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button style="background-color: orangered;">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center">No Data Found !</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>